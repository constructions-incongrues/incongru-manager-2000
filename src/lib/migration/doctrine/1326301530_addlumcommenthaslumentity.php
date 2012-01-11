<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addlumcommenthaslumentity extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('LUM_Comment_has_LUM_Entity', array(
             'commentid' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 4,
             ),
             'entityid' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 4,
             ),
             'entitytype' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => true,
              'autoincrement' => false,
              'length' => 45,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'commentid',
              1 => 'entityid',
              2 => 'entitytype',
             ),
             'charset' => 'UTF8',
             ));
    }

    public function down()
    {
        $this->dropTable('LUM_Comment_has_LUM_Entity');
    }
}