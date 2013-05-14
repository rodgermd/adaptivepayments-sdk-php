<?php 
namespace paypalservice\types\common;
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
	 
	 	 	 	 
	 * @var PhoneNumberType 	 
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
