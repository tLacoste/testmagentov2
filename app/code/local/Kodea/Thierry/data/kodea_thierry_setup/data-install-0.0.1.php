<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of instal-1
 *
 * @author user
 */
$installer = $this;
$setup = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();
$setup->addAttribute('catalog_product', 'product_coulor', array(
    'input'         => 'text',
    'type'          => 'text',
    'label'         => 'product_color',
    'visible'       => true,
    'is_unique'     => true,
    'used_in_product_listing' => 1,
));

$installer->endSetup();