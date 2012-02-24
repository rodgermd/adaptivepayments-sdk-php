<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('ConfirmPreapproval');

// create request
$requestEnvelope = new RequestEnvelope("en_US");
$confirmPreapprovalReq = new ConfirmPreapprovalRequest($requestEnvelope, $_POST['preapprovalKey']);
// set optional params
if($_POST['fundingSourceId'] != "") {
	$confirmPreapprovalReq->fundingSourceId = $_POST['fundingSourceId'];
}
if($_POST['pin'] != "") {
	$confirmPreapprovalReq->pin = $_POST['pin'];
}
$logger->log("Created ConfirmPreapprovalRequest Object");


$service  = new AdaptivePaymentsService();
try {
	$response = $service->ConfirmPreapproval($confirmPreapprovalReq);
	$logger->error("Received ConfirmPreapprovalResponse:");
	$ack = strtoupper($response->responseEnvelope->ack);
}
catch(Exception $ex) {
	throw new Exception('Error occurred in ConfirmPreapproval method');
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
<title>PayPal Adaptive Payment - Confirm Preapproval</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
</head>

<body>
	<div id="wrapper">
<?php
	require_once 'Common/menu.html';
?>
		<div id="response_form">
			<h3>Confirm Preapproval</h3>
<?php 
   		 		echo "<pre>";
print_r($response);
echo "</pre>";
require_once 'Common/Response.php';
?>
		</div>
	</div>
</body>
</html>