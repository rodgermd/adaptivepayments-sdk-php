<?php 
namespace paypalservice\types\ap;
/**
 * The response to get the shipping addresses available for a
 * payment. 
 */
class GetShippingAddressesResponse  
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
	 
	 	 	 	 
	 * @var Address 	 
	 */ 
	public $selectedAddress;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var ErrorData 	 
	 */ 
	public $error;


}
