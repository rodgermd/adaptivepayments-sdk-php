<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * SenderDisclosure contains the disclosure related to Sender 
 */
class SenderDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\CurrencyType	 
	 */ 
	public $amountToTransfer;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\AP\FeeDisclosure	 
	 */ 
	public $feeDisclosure;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\CurrencyType	 
	 */ 
	public $totalAmountToTransfer;


}
