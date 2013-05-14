<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * The response to get the backup funding sources available for
 * a preapproval. 
 */
class GetAllowedFundingSourcesResponse  
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
	 
	 	 	 	 
	 * @var paypalservice\Types\AP\FundingSource	 
	 */ 
	public $fundingSource;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\ErrorData	 
	 */ 
	public $error;


}
