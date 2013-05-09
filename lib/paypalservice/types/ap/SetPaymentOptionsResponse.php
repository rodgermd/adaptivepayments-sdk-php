<?php 
namespace paypalservice\types\ap;
/**
 * The response message for the SetPaymentOption request 
 */
class SetPaymentOptionsResponse  
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
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}
