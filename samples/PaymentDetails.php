<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('PaymentDetails');
try {
	// send request
	$requestEnvelope = new RequestEnvelope();
	$requestEnvelope->errorLanguage = "en_US";
	$paymentDetailsReq = new PaymentDetailsRequest($requestEnvelope);
	$paymentDetailsReq->payKey = $_POST['payKey'];
	$logger->log("Created paymentDetailsRequest Object");
	$adaptivePayments  = new AdaptivePaymentsService();
	$response = $adaptivePayments->PaymentDetails($paymentDetailsReq);
	$logger->error("Received paymentDetailsResponse:");
				$ack = strtoupper($response->responseEnvelope->ack);
		  if($ack!="SUCCESS"){
			$_SESSION['reshash']=$response;
			$location = "APIError.php";
			header("Location: $location");
 
			}
			
	}
	catch(Exception $ex) {

	throw new Exception('Error occurred in PaymentDetails method');
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>
<head>
  <title>PayPal PHP SDK -Payment Details</title>
 <link href="Common/style.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="Common/tooltip.js">
    </script>
</head>

<body >
		<br/>
        <div id="jive-wrapper">
           

		<?php 
require_once 'Common/menu.html';?>
<div id="request_form">
<center>
<h3><b>Payment
    Details</b></h3>
    <br />
</center>
        
 		<?php 
   		 		var_dump($response);
 		
   		 ?>
</div>
</div>
</body>
</html>
	


