<?php

class Addhcoincolumn extends Doctrine_Migration_Base
{
  public function up()
  {
	  $this->addColumn('sf_guard_user', 'hcoin', 'integer', array('default' => 0));
  }

  public function down()
  {
	  $this->removeColumn('sf_guard_user', 'hcoin');
  }
}
