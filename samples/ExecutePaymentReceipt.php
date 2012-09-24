<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');
define("DEFAULT_SELECT", "- Select -");

$logger = new PPLoggingManager('ExecutePayment');

// create request
$executePaymentRequest = new ExecutePaymentRequest(new RequestEnvelope("en_US"),$_POST['payKey']);
$executePaymentRequest->actionType = $_POST["actionType"];
if($_POST["fundingPlanID"] != "") {
	$executePaymentRequest->fundingPlanId = $_POST["fundingPlanID"];
}

$service = new AdaptivePaymentsService();
try {
	$response = $service->ExecutePayment($executePaymentRequest);
} catch(Exception $ex) {
	require_once 'Common/Error.php';
	exit;
}
$logger->error("Received ExecutePaymentResponse:");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Payments - Execute Payment</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
</head>

<body>
	<div id="wrapper">
		<div id="response_form">
			<h3>Execute Payment</h3>
<?php 
$ack = strtoupper($response->responseEnvelope->ack);
if($ack != "SUCCESS"){
	echo "<b>Error </b>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";
} else {
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
	echo "<tr><td>PaymentExecStatus :</td><td><div id='PaymentExecStatus'>$response->paymentExecStatus</div> </td></tr>";
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