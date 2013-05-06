<?php 
namespace PayPal\AdaptivePayments;
/**
 * A response that contains a list of remaining limits 
 */
class GetUserLimitsResponse  
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
	 
	 	 	 	 
	 * @var UserLimit 	 
	 */ 
	public $userLimit;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var WarningDataList 	 
	 */ 
	public $warningDataList;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}
