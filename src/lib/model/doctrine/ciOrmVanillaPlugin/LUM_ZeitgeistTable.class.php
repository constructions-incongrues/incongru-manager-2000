<?php

/**
 * LUM_ZeitgeistTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LUM_ZeitgeistTable extends PluginLUM_ZeitgeistTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object LUM_ZeitgeistTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('LUM_Zeitgeist');
    }
}