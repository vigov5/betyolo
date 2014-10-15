<?php

class Removehcoincolumnfromsfguardusertable extends Doctrine_Migration_Base
{
  public function up()
  {
	  $this->removeColumn('sf_guard_user', 'hcoin');
  }

  public function down()
  {
	  $this->addColumn('sf_guard_user', 'hcoin', 'integer', array('default' => 0));
  }
}
