<?php 
namespace services\AdaptivePayments;
/**
 * A list of ISO currency codes. 
 */
class CurrencyCodeList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $currencyCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($currencyCode = NULL) {
		$this->currencyCode = $currencyCode;
	}


}
