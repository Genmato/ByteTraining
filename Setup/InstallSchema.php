<?php

namespace Genmato\ByteTraining\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();

        $table = $installer->getConnection()->newTable(
            $installer->getTable('genmato_training')
        )->addColumn(
            'training_id',
            Table::TYPE_SMALLINT,
            null,
            [
                'identity' => true,
                'nullable' => false,
                'primary' => true,
            ],
            'Training Id'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            [
                'nullable' => false
            ],
            'Name of training'
        )->addColumn(
            'created_at',
            Table::TYPE_TIMESTAMP,
            null,
            [],
            'Created date/time'
        )->addIndex(
            $setup->getIdxName(
                $installer->getTable('genmato_training'),
                ['name'],
                AdapterInterface::INDEX_TYPE_FULLTEXT
            ),
            ['name'],
            ['type' => AdapterInterface::INDEX_TYPE_FULLTEXT]
        )->setComment(
            'Genmato Training'
        );

        $installer->getConnection()->createTable($table);

        $installer->endSetup();
    }

}