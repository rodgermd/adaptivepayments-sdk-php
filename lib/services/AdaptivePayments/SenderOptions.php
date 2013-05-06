<?php 
namespace PayPal\AdaptivePayments;
/**
 * Options that apply to the sender of a payment. 
 */
class SenderOptions  
  extends PPMessage   {

	/**
	 * Require the user to select a shipping address during the web
	 * flow. 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $requireShippingAddressSelection;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $referrerCode;


}
