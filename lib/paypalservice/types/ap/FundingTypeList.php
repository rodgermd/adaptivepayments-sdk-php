<?php 
namespace paypalservice\types\ap;
/**
 * 
 */
class FundingTypeList  
  extends PPMessage   {

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var FundingTypeInfo 	 
	 */ 
	public $fundingTypeInfo;

	/**
	 * Constructor with arguments
	 */
	public function __construct($fundingTypeInfo = NULL) {
		$this->fundingTypeInfo = $fundingTypeInfo;
	}


}
