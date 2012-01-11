<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addlumdiscussion extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('LUM_Discussion', array(
             'discussionid' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'authuserid' => 
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
             'whisperuserid' => 
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
             'firstcommentid' => 
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
             'lastuserid' => 
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
             'active' => 
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
             'closed' => 
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
              'default' => '0',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 1,
             ),
             'sticky' => 
             array(
              'type' => 'enum',
              'fixed' => 0,
              'unsigned' => false,
              'values' => 
              array(
              0 => '9',
              1 => '8',
              2 => '7',
              3 => '6',
              4 => '5',
              5 => '4',
              6 => '3',
              7 => '2',
              8 => '1',
              9 => '0',
              ),
              'primary' => false,
              'default' => '0',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 1,
             ),
             'sink' => 
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
              'default' => '0',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 1,
             ),
             'name' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 100,
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
             'datelastactive' => 
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
             'countcomments' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '1',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 4,
             ),
             'categoryid' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => 4,
             ),
             'whispertolastuserid' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => 4,
             ),
             'whisperfromlastuserid' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => 4,
             ),
             'datelastwhisper' => 
             array(
              'type' => 'timestamp',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => false,
              'autoincrement' => false,
              'length' => 25,
             ),
             'totalwhispercount' => 
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
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'discussionid',
             ),
             'charset' => 'UTF8',
             ));
    }

    public function down()
    {
        $this->dropTable('LUM_Discussion');
    }
}