<?php

class AddCategoryBetSideTables extends Doctrine_Migration_Base
{
  public function up()
  {
  	$columns = array(
        'id' =>  array(
            'type' => 'integer',
            'length' => 8,
            'autoincrement' => true,
            'primary' => true,
        ),
        'name' => array(
            'type'   => 'string',
            'length' => 255,
            'notnull' => true,
        ),
        'description' => array(
            'type'   => 'string',
            'length' => 4000,
            'notnull' => true,
        )
    );

    $options = array(
        'charset' => 'utf8'
    );

    $this->createTable( 'betyolo_category', $columns, $options );

    // create betyolo_side
    $columns = array(
        'id' =>  array(
            'type' => 'integer',
            'length' => 8,
            'autoincrement' => true,
            'primary' => true,
        ),
        'name' => array(
            'type'   => 'string',
            'length' => 255,
            'notnull' => true,
        ),
        'description' => array(
            'type'   => 'string',
            'length' => 4000,
            'notnull' => true,
        ),
        'category_id' =>  array(
            'type' => 'integer',
            'length' => 8,
            'notnull' => true,
        ),
    );

    $options = array(
        'charset' => 'utf8'
    );

    $this->createTable( 'betyolo_side', $columns, $options );

    $definition = array(
      'local'        => 'category_id',
      'foreign'      => 'id',
      'foreignTable' => 'betyolo_category',
      'onDelete'     => 'CASCADE',
    );

    $this->createForeignKey( 'betyolo_side', 'category_foreign_key', $definition );

    // create betyolo_bet
    $columns = array(
        'id' =>  array(
            'type' => 'integer',
            'length' => 8,
            'autoincrement' => true,
            'primary' => true,
        ),
        'creator_id' =>  array(
            'type' => 'integer',
            'length' => 8,
            'notnull' => true,
        ),
        'description' => array(
            'type'   => 'string',
            'length' => 4000,
            'notnull' => true,
        ),
        'side_a_id' =>  array(
            'type' => 'integer',
            'length' => 8,
            'notnull' => true,
        ),
        'side_b_id' =>  array(
            'type' => 'integer',
            'length' => 8,
            'notnull' => true,
        ),        
        'category_id' =>  array(
            'type' => 'integer',
            'length' => 8,
            'notnull' => true,
        ),
        'status' =>  array(
            'type' => 'integer',
            'length' => 8,
            'notnull' => true,
        ),     
        'result' =>  array(
            'type' => 'integer',
            'length' => 8,
            'notnull' => true,
        ),   
    );

    $options = array(
        'charset' => 'utf8'
    );

    $this->createTable( 'betyolo_bet', $columns, $options );

    $definition_1 = array(
        'local'        => 'category_id',
        'foreign'      => 'id',
        'foreignTable' => 'betyolo_category',
        'onDelete'     => 'CASCADE',
    );

    $this->createForeignKey( 'betyolo_bet', 'category_bet_foreign_key', $definition_1 );

    $definition_2 = array(
        'local'        => 'side_a_id',
        'foreign'      => 'id',
        'foreignTable' => 'betyolo_side',
        'onDelete'     => 'CASCADE',
    );

    $this->createForeignKey( 'betyolo_bet', 'side_a_foreign_key', $definition_2 );

    $definition_3 = array(
        'local'        => 'side_b_id',
        'foreign'      => 'id',
        'foreignTable' => 'betyolo_side',
        'onDelete'     => 'CASCADE',
    );

    $this->createForeignKey( 'betyolo_bet', 'side_b_foreign_key', $definition_3 );


  }

  public function down()
  {
    $this->dropTable( 'betyolo_bet' );
    $this->dropTable( 'betyolo_side' );
    $this->dropTable( 'betyolo_category' );
  }
}
