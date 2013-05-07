<?php 
namespace services\AdaptivePayments;
/**
 * Options that apply to the receiver of a payment, allows
 * setting additional details for payment using invoice. 
 */
class ReceiverOptions  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $description;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $customId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var InvoiceData 	 
	 */ 
	public $invoiceData;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ReceiverIdentifier 	 
	 */ 
	public $receiver;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $referrerCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($receiver = NULL) {
		$this->receiver = $receiver;
	}


}
