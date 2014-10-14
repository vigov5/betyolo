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
  }

  public function executeUserdeposit(sfWebRequest $request)
  {
    $this->form = new DepositForm();

    if ($request->isMethod(sfRequest::POST)) {
      $this->form->bind($request->getParameter('deposit'));
      if ($this->form->isValid()) {
        $user_id = $this->form->getValue('user_id');
        if($user_id == sfContext::getInstance()->getUser()->getGuardUser()->getId()) {
          $this->form->save();
          $this->getUser()->setFlash('success', 'You successfully deposited');
        }
      } else{
        $this->getUser()->setFlash('error', 'You unsuccessfully deposited');
      }
    }
    $this->redirect('transaction/deposit');
  }
}
