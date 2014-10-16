<?php

class Addbetstartenddatecolumn extends Doctrine_Migration_Base
{
  public function up()
  {
    $this->addColumn('betyolo_bet', 'start_dt', 'datetime');
    $this->addColumn('betyolo_bet', 'end_dt', 'datetime');
  }

  public function down()
  {
    $this->removeColumn( 'betyolo_bet', 'start_dt');
    $this->removeColumn( 'betyolo_bet', 'end_dt');
  }
}
