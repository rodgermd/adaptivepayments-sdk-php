<?php 
namespace paypalservice\types\ap;
/**
 * A table that contains a list of estimated currency
 * conversions for a base currency in each row. 
 */
class CurrencyConversionTable  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyConversionList 	 
	 */ 
	public $currencyConversionList;


}
