<?php

class Diogo_Entrega_Model_Mysql4_Destiny extends Mage_Core_Model_Mysql4_Abstract 
{
	public function _construct(){
		$this->_init('diogo_entrega/destiny', 'id');
	}
}