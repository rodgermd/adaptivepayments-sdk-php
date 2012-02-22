<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('GetAllowedFundingSources');

// create request
$requestEnvelope = new RequestEnvelope("en_US");
$getAllowedFundingSourcesReq = new GetAllowedFundingSourcesRequest($requestEnvelope, $_POST['key']);
$logger->log("Created GetAllowedFundingSourcesRequest Object");

$service = new AdaptivePaymentsService();
try {
	$response = $service->GetAllowedFundingSources($getAllowedFundingSourcesReq);
	$logger->error("Received GetAllowedFundingSourcesResponse:");
	$ack = strtoupper($response->responseEnvelope->ack);
} catch(Exception $ex) {
	throw new Exception('Error occurred in GetAllowedFundingSources method');
}

if($ack != "SUCCESS"){
	require_once("APIError.php");
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal Adaptive Payment - Get Allowed Funding Sources</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
</head>

<body>
	<div id="wrapper">
<?php
	require_once 'Common/menu.html';
?>
		<div id="response_form">
			<h3>Get Allowed Funding Sources</h3>
<?php 
   		 		var_dump($response); 		
?>
		</div>
	</div>
</body>
</html>