<?php 
namespace paypalservice\types\ap;
/**
 * The response message for the GetPaymentOption request 
 */
class GetPaymentOptionsResponse  
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
	 
	 	 	 	 
	 * @var InitiatingEntity 	 
	 */ 
	public $initiatingEntity;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var DisplayOptions 	 
	 */ 
	public $displayOptions;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $shippingAddressId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var SenderOptions 	 
	 */ 
	public $senderOptions;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverOptions 	 
	 */ 
	public $receiverOptions;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}
