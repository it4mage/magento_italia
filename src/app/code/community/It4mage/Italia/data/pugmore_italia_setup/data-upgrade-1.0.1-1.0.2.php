<?php
/**
 * Created by PhpStorm.
 * User: ddonnini
 * Date: 29/09/14
 * Time: 17.11
 */ 
/* @var $installer Mage_Core_Model_Resource_Setup */
$installer = $this;
$installer->startSetup();

$installer->setConfigData('general/country/default', 'IT');
$installer->setConfigData('general/store_information/merchant_country', 'IT');
$installer->setConfigData('shipping/origin/country_id', 'IT');
$installer->setConfigData('tax/defaults/country', 'IT');

$installer->endSetup();
