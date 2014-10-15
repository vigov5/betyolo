<?php

/**
 * Deposit form.
 *
 * @package    betyolo
 * @subpackage form
 * @author     Nguyen Anh Tuan
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DepositForm extends BaseTransactionForm
{
  public function configure()
  {
    $this->useFields(array('amount'));
    $this->setDefault('type', Transaction::DEPOSIT);
    $this->setDefault('status', Transaction::PENDING);
    $this->setDefault('user_id', sfContext::getInstance()->getUser()->getGuardUser()->getId());

    $this->setWidgets(array(
      'status'    => new sfWidgetFormInputHidden(),
      'type'      => new sfWidgetFormInputHidden(),
      'user_id'   => new sfWidgetFormInputHidden(),
      'amount'    => new sfWidgetFormChoice(array('choices' => Transaction::$amounts)),
    ));

    $this->setValidators(array(
      'status'    => new sfValidatorChoice(array('choices' => array_keys(Transaction::$statuses))),
      'type'      => new sfValidatorInteger(),
      'amount'    => new sfValidatorInteger(),
      'user_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
    ));

    $this->widgetSchema->setNameFormat('deposit[%s]');
  }
}
