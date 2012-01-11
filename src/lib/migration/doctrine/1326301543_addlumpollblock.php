<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addlumpollblock extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('LUM_PollBlock', array(
             'id' => 
             array(
              'type' => 'integer',
              'autoincrement' => true,
              'primary' => true,
              'length' => 8,
             ),
             'pollid' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
              'length' => 4,
             ),
             'userid' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
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
             'remoteip' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
              'length' => 30,
             ),
             'datecreated' => 
             array(
              'type' => 'timestamp',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0000-00-00 00:00:00',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'charset' => 'UTF8',
             ));
    }

    public function down()
    {
        $this->dropTable('LUM_PollBlock');
    }
}