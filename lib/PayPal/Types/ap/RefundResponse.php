<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * The result of a Refund request. 
 */
class RefundResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\ResponseEnvelope	 
	 */ 
	public $responseEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $currencyCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\AP\RefundInfoList	 
	 */ 
	public $refundInfoList;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\ErrorData	 
	 */ 
	public $error;


}
