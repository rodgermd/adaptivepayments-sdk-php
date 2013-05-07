<?php 
namespace services\AdaptivePayments;
/**
 * SenderDisclosure contains the disclosure related to Sender 
 */
class SenderDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $amountToTransfer;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var FeeDisclosure 	 
	 */ 
	public $feeDisclosure;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var CurrencyType 	 
	 */ 
	public $totalAmountToTransfer;


}
