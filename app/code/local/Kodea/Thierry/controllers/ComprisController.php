<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author user
 */

class Kodea_Thierry_ComprisController extends Mage_Core_Controller_Front_Action
{
   public function lesroutesAction()
   {
     $this->loadLayout();
     $this->renderLayout();
   }
}
