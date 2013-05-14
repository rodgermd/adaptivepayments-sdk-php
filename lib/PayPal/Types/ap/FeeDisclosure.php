<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * FeeDisclosure contains the information related to Fees and
 * taxes. 
 */
class FeeDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\CurrencyType	 
	 */ 
	public $fee;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\CurrencyType	 
	 */ 
	public $taxes;


}
