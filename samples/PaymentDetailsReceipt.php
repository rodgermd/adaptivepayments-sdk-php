<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('PaymentDetails');

// create request
$requestEnvelope = new RequestEnvelope("en_US");
$paymentDetailsReq = new PaymentDetailsRequest($requestEnvelope);
if($_POST['payKey'] != "") {
	$paymentDetailsReq->payKey = $_POST['payKey'];
}
if($_POST['transactionId'] != "") {
	$paymentDetailsReq->transactionId = $_POST['transactionId'];
}
if($_POST['trackingId'] != "") {
	$paymentDetailsReq->trackingId = $_POST['trackingId'];
}
$logger->log("Created paymentDetailsRequest Object");


$service = new AdaptivePaymentsService();
try {
	$response = $service->PaymentDetails($paymentDetailsReq);
} catch(Exception $ex) {
	require_once 'Common/Error.php';
	exit;	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Payments - Payment Details</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
</head>

<body>
	<div id="wrapper">
		<div id="response_form">
			<h3>Payment Details</h3>
<?php 
$logger->error("Received paymentDetailsResponse:");
$ack = strtoupper($response->responseEnvelope->ack);
if($ack != "SUCCESS"){
	echo "<b>Error </b>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";
} else {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
	echo "<tr><td>PayKey :</td><td><div id='PayKey'>$response->payKey</div> </td></tr>";
	echo "<tr><td>Status :</td><td><div id='Status'>$response->status</div> </td></tr>";
	echo "</table>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";
}
require_once 'Common/Response.php';	
?>
		</div>
	</div>
</body>
</html>