<?php 
namespace PayPal\Types\AP;
use PayPal\Core\PPMessage;
/**
 * ReceiverDisclosure contains the disclosure related to
 * Receiver/Receivers. 
 */
class ReceiverDisclosure  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\AccountIdentifier	 
	 */ 
	public $accountIdentifier;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\Common\CurrencyType	 
	 */ 
	public $amountReceivedFromSender;

	/**
	 * The two-character ISO country code of the home country of
	 * the Receiver 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $countryCode;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var paypalservice\Types\AP\ConversionRate	 
	 */ 
	public $conversionRate;

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
	public $totalAmountReceived;


}
