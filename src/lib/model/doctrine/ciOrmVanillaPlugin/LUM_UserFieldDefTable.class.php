<?php

/**
 * LUM_UserFieldDefTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LUM_UserFieldDefTable extends PluginLUM_UserFieldDefTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object LUM_UserFieldDefTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('LUM_UserFieldDef');
    }
}