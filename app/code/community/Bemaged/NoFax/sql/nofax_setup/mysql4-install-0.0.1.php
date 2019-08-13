<?php
/**
* Bemaged NoFax Extension
*
* @category     Extension
* @copyright    Copyright (c) 2015 Matthijs IJsseldijk (https://www.bemaged.com)
* @author       Matthijs IJsseldijk
* @license
* @terms of use 
* @version      Release: 1.0
* @since        Release available since Release 1.0
*/

$installer = $this;

$installer->startSetup();

$installer->addAttribute('customer', 'fax', array(
	'type'              => 'varchar',
	'input'             => 'text',
	'label'             => 'Fax',
	'required'          => 0,
	'user_defined'      => 0,
	'unique'            => 0,
));

$installer->endSetup(); 