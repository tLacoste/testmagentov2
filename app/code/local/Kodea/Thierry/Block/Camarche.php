<?php
class Kodea_Thierry_Block_Camarche extends Mage_Core_Block_Template
{
     public function methodblock()
     {
         $monClient=new Mage_Customer_Model_Customer();
//         $monClient=new Kodea_Rewrite_Model_Customer();
         return "Ca marche<br/>Mon model modifié est de classe: ".$monClient->getName().get_class($monClient);
     }
     
     public function rewriteblock()
     {
         return "Je suis sur Kodea_Thierry";
     }
}
