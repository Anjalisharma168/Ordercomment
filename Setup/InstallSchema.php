<?php
namespace Dotsquares\Ordercomment\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class InstallSchema implements InstallSchemaInterface

{

	 public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        $installer->getConnection()->addColumn(
            $installer->getTable('quote'),
            'customer_comment',
            [
	            'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                'comment' => 'Customer Comment',
            ]
        );

        $installer->getConnection()->addColumn(
            $installer->getTable('sales_order'),
	        'customer_comment',
	        [
		        'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
		        'comment' => 'Customer Comment',
	        ]
        );

        $setup->endSetup();
    }
}
 