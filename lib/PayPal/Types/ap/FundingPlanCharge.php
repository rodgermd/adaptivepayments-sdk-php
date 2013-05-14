<?php 
namespace paypalservice\types\ap;
/**
 * Amount to be charged to a particular funding source. 
 */
class FundingPlanCharge  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $charge;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var FundingSource 	 
	 */ 
	public $fundingSource;


}
