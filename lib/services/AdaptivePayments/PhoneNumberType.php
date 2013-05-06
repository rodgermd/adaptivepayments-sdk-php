<?php 
namespace PayPal\AdaptivePayments;
/**
 * 
 */
if(!class_exists('PhoneNumberType', false)) {
class PhoneNumberType  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $countryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $phoneNumber;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $extension;

	/**
	 * Constructor with arguments
	 */
	public function __construct($countryCode = NULL, $phoneNumber = NULL) {
		$this->countryCode = $countryCode;
		$this->phoneNumber = $phoneNumber;
	}


}
}
