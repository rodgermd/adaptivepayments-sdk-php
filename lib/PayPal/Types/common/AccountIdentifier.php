<?php 
namespace PayPal\Types\Common;
use PayPal\Core\PPMessage;
/**
 * 
 */
if(!class_exists('AccountIdentifier', false)) {
class AccountIdentifier  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $email;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\PhoneNumberType	 
	 */ 
	public $phone;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $accountId;


}
}
