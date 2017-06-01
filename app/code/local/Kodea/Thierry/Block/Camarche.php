<?php
class Kodea_Thierry_Block_Camarche extends Mage_Core_Block_Template
{
     public function methodblock()
     {
         $monClient=new Mage_Customer_Model_Customer();
//         $monClient=new Kodea_Rewrite_Model_Customer();
         return "Ca marche<br/><br/>Mon model modifié devrait être de classe<br/>'Kodea_Rewrite_Model_Customer' et est de classe: <br/>'".get_class($monClient)."'<br/>".$monClient->getName();
     }
     
     public function rewriteblock()
     {
         return "Je suis sur Kodea_Thierry";
     }
}
