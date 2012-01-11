<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addwptags extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('wp_tags', array(
             'tag_id' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => true,
              'length' => 4,
             ),
             'tag' => 
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
              0 => 'tag_id',
             ),
             'charset' => 'UTF8',
             ));
    }

    public function down()
    {
        $this->dropTable('wp_tags');
    }
}