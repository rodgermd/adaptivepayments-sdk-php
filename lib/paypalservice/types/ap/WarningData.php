<?php 
namespace paypalservice\types\ap;
/**
 * This type contains the detailed warning information
 * resulting from the service operation. 
 */
class WarningData  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var integer 	 
	 */ 
	public $warningId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $message;


}
