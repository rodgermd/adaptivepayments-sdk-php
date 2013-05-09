<?php 
namespace paypalservice\types\ap;
/**
 * Receiver is the party where funds are transferred to. A
 * primary receiver receives a payment directly from the sender
 * in a chained split payment. A primary receiver should not be
 * specified when making a single or parallel split payment. 
 */
class Receiver  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $amount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $email;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PhoneNumberType 	 
	 */ 
	public $phone;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $primary;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $invoiceId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $paymentType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $paymentSubType;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $accountId;

	/**
	 * Constructor with arguments
	 */
	public function __construct($amount = NULL) {
		$this->amount = $amount;
	}


}
