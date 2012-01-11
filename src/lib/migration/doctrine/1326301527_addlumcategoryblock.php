<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addlumcategoryblock extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('LUM_CategoryBlock', array(
             'categoryid' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 4,
             ),
             'userid' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 4,
             ),
             'blocked' => 
             array(
              'type' => 'enum',
              'fixed' => 0,
              'unsigned' => false,
              'values' => 
              array(
              0 => '1',
              1 => '0',
              ),
              'primary' => false,
              'default' => '1',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 1,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'categoryid',
              1 => 'userid',
             ),
             'charset' => 'UTF8',
             ));
    }

    public function down()
    {
        $this->dropTable('LUM_CategoryBlock');
    }
}