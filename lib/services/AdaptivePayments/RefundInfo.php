<?php 
namespace services\AdaptivePayments;
/**
 * RefundInfo represents the refund attempt made to a Receiver
 * of a PayRequest. 
 */
class RefundInfo  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var Receiver 	 
	 */ 
	public $receiver;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $refundStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $refundNetAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $refundFeeAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $refundGrossAmount;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var double 	 
	 */ 
	public $totalOfAllRefunds;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var boolean 	 
	 */ 
	public $refundHasBecomeFull;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $encryptedRefundTransactionId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $refundTransactionStatus;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var ErrorList 	 
	 */ 
	public $errorList;


}
