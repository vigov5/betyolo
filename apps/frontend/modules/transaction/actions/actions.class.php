<?php

/**
 * transaction actions.
 *
 * @package    betyolo
 * @subpackage transaction
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class transactionActions extends sfActions
{
  public function executeDeposit(sfWebRequest $request)
  {
    $this->form = new DepositForm();

    if ($request->isMethod(sfRequest::POST)) {
      $this->form->bind($request->getParameter('deposit'));
      if ($this->form->isValid()) {
        $this->form->save();
        $this->getUser()->setFlash('success', 'You successfully deposited');
      } else {
        $this->getUser()->setFlash('error', 'You unsuccessfully deposited');
      }

      $this->redirect('transaction/deposit');
    }

    $this->setTemplate('deposit');
  }

  public function executeWithdraw(sfWebRequest $request)
  {
    $this->form = new WithdrawForm();

    if ($request->isMethod(sfRequest::POST)) {
      $this->form->bind($request->getParameter('withdraw'));
      if ($this->form->isValid()) {
        $this->form->save();
        $this->getUser()->setFlash('success', 'You successfully withdrawed');
      } else {
        $this->getUser()->setFlash('error', 'You unsuccessfully withdrawed');
      }

      $this->redirect('transaction/withdraw');
    }

    $this->setTemplate('withdraw');
  }
}
