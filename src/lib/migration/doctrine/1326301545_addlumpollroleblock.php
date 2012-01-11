<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addlumpollroleblock extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('LUM_PollRoleBlock', array(
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
              'default' => '0',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 4,
             ),
             'roleid' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0',
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
        $this->dropTable('LUM_PollRoleBlock');
    }
}