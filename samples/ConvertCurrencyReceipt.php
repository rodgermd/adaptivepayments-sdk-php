<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('ConvertCurrency');

// create request
$baseAmountList = new CurrencyList();
foreach($_POST['currencyCode'] as $idx => $currencyCode) {
	if($_POST['currencyCode'][$idx] != "" && $_POST['currencyAmount'][$idx] != "") {
		$baseAmountList->currency[] = new CurrencyType($_POST['currencyCode'][$idx], $_POST['currencyAmount'][$idx]);
	}
}
$convertToCurrencyList = new CurrencyCodeList();
foreach($_POST['toCurrencyCode'] as $idx => $currencyCode) {
	if($currencyCode != "") {
		$convertToCurrencyList->currencyCode[] = $currencyCode;
	}
}
$convertCurrencyReq = new ConvertCurrencyRequest(new RequestEnvelope("en_US"), $baseAmountList, $convertToCurrencyList);
if($_POST['countryCode'] != "") {
	$convertCurrencyReq->countryCode = $_POST['countryCode'];
}
if($_POST['conversionType'] != "" && $_POST['conversionType'] != "- Select -") {
	$convertCurrencyReq->conversionType = $_POST['conversionType'];
}

$logger->log("Created ConvertCurrencyRequest Object");


$service  = new AdaptivePaymentsService();
try {
	$response = $service->ConvertCurrency($convertCurrencyReq);
	$logger->error("Received ConvertCurrencyResponse:");
	$ack = strtoupper($response->responseEnvelope->ack);
}
catch(Exception $ex) {
	throw new Exception('Error occurred in ConvertCurrency method');
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
<title>PayPal Adaptive Payment - Convert Currency</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
</head>

<body>
<div id="wrapper"><?php
require_once 'Common/menu.html';
?>
<div id="response_form">
<h3>Convert Currency</h3>
<?php
		
		echo "<table>";
		echo "<tr><td>Ack :</td><td><div id='Ack'>$ack</div> </td></tr>";
		echo "</table>";
		echo "<pre>";
		print_r($response);
		echo "</pre>";
		require_once 'Common/Response.php';
?></div>
</div>
</body>
</html>
