<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * 
 */
class UserLimit  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $limitType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\CurrencyType	 
	 */ 
	public $limitAmount;


}
