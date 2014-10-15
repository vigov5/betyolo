<?php

/**
 * side actions.
 *
 * @package    betyolo
 * @subpackage side
 * @author     Nguyen Van Cuong
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sideActions extends sfActions
{
  public function executeShow(sfWebRequest $request)
  {
    $this->betyolo_side = Doctrine_Core::getTable('BetyoloSide')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->betyolo_side);
  }

}
