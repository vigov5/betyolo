<?php

require_once dirname(__FILE__).'/../lib/transactionGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/transactionGeneratorHelper.class.php';

/**
 * transaction actions.
 *
 * @package    betyolo
 * @subpackage transaction
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class transactionActions extends autoTransactionActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->deposits = Doctrine_Core::getTable('Transaction')
      ->createQuery('d')
      ->where('d.status = ?', Transaction::PENDING)
      ->andWhere('d.type = ?', Transaction::DEPOSIT)
      ->execute();
    $this->withdraws = Doctrine_Core::getTable('Transaction')
      ->createQuery('w')
      ->where('w.status = ?', Transaction::PENDING)
      ->andWhere('w.type = ?', Transaction::WITHDRAW)
      ->execute();
  }

  public function executeConfirm(sfWebRequest $request)
  {
    $this->transaction = Doctrine_Core::getTable('Transaction')->find($request->getParameter('id'));

    $deposit_hcoin = $this->transaction->getAmount();

    if ($request->getParameter('type') == Transaction::DEPOSIT) {
      $success = $this->transaction->deposit((int)$deposit_hcoin);
    } elseif ($request->getParameter('type') == Transaction::WITHDRAW) {
      $success = $this->transaction->withdraw((int)$deposit_hcoin);
    }

    $success ? $this->getUser()->setFlash('success', 'You successfully accepted transaction') : $this->getUser()->setFlash('error', 'You unsuccessfully accepted transaction');

    $this->redirect('transaction/index');
  }

  public function executeCancel(sfWebRequest $request)
  {
    $this->transaction = Doctrine_Core::getTable('Transaction')->find($request->getParameter('id'));

    $this->transaction->cancelTransaction();

    $this->getUser()->setFlash('success', 'You successfully canceled transaction');

    $this->redirect('transaction/index');
  }
}
