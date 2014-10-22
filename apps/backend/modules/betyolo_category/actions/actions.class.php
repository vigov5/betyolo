<?php

require_once dirname(__FILE__).'/../lib/betyolo_categoryGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/betyolo_categoryGeneratorHelper.class.php';

/**
 * betyolo_category actions.
 *
 * @package    betyolo
 * @subpackage betyolo_category
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class betyolo_categoryActions extends autoBetyolo_categoryActions
{
  public function executeIndex(sfWebRequest $request)
  {

    $this->betyolo_categorys = Doctrine_Core::getTable('BetyoloCategory')
      ->createQuery('a')
      ->execute();

  }
}
