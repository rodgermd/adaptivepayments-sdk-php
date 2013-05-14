<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * The response to get the shipping addresses available for a
 * payment. 
 */
class GetShippingAddressesResponse  
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
	 
	 	 	 	 
	 * @var paypalservice\Types\AP\Address	 
	 */ 
	public $selectedAddress;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\ErrorData	 
	 */ 
	public $error;


}
