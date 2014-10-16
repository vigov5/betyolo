<?php

require_once dirname(__FILE__).'/../lib/betGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/betGeneratorHelper.class.php';

/**
 * bet actions.
 *
 * @package    betyolo
 * @subpackage bet
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class betActions extends autoBetActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->betyolo_bets = Doctrine_Core::getTable('BetyoloBet')
      ->createQuery('a')
      ->execute();
  }
}
