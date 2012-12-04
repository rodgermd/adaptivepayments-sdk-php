
PayPal PHP Adaptive Payments SDK
================================


This is a "Work in progress" SDK. If you are looking for a Adaptive Payments SDK, please see 

https://www.x.com/developers/paypal/documentation-tools/paypal-sdk-index#adaptivepaymentsnew

  OR 

https://github.com/paypal/SDKs/tree/master/AdaptivePayments/adaptivepayments-php-sdk




Prerequisites
-------------

PayPal's PHP Adaptive Payments SDK requires 

   * PHP 5.2 and above with curl/openssl extensions enabled
  

Using the SDK
-------------

To use the SDK, 

   * Copy the config and lib folders into your project. Modify the config file to suit your needs.
   * Make sure that the lib folder in your project is available in PHP's include path
   * Include the services\AdaptivePayments\AdaptivePaymentsService.php file in your code.
   * Instantiate a service wrapper object
   * Instantiate a request object as per your project's needs. All the API request and response classes 
     are available in services\AdaptivePayments\AdaptivePaymentsService.php
   * Invoke the appropriate method on the service object passing in the request object.

For example,

	require_once('services/AdaptivePayments/AdaptivePaymentsService.php');

    $payRequest = new PayRequest($requestEnvelope, $actionType, $cancelUrl, 
                                  $currencyCode, $receiverList, $returnUrl);
    // Add optional params
    if($_POST["feesPayer"] != "") {
	   $payRequest->feesPayer = $_POST["feesPayer"];
    }
	......

	$service = new AdaptivePaymentsService();
	$response = $service->Pay($payRequest);	
	$ack = strtoupper($response->responseEnvelope->ack); 
	if($ack == 'SUCCESS') {
		// Success
	}
  
  
The SDK provides multiple ways to authenticate your API call.

	$service = new AdaptivePaymentsService();
	
	// Use the default account (the first account) configured in sdk_config.ini
	$response = $service->Pay($payRequest);	

	// Use a specific account configured in sdk_config.inig
	$response = $service->Pay($payRequest, 'jb-us-seller_api1.paypal.com');	
	 
	// Pass in a dynamically created API credential object
    $cred = new PPCertificateCredential("username", "password", "path-to-pem-file");
    $cred->setThirdPartyAuthorization(new PPTokenAuthorization("accessToken", "tokenSecret"));
	$response = $service->Pay($payRequest, $cred);	


SDK Configuration
-----------------

Replace the API credential in config/sdk_config.ini . You can use the configuration file to configure

   * (Multiple) API account credentials.
   * Service endpoint and other HTTP connection parameters
   * Logging 

Please refer to the sample config file provided with this bundle.



Getting help
------------

If you need help using the SDK, a new feature that you need or have a issue to report, please visit

   https://www.x.com/developers/paypal/forums/adaptive-payments-api
   
     OR
   
   https://github.com/paypal/adaptivepayments-sdk-php/issues 
