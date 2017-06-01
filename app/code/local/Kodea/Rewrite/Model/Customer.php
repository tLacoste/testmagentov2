<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RewritedModel
 *
 * @author user
 */

class Kodea_Rewrite_Model_Customer extends Mage_Customer_Model_Customer
{
  public function getName()
  {
	$name = '';
	if ($this->getPrefix()) {
	    $name .= $this->getPrefix() . ' ';
	}
	$name .= $this->getFirstname();
	if ($this->getMiddlename()) {
	    $name .= ' ' . $this->getMiddlename();
	}
	$name .=  ' ' . $this->getLastname();
	if ($this->getSuffix()) {
	    $name .= ' ' . $this->getSuffix();
	}
	return $name.'22222222';
  }
}

