<?php
/********************************************
 PayReceipt.php

 This file is called after the user clicks on a button during
 the Pay process to use PayPal's AdaptivePayments Pay features'. The
 user logs in to their PayPal account.
 Called by Pay.php
 ********************************************/
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');
require_once('Common/Constants.php');
session_start();

$logger = new PPLoggingManager('PaymentDetails');
$requestEnvelope = new RequestEnvelope();
$requestEnvelope->errorLanguage = "en_US";
$actionType = $_REQUEST['actionType'];
$currencyCode = $_REQUEST['currencyCode'];
$serverName = $_SERVER['SERVER_NAME'];
$serverPort = $_SERVER['SERVER_PORT'];
$url=dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
$returnUrl = $url."WebflowReturnPage.php";
$cancelUrl = $url. "/Pay.php" ;
$preapprovalKey=$_REQUEST["preapprovalkey"];
$senderEmail  = $_REQUEST["email"];
//optional
$preapprovalKey=$_REQUEST["preapprovalkey"];
$senderEmail  = $_REQUEST["email"];
try {

	if(isset($_REQUEST['receiverEmail']))
	{
		$receiver = array();
		$i = 0;

		foreach ($_REQUEST['receiverEmail'] as $value)
		{
			$receiver[$i] =  new Receiver();
				
		 $receiver[$i]->email = $value;
			$i++;

		}
		$i = 0;
		foreach ($_REQUEST['receiverAmount'] as $value)
		{

			$receiver[$i]->amount = $value;
			$i++;

		}
		$i = 0;
		foreach ($_REQUEST['primaryReceiver'] as $value)
		{

		 $receiver[$i]->primary = $value;
			$i++;
				
		}
	}
	$receiverList = new ReceiverList($receiver);

	$payRequest = new PayRequest($requestEnvelope, $actionType, $cancelUrl, $currencyCode, $receiverList, $returnUrl);
	$logger->log("Created PayRequest Object");
	if($preapprovalKey!= "")
	{
		$payRequest->preapprovalKey  = $preapprovalKey;
	}
	if($senderEmail!= "")
	{
		$payRequest->senderEmail  = $senderEmail;
	}


	$adaptivePayments  = new AdaptivePaymentsService();
	$response = $adaptivePayments->Pay($payRequest);
	$logger->log("Received payResponse:");
	


	/* Make the call to PayPal to get the Pay token
	 If the API call succeded, then redirect the buyer to PayPal
	 to begin to authorize payment.  If an error occured, show the
	 resulting errors
	 */



	$ack = strtoupper($response->responseEnvelope->ack);

	if($ack!="SUCCESS"){
		$_SESSION['reshash']=$response;
		$location = "APIError.php";
		header("Location: $location");
	}
	else
	{
		$_SESSION['payKey'] = $response->payKey;
		$payKey=$response->payKey;
		if(($response->paymentExecStatus == "COMPLETED" ))
		{
			$case ="1";
		}
		else if(($_REQUEST['actionType']== "PAY") && ($response->paymentExecStatus == "CREATED" ))
		{
			$case ="2";

		}
		else if(($preapprovalKey!=null ) && ($_REQUEST['actionType']== "CREATE") && ($response->paymentExecStatus == "CREATED" ))
		{
			$case ="3";
		}
		else if(($_REQUEST['actionType']== "PAY_PRIMARY"))
		{
			$case ="4";

		}
		else if(($_REQUEST['actionType']== "CREATE") && ($response->paymentExecStatus == "CREATED" ))
		{
			$temp1=API_USERNAME;
			$temp2=str_replace('_api1.','@',$temp1);
			if($temp2==$_REQUEST["email"])
			{
				$case ="3";
			}
			else{
				$case ="2";
			}
		}
	}
}
catch(Exception $ex) {
	throw new Exception('Error occurred in PayReceipt method');
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>
<head>
<title>PayPal PHP SDK -Payment Details</title>
<link href="Common/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/tooltip.js">
    </script>
</head>

<body>
<br />
<div id="jive-wrapper">


<?php
require_once 'Common/menu.html';?>
<div id="request_form">

<center>
<h3><b>Pay - Response</b></h3>


<?php
//require_once 'ShowAllResponse.php';
switch($case) {
	case "2" :
		$token = $response->payKey;
		$payPalURL = PAYPAL_REDIRECT_URL.'_ap-payment&paykey='.$token;
		echo" <a href=$payPalURL><b>* Redirect URL to Complete Payment </b></a><br>";
		break;
	case "3" :
		$token = $response->payKey;
		$payPalURL = PAYPAL_REDIRECT_URL.'_ap-payment&paykey='.$token;
		echo" <a href=$payPalURL><b>* Redirect URL to Complete Payment </b></a><br>";
		echo"<a href=SetPaymentOption.php?payKey=$payKey><b>* Set Payment Options(optional)</b></a><br>";
		echo"<a href=ExecutePaymentOption.php?payKey=$payKey><b>* Execute Payment Options</b></a><br>";

		break;
	case "4" :
		$token = $response->payKey;
		$payPalURL = PAYPAL_REDIRECT_URL.'_ap-payment&paykey='.$token;
		echo"Payment to \"Primary Receiver\" is Complete<br/>";
		echo"<a href=ExecutePaymentOption.php?payKey=$payKey><b>* \"Execute Payment\" to pay to the secondary receivers</b></a><br>";
		break;

}
var_dump($response);
?></center>
</div>
</div>
</body>
</html>
