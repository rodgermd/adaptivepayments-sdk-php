<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('GetUserLimits');

// create request
$requestEnvelope = new RequestEnvelope("en_US");
$getUserLimitsReq = new GetUserLimitsRequest($requestEnvelope, $_POST['preapprovalKey']);
$logger->log("Created GetUserLimitsRequest Object");


$service = new AdaptivePaymentsService();
try {
	$response = $service->GetUserLimits($getUserLimitsReq);
	$logger->error("Received GetUserLimitsResponse:");
	$ack = strtoupper($response->responseEnvelope->ack);
}
catch(Exception $ex) {
	throw new Exception('Error occurred in GetUserLimits method');
}
if($ack != "SUCCESS"){
	require_once("APIError.php");
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Payment - Get User Limits</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
</head>

<body>
	<div id="wrapper">
<?php
	require_once 'Common/menu.html';
?>
		<div id="response_form">
			<h3>Get User Limits</h3>
<?php 
   		 		var_dump($response); 		
?>
		</div>
	</div>
</body>
</html>