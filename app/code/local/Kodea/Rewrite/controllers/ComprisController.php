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
require_once "Kodea/Thierry/controllers/ComprisController.php";
class Kodea_Rewrite_ComprisController extends Kodea_Thierry_ComprisController
{
   public function lesroutesAction()
   {
     $this->loadLayout();
     $this->renderLayout();
     var_dump("Mon controleur modifié !");
   }
}
