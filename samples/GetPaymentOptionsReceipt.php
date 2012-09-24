<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('GetPaymentOptions');

// create request
$requestEnvelope = new RequestEnvelope("en_US");
$getPaymentOptionsReq = new GetPaymentOptionsRequest($requestEnvelope, $_POST['payKey']);
$logger->log("Created GetPaymentOptionsRequest Object");

$service = new AdaptivePaymentsService();
try {
	$response = $service->GetPaymentOptions($getPaymentOptionsReq);
} catch(Exception $ex) {
	require_once 'Common/Error.php';
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Payments - Get Payment Options</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
</head>

<body>
	<div id="wrapper">
		<div id="response_form">
			<h3>Get Payment Options</h3>
<?php 
$logger->error("Received GetPaymentOptionsResponse:");
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
}
require_once 'Common/Response.php';	
?>
		</div>
	</div>
</body>
</html>