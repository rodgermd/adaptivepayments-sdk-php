<?php 
namespace paypalservice\types\ap;
/**
 * Describes the conversion between 2 currencies. 
 */
class CurrencyConversion  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $from;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $to;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $exchangeRate;


}
