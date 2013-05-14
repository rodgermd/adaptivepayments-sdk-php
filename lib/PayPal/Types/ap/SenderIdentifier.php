<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * The sender identifier type contains information to identify
 * a PayPal account. 
 */
class SenderIdentifier  extends AccountIdentifier  
  {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean	 
	 */ 
	public $useCredentials;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\AP\TaxIdDetails	 
	 */ 
	public $taxIdDetails;


}
