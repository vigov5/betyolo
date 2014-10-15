<?php

/**
 * category actions.
 *
 * @package    betyolo
 * @subpackage category
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryActions extends sfActions
{
  public function executeShow(sfWebRequest $request)
  {
    $this->betyolo_category = Doctrine_Core::getTable('BetyoloCategory')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->betyolo_category);
  }

}
