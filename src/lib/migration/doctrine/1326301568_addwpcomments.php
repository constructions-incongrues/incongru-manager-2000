<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addwpcomments extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('wp_comments', array(
             'comment_id' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => true,
              'primary' => true,
              'autoincrement' => true,
              'length' => 8,
             ),
             'comment_post_id' => 
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
             'comment_author' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
              'length' => NULL,
             ),
             'comment_author_email' => 
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
             'comment_author_url' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 200,
             ),
             'comment_author_ip' => 
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
             'comment_date' => 
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
             'comment_date_gmt' => 
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
             'comment_content' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'notnull' => true,
              'autoincrement' => false,
              'length' => NULL,
             ),
             'comment_karma' => 
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
             'comment_approved' => 
             array(
              'type' => 'enum',
              'fixed' => 0,
              'unsigned' => false,
              'values' => 
              array(
              0 => '0',
              1 => '1',
              2 => 'spam',
              ),
              'primary' => false,
              'default' => '1',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 4,
             ),
             'comment_agent' => 
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
             'comment_type' => 
             array(
              'type' => 'string',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 20,
             ),
             'comment_parent' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 8,
             ),
             'user_id' => 
             array(
              'type' => 'integer',
              'fixed' => 0,
              'unsigned' => false,
              'primary' => false,
              'default' => '0',
              'notnull' => true,
              'autoincrement' => false,
              'length' => 8,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'comment_id',
             ),
             'charset' => 'UTF8',
             ));
    }

    public function down()
    {
        $this->dropTable('wp_comments');
    }
}