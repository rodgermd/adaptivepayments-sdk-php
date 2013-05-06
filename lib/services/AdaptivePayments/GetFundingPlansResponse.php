<?php 
namespace PayPal\AdaptivePayments;
/**
 * The response to get the funding plans available for a
 * payment. 
 */
class GetFundingPlansResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ResponseEnvelope 	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var FundingPlan 	 
	 */ 
	public $fundingPlan;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}
