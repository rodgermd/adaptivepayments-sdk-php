<?php 
namespace paypalservice\types\ap;
/**
 * The request to get the addresses available for a payment. 
 */
class GetShippingAddressesRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * The key for which to provide the available addresses. Key
	 * can be an AdaptivePayments key such as payKey or
	 * preapprovalKey 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $key;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $key = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->key = $key;
	}


}
