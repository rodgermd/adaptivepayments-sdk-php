<?php 
namespace PayPal\AdaptivePayments;
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
	 
	 	 	 	 
	 * @var AccountIdentifier 	 
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
