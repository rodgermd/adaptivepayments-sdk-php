<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');
define("DEFAULT_SELECT", "- Select -");

$logger = new PPLoggingManager('PreApproval');

// create request
$requestEnvelope = new RequestEnvelope("en_US");
$preapprovalRequest = new PreapprovalRequest($requestEnvelope, $_POST['cancelUrl'], 
				$_POST['currencyCode'], $_POST['returnUrl'], $_POST['startingDate']);
// Set optional params
if($_POST['dateOfMonth'] != null) {
	$preapprovalRequest->dateOfMonth = $_POST['dateOfMonth'];
}
if($_POST['dayOfWeek'] != null && $_POST['dayOfWeek'] != DEFAULT_SELECT) {
	$preapprovalRequest->dayOfWeek = $_POST['dayOfWeek'];
}
if($_POST['dateOfMonth'] != null) {
	$preapprovalRequest->dateOfMonth = $_POST['dateOfMonth'];
}
if($_POST['endingDate'] != null) {
	$preapprovalRequest->endingDate = $_POST['endingDate'];
}
if($_POST['maxAmountPerPayment'] != null) {
	$preapprovalRequest->maxAmountPerPayment = $_POST['maxAmountPerPayment'];
}
if($_POST['maxNumberOfPayments'] != null) {
	$preapprovalRequest->maxNumberOfPayments = $_POST['maxNumberOfPayments'];
}
if($_POST['maxNumberOfPaymentsPerPeriod'] != null) {
	$preapprovalRequest->maxNumberOfPaymentsPerPeriod = $_POST['maxNumberOfPaymentsPerPeriod'];
}
if($_POST['maxTotalAmountOfAllPayments'] != null) {
	$preapprovalRequest->maxTotalAmountOfAllPayments = $_POST['maxTotalAmountOfAllPayments'];
}
if($_POST['paymentPeriod'] != null && $_POST['paymentPeriod'] != DEFAULT_SELECT) {
	$preapprovalRequest->paymentPeriod = $_POST['paymentPeriod'];
}
if($_POST['memo'] != null) {
	$preapprovalRequest->memo = $_POST['memo'];
}
if($_POST['ipnNotificationUrl'] != null) {
	$preapprovalRequest->ipnNotificationUrl = $_POST['ipnNotificationUrl'];
}
if($_POST['senderEmail'] != null) {
	$preapprovalRequest->senderEmail = $_POST['senderEmail'];
}
if($_POST['pinType'] != null && $_POST['pinType'] != DEFAULT_SELECT) {
	$preapprovalRequest->pinType = $_POST['pinType'];
}
if($_POST['feesPayer'] != null) {
	$preapprovalRequest->feesPayer = $_POST['feesPayer'];
}
if($_POST['displayMaxTotalAmount'] != null) {
	$preapprovalRequest->displayMaxTotalAmount = $_POST['displayMaxTotalAmount'];
}

$logger->log("Created PreApprovalRequest Object");
$service = new AdaptivePaymentsService();
try {
	$response = $service->Preapproval($preapprovalRequest);
} catch(Exception $ex) {
	require_once 'Common/Error.php';
	exit;	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Payments - Preapproval</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
</head>

<body>
	<div id="wrapper">
		<div id="response_form">
			<h3>Preapproval</h3>
<?php 
$logger->error("Received PreApprovalResponse:");
$ack = strtoupper($response->responseEnvelope->ack);
if($ack != "SUCCESS"){
	echo "<b>Error </b>";
	echo "<pre>";
	print_r($response);
	echo "</pre>";
} else {
	echo "<pre>";
	print_r($response);
	echo "</pre>";
	
	// Redirect to paypal.com here
	$token = $response->preapprovalKey;
	$payPalURL = 'https://www.sandbox.paypal.com/webscr&cmd=_ap-preapproval&preapprovalkey='.$token;
	
	echo "<table>";
	echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
	echo "<tr><td>PreapprovalKey :</td><td><div id='PreapprovalKey'>$token</div> </td></tr>";
	echo "<tr><td><a href=$payPalURL><b>Redirect URL to Complete Preapproval Authorization</b></a></td></tr>";
	echo "</table>";
}
require_once 'Common/Response.php';		
?>
		</div>
	</div>
</body>
</html>