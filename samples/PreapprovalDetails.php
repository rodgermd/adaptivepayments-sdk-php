<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('PreapprovalDetails');
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// send request
	$requestEnvelope = new RequestEnvelope();
	$requestEnvelope->errorLanguage = "en_US";
	$PreapprovalDetailsReq = new PreapprovalDetailsRequest($requestEnvelope);
	$PreapprovalDetailsReq->preapprovalKey = $_POST['PreapprovalKey'];
	$logger->log("CreatedPreapprovalDetailsRequest Object");
	$adaptivePayments  = new AdaptivePaymentsService();
	$PreapprovalDetailsResp = $adaptivePayments->PreapprovalDetails($PreapprovalDetailsReq);
	$logger->error("Received PreapprovalDetailsResponse:");
	var_dump($PreapprovalDetailsResp);
} else {

	?>
<html>
<head>
<title>PreapprovalDetails Sample API Page</title>
</head>
<body>
<h2>PPreapprovalDetails API sample Page</h2>
<form method="POST">
<div class="params">
<div class="param_name">PreapprovalKey</div>
<div class="param_value"><input type="text" name="PreapprovalKey"
	value="PA-38L31611A0020973T" size="50" maxlength="260" /></div>

<input type="submit" name="submit" value="submit" /></div>
</form>
</body>
</html>
	<?php

}
?>