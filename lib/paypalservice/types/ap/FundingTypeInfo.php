<?php 
namespace paypalservice\types\ap;
/**
 * FundingTypeInfo represents one allowed funding type. 
 */
class FundingTypeInfo  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fundingType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($fundingType = NULL) {
		$this->fundingType = $fundingType;
	}


}
