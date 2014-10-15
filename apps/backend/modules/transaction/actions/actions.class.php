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
    $this->transactions = Doctrine_Core::getTable('Transaction')
      ->createQuery('a')
      ->where('a.status = ?', Transaction::PENDING)
      ->execute();
  }

  public function executeConfirm(sfWebRequest $request)
  {
    $this->transaction = Doctrine_Core::getTable('Transaction')->find($request->getParameter('id'));

    $deposit_hcoin = $this->transaction->getAmount();

    $success = $this->transaction->deposit((int)$deposit_hcoin);

    $success ? $this->getUser()->setFlash('success', 'You successfully accepted deposit') : $this->getUser()->setFlash('error', 'You unsuccessfully accepted deposit');

    $this->redirect('transaction/index');
  }

  public function executeCancel(sfWebRequest $request)
  {
    $this->transaction = Doctrine_Core::getTable('Transaction')->find($request->getParameter('id'));

    $this->transaction->cancelDeposit();

    $this->getUser()->setFlash('success', 'You successfully canceled deposit');

    $this->redirect('transaction/index');
  }
}
