<?php 
namespace paypalservice\types\ap;
/**
 * PaymentInfo represents the payment attempt made to a
 * Receiver of a PayRequest. If the execution of the payment
 * has not yet completed, there will not be any transaction
 * details. 
 */
class PaymentInfo  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $transactionId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $transactionStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var Receiver 	 
	 */ 
	public $receiver;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $refundedAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $pendingRefund;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $senderTransactionId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $senderTransactionStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $pendingReason;


}
