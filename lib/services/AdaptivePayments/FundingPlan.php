<?php 
namespace PayPal\AdaptivePayments;
/**
 * FundingPlan describes the funding sources to be used for a
 * specific payment. 
 */
class FundingPlan  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fundingPlanId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $fundingAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var FundingSource 	 
	 */ 
	public $backupFundingSource;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $senderFees;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyConversion 	 
	 */ 
	public $currencyConversion;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var FundingPlanCharge 	 
	 */ 
	public $charge;


}
