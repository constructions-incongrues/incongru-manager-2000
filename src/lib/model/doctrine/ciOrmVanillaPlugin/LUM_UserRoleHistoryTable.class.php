<?php

/**
 * LUM_UserRoleHistoryTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LUM_UserRoleHistoryTable extends PluginLUM_UserRoleHistoryTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object LUM_UserRoleHistoryTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('LUM_UserRoleHistory');
    }
}