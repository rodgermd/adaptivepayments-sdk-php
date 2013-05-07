<?php 
namespace services\AdaptivePayments;
/**
 * A list of estimated currency conversions for a base
 * currency. 
 */
class CurrencyConversionList  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $baseAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyList 	 
	 */ 
	public $currencyList;


}
