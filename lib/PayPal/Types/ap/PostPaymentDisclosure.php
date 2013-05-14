<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * Contains information related to Post Payment Disclosure
 * Details This contains 1.Receivers information 2.Funds
 * Avalibility Date 
 */
class PostPaymentDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\AccountIdentifier	 
	 */ 
	public $accountIdentifier;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var date	 
	 */ 
	public $fundsAvailabilityDate;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $fundsAvailabilityDateDisclaimerText;


}
