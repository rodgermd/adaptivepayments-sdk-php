<?php 
namespace paypalservice\types\ap;
/**
 * A list of ISO currencies. 
 */
class CurrencyList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $currency;

	/**
	 * Constructor with arguments
	 */
	public function __construct($currency = NULL) {
		$this->currency = $currency;
	}


}
