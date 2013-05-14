<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * A list of estimated currency conversions for a base
 * currency. 
 */
class CurrencyConversionList  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\CurrencyType	 
	 */ 
	public $baseAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\AP\CurrencyList	 
	 */ 
	public $currencyList;


}
