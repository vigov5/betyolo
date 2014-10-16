<?php

/**
 * BetyoloBet filter form base class.
 *
 * @package    betyolo
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseBetyoloBetFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'creator_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('sfGuardUser'), 'add_empty' => true)),
      'description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'side_a_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SideA'), 'add_empty' => true)),
      'side_b_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SideB'), 'add_empty' => true)),
      'category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('BetyoloCategory'), 'add_empty' => true)),
      'status'      => new sfWidgetFormFilterInput(),
      'result'      => new sfWidgetFormFilterInput(),
      'start_dt'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'end_dt'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'creator_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('sfGuardUser'), 'column' => 'id')),
      'description' => new sfValidatorPass(array('required' => false)),
      'side_a_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SideA'), 'column' => 'id')),
      'side_b_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SideB'), 'column' => 'id')),
      'category_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('BetyoloCategory'), 'column' => 'id')),
      'status'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'result'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'start_dt'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'end_dt'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('betyolo_bet_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'BetyoloBet';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'creator_id'  => 'ForeignKey',
      'description' => 'Text',
      'side_a_id'   => 'ForeignKey',
      'side_b_id'   => 'ForeignKey',
      'category_id' => 'ForeignKey',
      'status'      => 'Number',
      'result'      => 'Number',
      'start_dt'    => 'Date',
      'end_dt'      => 'Date',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
