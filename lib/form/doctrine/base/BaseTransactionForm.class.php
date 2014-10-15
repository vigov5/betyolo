<?php

/**
 * Transaction form base class.
 *
 * @method Transaction getObject() Returns the current form's model object
 *
 * @package    betyolo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTransactionForm extends BaseFormDoctrine
{
  public function setup()
  {
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
      'user_id'   => new sfValidatorInteger(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorCallback(array('callback' => array($this, 'checkUserId')))
    );

    $this->useFields(array('amount'));

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Transaction';
  }

  public function checkUserId($validator, $values)
  {
    if ($values['user_id'] != sfContext::getInstance()->getUser()->getGuardUser()->getId()) {
      throw new sfValidatorError($validator, 'Invalid user');
    }

    return $values;
  }
}
