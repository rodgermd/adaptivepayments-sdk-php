<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * Amount to be charged to a particular funding source. 
 */
class FundingPlanCharge  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\CurrencyType	 
	 */ 
	public $charge;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\AP\FundingSource	 
	 */ 
	public $fundingSource;


}
