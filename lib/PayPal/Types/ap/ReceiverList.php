<?php 
namespace paypalservice\types\ap;
/**
 * 
 */
class ReceiverList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var Receiver 	 
	 */ 
	public $receiver;

	/**
	 * Constructor with arguments
	 */
	public function __construct($receiver = NULL) {
		$this->receiver = $receiver;
	}


}
