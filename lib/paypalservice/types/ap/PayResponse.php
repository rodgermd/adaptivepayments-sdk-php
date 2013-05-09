<?php 
namespace paypalservice\types\ap;
/**
 * The PayResponse contains the result of the Pay operation.
 * The payKey and execution status of the request should always
 * be provided. 
 */
class PayResponse  
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
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $payKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $paymentExecStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayErrorList 	 
	 */ 
	public $payErrorList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PaymentInfoList 	 
	 */ 
	public $paymentInfoList;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var SenderIdentifier 	 
	 */ 
	public $sender;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var FundingPlan 	 
	 */ 
	public $defaultFundingPlan;

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
