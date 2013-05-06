<?php 
namespace PayPal\AdaptivePayments;
/**
 * FeeDisclosure contains the information related to Fees and
 * taxes. 
 */
class FeeDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $fee;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $taxes;


}
