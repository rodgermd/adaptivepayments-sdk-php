<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');
define("DEFAULT_SELECT", "- Select -");

$logger = new PPLoggingManager('Refund');

// create request
$refundRequest = new RefundRequest(new RequestEnvelope("en_US"));

// set optional params
if(isset($_POST['receiverEmail'])) {
	$receiver = array();
	for($i=0; $i<count($_POST['receiverEmail']); $i++) {
		$receiver[$i] = new Receiver();
		$receiver[$i]->email = $_POST['receiverEmail'][$i];
		$receiver[$i]->amount = $_POST['receiverAmount'][$i];
		$receiver[$i]->primary = $_POST['primaryReceiver'][$i];

		if($_POST['invoiceId'][$i] != "") {
			$receiver[$i]->invoiceId = $_POST['invoiceId'][$i];
		}
		if($_POST['paymentType'][$i] != "" && $_POST['paymentType'][$i] != DEFAULT_SELECT) {
			$receiver[$i]->paymentType = $_POST['paymentType'][$i];
		}
		if($_POST['paymentSubType'][$i] != "") {
			$receiver[$i]->paymentSubType = $_POST['paymentSubType'][$i];
		}
		if($_POST['phoneCountry'][$i] != "" && $_POST['phoneNumber'][$i]) {
			$receiver[$i]->phone = new PhoneNumberType($_POST['phoneCountry'][$i], $_POST['phoneNumber'][$i]);
			if($_POST['phoneExtn'][$i] != "") {
				$receiver[$i]->phone->extension = $_POST['phoneExtn'][$i];
			}
		}
	}
	$receiverList = new ReceiverList($receiver);
}
if($_POST['currencyCode'] != "") {
	$refundRequest->currencyCode = $_POST["currencyCode"];
}
if($_POST['payKey'] != "") {
	$refundRequest->payKey = $_POST["payKey"];
}
if($_POST['transactionId'] != "") {
	$refundRequest->transactionId = $_POST["transactionId"];
}
if($_POST['trackingId'] != "") {
	$refundRequest->trackingId = $_POST["trackingId"];
}
if(isset($_POST['receiverEmail'])) {
	$receiver = array();
	for($i=0; $i<count($_POST['receiverEmail']); $i++) {
		$receiver[$i] = new Receiver();
		$receiver[$i]->email = $_POST['receiverEmail'][$i];
		$receiver[$i]->amount = $_POST['receiverAmount'][$i];
		$receiver[$i]->primary = $_POST['primaryReceiver'][$i];

		if($_POST['invoiceId'][$i] != "") {
			$receiver[$i]->invoiceId = $_POST['invoiceId'][$i];
		}
		if($_POST['paymentType'][$i] != "" && $_POST['paymentType'][$i] != DEFAULT_SELECT) {
			$receiver[$i]->paymentType = $_POST['paymentType'][$i];
		}
		if($_POST['paymentSubType'][$i] != "") {
			$receiver[$i]->paymentSubType = $_POST['paymentSubType'][$i];
		}
		if($_POST['phoneCountry'][$i] != "" && $_POST['phoneNumber'][$i]) {
			$receiver[$i]->phone = new PhoneNumberType($_POST['phoneCountry'][$i], $_POST['phoneNumber'][$i]);
			if($_POST['phoneExtn'][$i] != "") {
				$receiver[$i]->phone->extension = $_POST['phoneExtn'][$i];
			}
		}
	}
	$refundRequest->receiverList = new ReceiverList($receiver);
}


$service = new AdaptivePaymentsService();
try {
	$response = $service->Refund($refundRequest);
	$logger->error("Received RefundResponse:");
	$ack = strtoupper($response->responseEnvelope->ack);
} catch(Exception $ex) {
	throw new Exception('Error occurred in Refund method');
}

if($ack != "SUCCESS"){
	echo "<b>Error </b>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";
	require_once 'Common/Response.php';
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Payment - Refund</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
</head>

<body>
	<div id="wrapper">


	<?php
	require_once 'Common/menu.html';
	?>
		<div id="response_form">
			<h3>Refund Details</h3>
			
			
			
			
<?php 
		$status = $response->refundInfoList->refundInfo[0]->refundStatus;
		echo "<table>";
		echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
		echo "<tr><td>RefundStatus :</td><td><div id='RefundStatus'>$status</div></td></tr>";
		echo "</table>";
		echo "<pre>";
		print_r($response);
		echo "</pre>";
		require_once 'Common/Response.php';		
?>
		</div>
	</div>
</body>
</html>
