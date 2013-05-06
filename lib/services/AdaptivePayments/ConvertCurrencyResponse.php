<?php 
namespace PayPal\AdaptivePayments;
/**
 * A response that contains a table of estimated converted
 * currencies based on the Convert Currency Request. 
 */
class ConvertCurrencyResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyConversionTable 	 
	 */ 
	public $estimatedAmountTable;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}
