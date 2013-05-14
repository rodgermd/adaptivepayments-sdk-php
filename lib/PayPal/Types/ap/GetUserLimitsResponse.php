<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * A response that contains a list of remaining limits 
 */
class GetUserLimitsResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\ResponseEnvelope	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\AP\UserLimit	 
	 */ 
	public $userLimit;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\AP\WarningDataList	 
	 */ 
	public $warningDataList;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\ErrorData	 
	 */ 
	public $error;


}
