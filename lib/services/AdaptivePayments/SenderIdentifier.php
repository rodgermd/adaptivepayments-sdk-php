<?php 
namespace PayPal\AdaptivePayments;
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
	 
	 	 	 	 
	 * @var TaxIdDetails 	 
	 */ 
	public $taxIdDetails;


}
