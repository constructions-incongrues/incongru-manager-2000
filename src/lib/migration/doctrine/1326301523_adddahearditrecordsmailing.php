<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Adddahearditrecordsmailing extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('dahearditrecords_mailing', array(
             'id' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'mail' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 255,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
             ),
             'charset' => 'UTF8',
             ));
    }

    public function down()
    {
        $this->dropTable('dahearditrecords_mailing');
    }
}