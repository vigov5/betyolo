<?php

/**
 * Withdraw form.
 *
 * @package    betyolo
 * @subpackage form
 * @author     Nguyen Anh Tuan
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class WithdrawForm extends BaseTransactionForm
{
  public function configure()
  {
    $this->setDefault('type', Transaction::WITHDRAW);

    parent::setup();

    $this->widgetSchema->setNameFormat('withdraw[%s]');
  }
}
