<?php

/**
 * LUM_CatalogItemsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LUM_CatalogItemsTable extends PluginLUM_CatalogItemsTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object LUM_CatalogItemsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('LUM_CatalogItems');
    }
}