
# PayPal PHP Adaptive Payments SDK

## Prerequisites

PayPal's PHP Adaptive Payments SDK requires 

   * PHP 5.2 and above 
   * curl/openssl PHP extensions 

## Running the sample

To run the bundled sample, copy the samples folder to your web server root. You will then need to install the SDK as a dependency using either composer or by running a custom installation script provided with the SDK.


If using composer, run `composer update` from the samples folder. Otherwise, run install.php from merchant-sdk-php/samples directory
   
    curl  https://raw.github.com/paypal/adaptivepayments-sdk-php/composer/samples/install.php | php
    
        or 
        
    php install.php


## Using the SDK


To use the SDK,

   * Create a composer.json file and install the SDK as a dependency using composer or the install.php script. You can use the composer.json in the samples folder as a starting point.
   * Require `vendor/autoload.php` OR `PPBootStrap.php` in your application depending on whether you used composer or the custom installer.
   * Choose how you would like to configure the SDK - You can either
      * Create a `sdk_config.ini` file and set the PP_CONFIG_PATH constant to point to the directory where this file exists OR
	  * Create a hashmap containing configuration parameters and pass it to the service object.
   * Instantiate a service wrapper object and a request object as per your project's needs.
   * Invoke the appropriate method on the service object passing in the request object.

For example,

	// sets config file path and registers classloader.
    require("PPBootStrap.php");

    $payRequest = new PayRequest($requestEnvelope, $actionType, $cancelUrl, 
                                  $currencyCode, $receiverList, $returnUrl);
    // Add optional params
    if($_POST["feesPayer"] != "") {
	   $payRequest->feesPayer = $_POST["feesPayer"];
    }
	......

	$service = new AdaptivePaymentsService();
	$response = $service->Pay($payRequest);	
	if(strtoupper($response->responseEnvelope->ack == 'SUCCESS') {
		// Success
	}
  
  
## Authentication

The SDK provides multiple ways to authenticate your API call.

	$service = new AdaptivePaymentsService();
	
	// Use the default account (the first account) configured in sdk_config.ini or config hashmap
	$response = $service->Pay($payRequest);	

	// Use a specific account configured in sdk_config.ini or config hashmap
	$response = $service->Pay($payRequest, 'jb-us-seller_api1.paypal.com');	
	 
	// Pass in a dynamically created API credential object
    $cred = new PPCertificateCredential("username", "password", "path-to-pem-file");
    $cred->setThirdPartyAuthorization(new PPTokenAuthorization("accessToken", "tokenSecret"));
	$response = $service->Pay($payRequest, $cred);	


## SDK Configuration


The SDK allows you to configure the following using the sdk_config.ini file 

   * Integration mode (sandbox / live)
   * (Multiple) API account credentials.
   * HTTP connection parameters
   * Logging 

Alternatively, dynamic configuration values can be set by passing a map of credential and config values (if config map is passed the config file is ignored)
e.g. $service  = new AdaptivePaymentsService($configMap); // where $configMap is a config array

Please refer to the sample config file provided with this bundle.

## Instant Payment Notification (IPN)

Please refer to the IPN-README in the 'samples/IPN' directory.

## Getting help

If you need help using the SDK, a feature that you need or have a issue to report, please visit https://github.com/paypal/adaptivepayments-sdk-php/issues 
