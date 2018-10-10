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

$rateCode = 'IT-IVA-22';
$rate = Mage::getModel('tax/calculation_rate')->loadByCode($rateCode);
if (!$rate || !$rate->getId()) {
    Mage::getModel('tax/calculation_rate')
        ->setCode($rateCode)
        ->setTaxCountryId('IT')
        ->setZipIsRange(0)
        ->setTaxPostcode('*')
        ->setRate(22.0000)
        ->save();

    $customerTaxClasses = Mage::getModel('tax/class')
        ->getCollection()
        ->addFieldToFilter('class_type', Mage_Tax_Model_Class::TAX_CLASS_TYPE_CUSTOMER)
        ->getItems();

    $productTaxClasses = Mage::getModel('tax/class')
        ->getCollection()
        ->addFieldToFilter('class_type', Mage_Tax_Model_Class::TAX_CLASS_TYPE_PRODUCT)
        ->getItems();
    $rate = Mage::getModel('tax/calculation_rate')->loadByCode($rateCode);

    Mage::getModel('tax/calculation_rule')
        ->setCode('Tasse Italia')
        ->setTaxCustomerClass(array_keys($customerTaxClasses))
        ->setTaxProductClass(array_keys($productTaxClasses))
        ->setTaxRate(array($rate->getId()))
        ->setPriority(1)
        ->setPosition(1)
        ->save();
}


$installer->endSetup();
