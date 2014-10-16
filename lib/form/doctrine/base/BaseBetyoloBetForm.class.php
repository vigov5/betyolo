<?php

/**
 * BetyoloBet form base class.
 *
 * @method BetyoloBet getObject() Returns the current form's model object
 *
 * @package    betyolo
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseBetyoloBetForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'creator_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'description' => new sfWidgetFormTextarea(),
      'side_a_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SideA'), 'add_empty' => false)),
      'side_b_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SideB'), 'add_empty' => false)),
      'category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BetyoloCategory'), 'add_empty' => false)),
      'status'      => new sfWidgetFormChoice(array('choices' => BetyoloBet::$statuses)),
      'result'      => new sfWidgetFormChoice(array('choices' => BetyoloBet::$results)),
      'start_dt'    => new sfWidgetFormDateTime(array('date' => array('can_be_empty' => false, 'format'=>'%day% - %month% - %year%',))),
      'end_dt'      => new sfWidgetFormDateTime(array('date' => array('can_be_empty' => false, 'format'=>'%day% - %month% - %year%',))),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'creator_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'required' => false)),
      'description' => new sfValidatorString(array('max_length' => 4000)),
      'side_a_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SideA'))),
      'side_b_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SideB'))),
      'category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('BetyoloCategory'))),
      'status'      => new sfValidatorChoice(array('choices' => array_keys(BetyoloBet::$statuses), 'required' => false)),
      'result'      => new sfValidatorChoice(array('choices' => array_keys(BetyoloBet::$results), 'required' => false)),
      'start_dt'    => new sfValidatorDateTime(),
      'end_dt'      => new sfValidatorDateTime(),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('betyolo_bet[%s]');

    $this->validatorSchema->setPostValidator(
      new sfValidatorSchemaCompare('start_dt', sfValidatorSchemaCompare::LESS_THAN_EQUAL, 'end_dt',
        array('throw_global_error' => true),
        array('invalid' => 'The start date ("%left_field%") must be before the end date ("%right_field%")')
      )
    );

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BetyoloBet';
  }

}
