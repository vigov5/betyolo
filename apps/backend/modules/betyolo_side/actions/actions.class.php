<?php

require_once dirname(__FILE__).'/../lib/betyolo_sideGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/betyolo_sideGeneratorHelper.class.php';

/**
 * betyolo_side actions.
 *
 * @package    betyolo
 * @subpackage betyolo_side
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class betyolo_sideActions extends autoBetyolo_sideActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->betyolo_sides = Doctrine_Core::getTable('BetyoloSide')
      ->createQuery('a')
      ->execute();
  }
}
