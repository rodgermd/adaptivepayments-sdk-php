<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * The result of the CancelPreapprovalRequest. 
 */
class CancelPreapprovalResponse  
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
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\ErrorData	 
	 */ 
	public $error;


}
