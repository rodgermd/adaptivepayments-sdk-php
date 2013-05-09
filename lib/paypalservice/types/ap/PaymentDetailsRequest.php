<?php 
namespace paypalservice\types\ap;
/**
 * The request to look up the details of a PayRequest. The
 * PaymentDetailsRequest can be made with either a payKey,
 * trackingId, or a transactionId of the PayRequest. 
 */
class PaymentDetailsRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

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
	public $transactionId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $trackingId;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL) {
		$this->requestEnvelope = $requestEnvelope;
	}


}
