<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kodea_Thierry_Mode_Observer
 *
 * @author user
 */
class Kodea_Thierry_Model_Observer {

    public function __construct() {
        
    }

    public function multiplieParDeuxQuantite($observer) {
//       Mage::app()->getRequest()->getParam('qty', 1);
//       $event = $observer->getEvent(); 
//       $model = $event->getQuote_item();
//       $model->setQty(1);
        
        
        // Fonctionnel
        $items = Mage::getSingleton('checkout/session')->getQuote()->getAllItems();
        $qty = Mage::app()->getRequest()->getParam('qty', 1);
        foreach ($items as $item) {
                $observer->getBuyRequest()->setQty($qty*2);
        }
    }

}
