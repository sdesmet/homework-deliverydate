<?php
$installer = $this;
$installer->startSetup();

$installer->addAttribute('quote', 'delivery_date', array('type' => Varien_Db_Ddl_Table::TYPE_DATE));
$installer->addAttribute('order', 'delivery_date', array('type' => Varien_Db_Ddl_Table::TYPE_DATE));
$installer->addAttribute('invoice', 'delivery_date', array('type' => Varien_Db_Ddl_Table::TYPE_DATE));
$installer->addAttribute('shipment', 'delivery_date', array('type' => Varien_Db_Ddl_Table::TYPE_DATE));

$installer->endSetup();