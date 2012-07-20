<?php
 /**
  * Stub objects for AdaptivePayments 
  * Auto generated code 
  * 
  */
/**
 * No Document Comments
 */
class AccountIdentifier  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $email;

	/**
	 * No Document Comments
	 *@access public
	 *@var PhoneNumberType
	 */ 
	public $phone;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->email != null) {
			$str .= $delim .  $prefix . 'email=' . urlencode($this->email);
			$delim = '&';
		}
		if($this->phone != null) {
			$newPrefix = $prefix . 'phone.';
			$str .= $delim . call_user_func(array($this->phone, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'email';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->email = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "phone.")) {
				$newPrefix = $prefix . "phone.";
				$this->phone = new PhoneNumberType();
				$this->phone->init($map, $newPrefix);
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class BaseAddress  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $line1;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $line2;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $city;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $state;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $postalCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $countryCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $type;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'line1';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->line1 = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'line2';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->line2 = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'city';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->city = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'state';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->state = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'postalCode';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->postalCode = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'countryCode';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->countryCode = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'type';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->type = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Details about the end user of the application invoking this
 * service. 
 */
class ClientDetailsType  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $ipAddress;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $deviceId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $applicationId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $model;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $geoLocation;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $customerType;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $partnerName;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $customerId;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->ipAddress != null) {
			$str .= $delim .  $prefix . 'ipAddress=' . urlencode($this->ipAddress);
			$delim = '&';
		}
		if($this->deviceId != null) {
			$str .= $delim .  $prefix . 'deviceId=' . urlencode($this->deviceId);
			$delim = '&';
		}
		if($this->applicationId != null) {
			$str .= $delim .  $prefix . 'applicationId=' . urlencode($this->applicationId);
			$delim = '&';
		}
		if($this->model != null) {
			$str .= $delim .  $prefix . 'model=' . urlencode($this->model);
			$delim = '&';
		}
		if($this->geoLocation != null) {
			$str .= $delim .  $prefix . 'geoLocation=' . urlencode($this->geoLocation);
			$delim = '&';
		}
		if($this->customerType != null) {
			$str .= $delim .  $prefix . 'customerType=' . urlencode($this->customerType);
			$delim = '&';
		}
		if($this->partnerName != null) {
			$str .= $delim .  $prefix . 'partnerName=' . urlencode($this->partnerName);
			$delim = '&';
		}
		if($this->customerId != null) {
			$str .= $delim .  $prefix . 'customerId=' . urlencode($this->customerId);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * No Document Comments
 */
class CurrencyType  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $code;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $amount;

	/**
	 * Constructor with arguments
	 */
	public function __construct($code = null, $amount = null) {
		$this->code = $code;
		$this->amount = $amount;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->code != null) {
			$str .= $delim .  $prefix . 'code=' . urlencode($this->code);
			$delim = '&';
		}
		if($this->amount != null) {
			$str .= $delim .  $prefix . 'amount=' . urlencode($this->amount);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'code';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->code = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'amount';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->amount = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * This type contains the detailed error information resulting
 * from the service operation. 
 */
class ErrorData  {

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $errorId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $domain;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $subdomain;

	/**
	 * No Document Comments
	 *@access public
	 *@var ErrorSeverity
	 */ 
	public $severity;

	/**
	 * No Document Comments
	 *@access public
	 *@var ErrorCategory
	 */ 
	public $category;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $message;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $exceptionId;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorParameter
	 */ 
	public $parameter;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'errorId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->errorId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'domain';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->domain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'subdomain';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->subdomain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'severity';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->severity = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'category';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->category = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'message';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->message = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'exceptionId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->exceptionId = $map[$mapKeyName];
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "parameter($i)")) {
					$newPrefix = $prefix . "parameter($i).";
					$this->parameter[$i] = new ErrorParameter();
					$this->parameter[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class ErrorParameter  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $name;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $value;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'name';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->name = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'value';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->value = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * This specifies a fault, encapsulating error data, with
 * specific error codes. 
 */
class FaultMessage  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class PhoneNumberType  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $countryCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $phoneNumber;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $extension;

	/**
	 * Constructor with arguments
	 */
	public function __construct($countryCode = null, $phoneNumber = null) {
		$this->countryCode = $countryCode;
		$this->phoneNumber = $phoneNumber;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->countryCode != null) {
			$str .= $delim .  $prefix . 'countryCode=' . urlencode($this->countryCode);
			$delim = '&';
		}
		if($this->phoneNumber != null) {
			$str .= $delim .  $prefix . 'phoneNumber=' . urlencode($this->phoneNumber);
			$delim = '&';
		}
		if($this->extension != null) {
			$str .= $delim .  $prefix . 'extension=' . urlencode($this->extension);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'countryCode';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->countryCode = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'phoneNumber';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->phoneNumber = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'extension';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->extension = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * This specifies the list of parameters with every request to
 * the service. 
 */
class RequestEnvelope  {

	/**
	 * This specifies the required detail level that is needed by a
	 * client application pertaining to a particular data component
	 * (e.g., Item, Transaction, etc.). The detail level is
	 * specified in the DetailLevelCodeType which has all the
	 * enumerated values of the detail level for each component. 
	 *@access public
	 *@var DetailLevelCode
	 */ 
	public $detailLevel;

	/**
	 * This should be the standard RFC 3066 language identification
	 * tag, e.g., en_US. 
	 *@access public
	 *@var string
	 */ 
	public $errorLanguage;

	/**
	 * Constructor with arguments
	 */
	public function __construct($errorLanguage = null) {
		$this->errorLanguage = $errorLanguage;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->detailLevel != null) {
			$str .= $delim .  $prefix . 'detailLevel=' . urlencode($this->detailLevel);
			$delim = '&';
		}
		if($this->errorLanguage != null) {
			$str .= $delim .  $prefix . 'errorLanguage=' . urlencode($this->errorLanguage);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * This specifies a list of parameters with every response from
 * a service. 
 */
class ResponseEnvelope  {

	/**
	 * No Document Comments
	 *@access public
	 *@var dateTime
	 */ 
	public $timestamp;

	/**
	 * Application level acknowledgment code. 
	 *@access public
	 *@var AckCode
	 */ 
	public $ack;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $correlationId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $build;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'timestamp';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->timestamp = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'ack';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->ack = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'correlationId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->correlationId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'build';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->build = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class Address  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $addresseeName;

	/**
	 * No Document Comments
	 *@access public
	 *@var BaseAddress
	 */ 
	public $baseAddress;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $addressId;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'addresseeName';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->addresseeName = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "baseAddress.")) {
				$newPrefix = $prefix . "baseAddress.";
				$this->baseAddress = new BaseAddress();
				$this->baseAddress->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'addressId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->addressId = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class AddressList  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var Address
	 */ 
	public $address;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "address($i)")) {
					$newPrefix = $prefix . "address($i).";
					$this->address[$i] = new Address();
					$this->address[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * A list of ISO currency codes. 
 */
class CurrencyCodeList  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var string
	 */ 
	public $currencyCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($currencyCode = null) {
		$this->currencyCode = $currencyCode;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		for($i = 0; $i < count($this->currencyCode); $i++) {
			$str .= $delim .  $prefix . "currencyCode($i)=" .  urlencode($this->currencyCode[$i]);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * A list of estimated currency conversions for a base
 * currency. 
 */
class CurrencyConversionList  {

	/**
	 * No Document Comments
	 *@access public
	 *@var CurrencyType
	 */ 
	public $baseAmount;

	/**
	 * No Document Comments
	 *@access public
	 *@var CurrencyList
	 */ 
	public $currencyList;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "baseAmount.")) {
				$newPrefix = $prefix . "baseAmount.";
				$this->baseAmount = new CurrencyType();
				$this->baseAmount->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "currencyList.")) {
				$newPrefix = $prefix . "currencyList.";
				$this->currencyList = new CurrencyList();
				$this->currencyList->init($map, $newPrefix);
			}
			
		}
	}
} 



/**
 * A table that contains a list of estimated currency
 * conversions for a base currency in each row. 
 */
class CurrencyConversionTable  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var CurrencyConversionList
	 */ 
	public $currencyConversionList;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "currencyConversionList($i)")) {
					$newPrefix = $prefix . "currencyConversionList($i).";
					$this->currencyConversionList[$i] = new CurrencyConversionList();
					$this->currencyConversionList[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * A list of ISO currencies. 
 */
class CurrencyList  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var CurrencyType
	 */ 
	public $currency;

	/**
	 * Constructor with arguments
	 */
	public function __construct($currency = null) {
		$this->currency = $currency;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		for($i = 0; $i < count($this->currency); $i++) {
			$newPrefix = $prefix . "currency($i).";
			$str .= $delim . call_user_func(array($this->currency[$i], 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "currency($i)")) {
					$newPrefix = $prefix . "currency($i).";
					$this->currency[$i] = new CurrencyType();
					$this->currency[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Customizable options that a client application can specify
 * for display purposes. 
 */
class DisplayOptions  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $emailHeaderImageUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $emailMarketingImageUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $headerImageUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $businessName;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->emailHeaderImageUrl != null) {
			$str .= $delim .  $prefix . 'emailHeaderImageUrl=' . urlencode($this->emailHeaderImageUrl);
			$delim = '&';
		}
		if($this->emailMarketingImageUrl != null) {
			$str .= $delim .  $prefix . 'emailMarketingImageUrl=' . urlencode($this->emailMarketingImageUrl);
			$delim = '&';
		}
		if($this->headerImageUrl != null) {
			$str .= $delim .  $prefix . 'headerImageUrl=' . urlencode($this->headerImageUrl);
			$delim = '&';
		}
		if($this->businessName != null) {
			$str .= $delim .  $prefix . 'businessName=' . urlencode($this->businessName);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'emailHeaderImageUrl';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->emailHeaderImageUrl = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'emailMarketingImageUrl';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->emailMarketingImageUrl = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'headerImageUrl';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->headerImageUrl = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'businessName';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->businessName = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class ErrorList  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class FundingConstraint  {

	/**
	 * No Document Comments
	 *@access public
	 *@var FundingTypeList
	 */ 
	public $allowedFundingType;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->allowedFundingType != null) {
			$newPrefix = $prefix . 'allowedFundingType.';
			$str .= $delim . call_user_func(array($this->allowedFundingType, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "allowedFundingType.")) {
				$newPrefix = $prefix . "allowedFundingType.";
				$this->allowedFundingType = new FundingTypeList();
				$this->allowedFundingType->init($map, $newPrefix);
			}
			
		}
	}
} 



/**
 * FundingTypeInfo represents one allowed funding type. 
 */
class FundingTypeInfo  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $fundingType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($fundingType = null) {
		$this->fundingType = $fundingType;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->fundingType != null) {
			$str .= $delim .  $prefix . 'fundingType=' . urlencode($this->fundingType);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'fundingType';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->fundingType = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class FundingTypeList  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var FundingTypeInfo
	 */ 
	public $fundingTypeInfo;

	/**
	 * Constructor with arguments
	 */
	public function __construct($fundingTypeInfo = null) {
		$this->fundingTypeInfo = $fundingTypeInfo;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		for($i = 0; $i < count($this->fundingTypeInfo); $i++) {
			$newPrefix = $prefix . "fundingTypeInfo($i).";
			$str .= $delim . call_user_func(array($this->fundingTypeInfo[$i], 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "fundingTypeInfo($i)")) {
					$newPrefix = $prefix . "fundingTypeInfo($i).";
					$this->fundingTypeInfo[$i] = new FundingTypeInfo();
					$this->fundingTypeInfo[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Describes the conversion between 2 currencies. 
 */
class CurrencyConversion  {

	/**
	 * No Document Comments
	 *@access public
	 *@var CurrencyType
	 */ 
	public $from;

	/**
	 * No Document Comments
	 *@access public
	 *@var CurrencyType
	 */ 
	public $to;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $exchangeRate;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "from.")) {
				$newPrefix = $prefix . "from.";
				$this->from = new CurrencyType();
				$this->from->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "to.")) {
				$newPrefix = $prefix . "to.";
				$this->to = new CurrencyType();
				$this->to->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'exchangeRate';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->exchangeRate = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Funding source information. 
 */
class FundingSource  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $lastFourOfAccountNumber;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $type;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $displayName;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $fundingSourceId;

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $allowed;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'lastFourOfAccountNumber';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->lastFourOfAccountNumber = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'type';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->type = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'displayName';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->displayName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'fundingSourceId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->fundingSourceId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'allowed';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->allowed = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Amount to be charged to a particular funding source. 
 */
class FundingPlanCharge  {

	/**
	 * No Document Comments
	 *@access public
	 *@var CurrencyType
	 */ 
	public $charge;

	/**
	 * No Document Comments
	 *@access public
	 *@var FundingSource
	 */ 
	public $fundingSource;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "charge.")) {
				$newPrefix = $prefix . "charge.";
				$this->charge = new CurrencyType();
				$this->charge->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "fundingSource.")) {
				$newPrefix = $prefix . "fundingSource.";
				$this->fundingSource = new FundingSource();
				$this->fundingSource->init($map, $newPrefix);
			}
			
		}
	}
} 



/**
 * FundingPlan describes the funding sources to be used for a
 * specific payment. 
 */
class FundingPlan  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $fundingPlanId;

	/**
	 * No Document Comments
	 *@access public
	 *@var CurrencyType
	 */ 
	public $fundingAmount;

	/**
	 * No Document Comments
	 *@access public
	 *@var FundingSource
	 */ 
	public $backupFundingSource;

	/**
	 * No Document Comments
	 *@access public
	 *@var CurrencyType
	 */ 
	public $senderFees;

	/**
	 * No Document Comments
	 *@access public
	 *@var CurrencyConversion
	 */ 
	public $currencyConversion;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var FundingPlanCharge
	 */ 
	public $charge;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'fundingPlanId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->fundingPlanId = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "fundingAmount.")) {
				$newPrefix = $prefix . "fundingAmount.";
				$this->fundingAmount = new CurrencyType();
				$this->fundingAmount->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "backupFundingSource.")) {
				$newPrefix = $prefix . "backupFundingSource.";
				$this->backupFundingSource = new FundingSource();
				$this->backupFundingSource->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "senderFees.")) {
				$newPrefix = $prefix . "senderFees.";
				$this->senderFees = new CurrencyType();
				$this->senderFees->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "currencyConversion.")) {
				$newPrefix = $prefix . "currencyConversion.";
				$this->currencyConversion = new CurrencyConversion();
				$this->currencyConversion->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "charge($i)")) {
					$newPrefix = $prefix . "charge($i).";
					$this->charge[$i] = new FundingPlanCharge();
					$this->charge[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Details about the party that initiated this payment. The API
 * user is making this payment on behalf of the initiator. The
 * initiator can simply be an institution or a customer of the
 * institution. 
 */
class InitiatingEntity  {

	/**
	 * No Document Comments
	 *@access public
	 *@var InstitutionCustomer
	 */ 
	public $institutionCustomer;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->institutionCustomer != null) {
			$newPrefix = $prefix . 'institutionCustomer.';
			$str .= $delim . call_user_func(array($this->institutionCustomer, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "institutionCustomer.")) {
				$newPrefix = $prefix . "institutionCustomer.";
				$this->institutionCustomer = new InstitutionCustomer();
				$this->institutionCustomer->init($map, $newPrefix);
			}
			
		}
	}
} 



/**
 * The customer of the initiating institution 
 */
class InstitutionCustomer  {

	/**
	 * The unique identifier as assigned to the institution. 
	 *@access public
	 *@var string
	 */ 
	public $institutionId;

	/**
	 * The first (given) name of the end consumer as known by the
	 * institution. 
	 *@access public
	 *@var string
	 */ 
	public $firstName;

	/**
	 * The last (family) name of the end consumer as known by the
	 * institution. 
	 *@access public
	 *@var string
	 */ 
	public $lastName;

	/**
	 * The full name of the end consumer as known by the
	 * institution. 
	 *@access public
	 *@var string
	 */ 
	public $displayName;

	/**
	 * The unique identifier as assigned to the end consumer by the
	 * institution. 
	 *@access public
	 *@var string
	 */ 
	public $institutionCustomerId;

	/**
	 * The two-character ISO country code of the home country of
	 * the end consumer 
	 *@access public
	 *@var string
	 */ 
	public $countryCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $email;

	/**
	 * Constructor with arguments
	 */
	public function __construct($institutionId = null, $firstName = null, $lastName = null, $displayName = null, $institutionCustomerId = null, $countryCode = null) {
		$this->institutionId = $institutionId;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->displayName = $displayName;
		$this->institutionCustomerId = $institutionCustomerId;
		$this->countryCode = $countryCode;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->institutionId != null) {
			$str .= $delim .  $prefix . 'institutionId=' . urlencode($this->institutionId);
			$delim = '&';
		}
		if($this->firstName != null) {
			$str .= $delim .  $prefix . 'firstName=' . urlencode($this->firstName);
			$delim = '&';
		}
		if($this->lastName != null) {
			$str .= $delim .  $prefix . 'lastName=' . urlencode($this->lastName);
			$delim = '&';
		}
		if($this->displayName != null) {
			$str .= $delim .  $prefix . 'displayName=' . urlencode($this->displayName);
			$delim = '&';
		}
		if($this->institutionCustomerId != null) {
			$str .= $delim .  $prefix . 'institutionCustomerId=' . urlencode($this->institutionCustomerId);
			$delim = '&';
		}
		if($this->countryCode != null) {
			$str .= $delim .  $prefix . 'countryCode=' . urlencode($this->countryCode);
			$delim = '&';
		}
		if($this->email != null) {
			$str .= $delim .  $prefix . 'email=' . urlencode($this->email);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'institutionId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->institutionId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'firstName';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->firstName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'lastName';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->lastName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'displayName';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->displayName = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'institutionCustomerId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->institutionCustomerId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'countryCode';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->countryCode = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'email';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->email = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Describes an individual item for an invoice. 
 */
class InvoiceItem  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $name;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $identifier;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $price;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $itemPrice;

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $itemCount;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->name != null) {
			$str .= $delim .  $prefix . 'name=' . urlencode($this->name);
			$delim = '&';
		}
		if($this->identifier != null) {
			$str .= $delim .  $prefix . 'identifier=' . urlencode($this->identifier);
			$delim = '&';
		}
		if($this->price != null) {
			$str .= $delim .  $prefix . 'price=' . urlencode($this->price);
			$delim = '&';
		}
		if($this->itemPrice != null) {
			$str .= $delim .  $prefix . 'itemPrice=' . urlencode($this->itemPrice);
			$delim = '&';
		}
		if($this->itemCount != null) {
			$str .= $delim .  $prefix . 'itemCount=' . urlencode($this->itemCount);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'name';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->name = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'identifier';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->identifier = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'price';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->price = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'itemPrice';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->itemPrice = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'itemCount';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->itemCount = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Describes a payment for a particular receiver (merchant),
 * contains list of additional per item details. 
 */
class InvoiceData  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var InvoiceItem
	 */ 
	public $item;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $totalTax;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $totalShipping;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		for($i = 0; $i < count($this->item); $i++) {
			$newPrefix = $prefix . "item($i).";
			$str .= $delim . call_user_func(array($this->item[$i], 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->totalTax != null) {
			$str .= $delim .  $prefix . 'totalTax=' . urlencode($this->totalTax);
			$delim = '&';
		}
		if($this->totalShipping != null) {
			$str .= $delim .  $prefix . 'totalShipping=' . urlencode($this->totalShipping);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "item($i)")) {
					$newPrefix = $prefix . "item($i).";
					$this->item[$i] = new InvoiceItem();
					$this->item[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			$mapKeyName =  $prefix . 'totalTax';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->totalTax = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'totalShipping';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->totalShipping = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * The error that resulted from an attempt to make a payment to
 * a receiver. 
 */
class PayError  {

	/**
	 * No Document Comments
	 *@access public
	 *@var Receiver
	 */ 
	public $receiver;

	/**
	 * No Document Comments
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "receiver.")) {
				$newPrefix = $prefix . "receiver.";
				$this->receiver = new Receiver();
				$this->receiver->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "error.")) {
				$newPrefix = $prefix . "error.";
				$this->error = new ErrorData();
				$this->error->init($map, $newPrefix);
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class PayErrorList  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var PayError
	 */ 
	public $payError;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "payError($i)")) {
					$newPrefix = $prefix . "payError($i).";
					$this->payError[$i] = new PayError();
					$this->payError[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * PaymentInfo represents the payment attempt made to a
 * Receiver of a PayRequest. If the execution of the payment
 * has not yet completed, there will not be any transaction
 * details. 
 */
class PaymentInfo  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $transactionId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $transactionStatus;

	/**
	 * No Document Comments
	 *@access public
	 *@var Receiver
	 */ 
	public $receiver;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $refundedAmount;

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $pendingRefund;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $senderTransactionId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $senderTransactionStatus;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $pendingReason;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'transactionId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->transactionId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'transactionStatus';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->transactionStatus = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "receiver.")) {
				$newPrefix = $prefix . "receiver.";
				$this->receiver = new Receiver();
				$this->receiver->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'refundedAmount';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->refundedAmount = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'pendingRefund';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->pendingRefund = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'senderTransactionId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->senderTransactionId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'senderTransactionStatus';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->senderTransactionStatus = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'pendingReason';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->pendingReason = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class PaymentInfoList  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var PaymentInfo
	 */ 
	public $paymentInfo;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "paymentInfo($i)")) {
					$newPrefix = $prefix . "paymentInfo($i).";
					$this->paymentInfo[$i] = new PaymentInfo();
					$this->paymentInfo[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Receiver is the party where funds are transferred to. A
 * primary receiver receives a payment directly from the sender
 * in a chained split payment. A primary receiver should not be
 * specified when making a single or parallel split payment. 
 */
class Receiver  {

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $amount;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $email;

	/**
	 * No Document Comments
	 *@access public
	 *@var PhoneNumberType
	 */ 
	public $phone;

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $primary;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $invoiceId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $paymentType;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $paymentSubType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($amount = null) {
		$this->amount = $amount;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->amount != null) {
			$str .= $delim .  $prefix . 'amount=' . urlencode($this->amount);
			$delim = '&';
		}
		if($this->email != null) {
			$str .= $delim .  $prefix . 'email=' . urlencode($this->email);
			$delim = '&';
		}
		if($this->phone != null) {
			$newPrefix = $prefix . 'phone.';
			$str .= $delim . call_user_func(array($this->phone, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->primary != null) {
			$str .= $delim .  $prefix . 'primary=' . urlencode($this->primary);
			$delim = '&';
		}
		if($this->invoiceId != null) {
			$str .= $delim .  $prefix . 'invoiceId=' . urlencode($this->invoiceId);
			$delim = '&';
		}
		if($this->paymentType != null) {
			$str .= $delim .  $prefix . 'paymentType=' . urlencode($this->paymentType);
			$delim = '&';
		}
		if($this->paymentSubType != null) {
			$str .= $delim .  $prefix . 'paymentSubType=' . urlencode($this->paymentSubType);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'amount';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->amount = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'email';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->email = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "phone.")) {
				$newPrefix = $prefix . "phone.";
				$this->phone = new PhoneNumberType();
				$this->phone->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'primary';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->primary = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'invoiceId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->invoiceId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'paymentType';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->paymentType = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'paymentSubType';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->paymentSubType = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class ReceiverList  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var Receiver
	 */ 
	public $receiver;

	/**
	 * Constructor with arguments
	 */
	public function __construct($receiver = null) {
		$this->receiver = $receiver;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		for($i = 0; $i < count($this->receiver); $i++) {
			$newPrefix = $prefix . "receiver($i).";
			$str .= $delim . call_user_func(array($this->receiver[$i], 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The sender identifier type contains information to identify
 * a PayPal account. 
 */
class ReceiverIdentifier  extends AccountIdentifier  {


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		parent::toNVPString($prefix = '');
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			
		}
	}
} 



/**
 * Options that apply to the receiver of a payment, allows
 * setting additional details for payment using invoice. 
 */
class ReceiverOptions  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $description;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $customId;

	/**
	 * No Document Comments
	 *@access public
	 *@var InvoiceData
	 */ 
	public $invoiceData;

	/**
	 * No Document Comments
	 *@access public
	 *@var ReceiverIdentifier
	 */ 
	public $receiver;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $referrerCode;

	/**
	 * Constructor with arguments
	 */
	public function __construct($receiver = null) {
		$this->receiver = $receiver;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->description != null) {
			$str .= $delim .  $prefix . 'description=' . urlencode($this->description);
			$delim = '&';
		}
		if($this->customId != null) {
			$str .= $delim .  $prefix . 'customId=' . urlencode($this->customId);
			$delim = '&';
		}
		if($this->invoiceData != null) {
			$newPrefix = $prefix . 'invoiceData.';
			$str .= $delim . call_user_func(array($this->invoiceData, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->receiver != null) {
			$newPrefix = $prefix . 'receiver.';
			$str .= $delim . call_user_func(array($this->receiver, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->referrerCode != null) {
			$str .= $delim .  $prefix . 'referrerCode=' . urlencode($this->referrerCode);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'description';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->description = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'customId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->customId = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "invoiceData.")) {
				$newPrefix = $prefix . "invoiceData.";
				$this->invoiceData = new InvoiceData();
				$this->invoiceData->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "receiver.")) {
				$newPrefix = $prefix . "receiver.";
				$this->receiver = new ReceiverIdentifier();
				$this->receiver->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'referrerCode';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->referrerCode = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * RefundInfo represents the refund attempt made to a Receiver
 * of a PayRequest. 
 */
class RefundInfo  {

	/**
	 * No Document Comments
	 *@access public
	 *@var Receiver
	 */ 
	public $receiver;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $refundStatus;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $refundNetAmount;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $refundFeeAmount;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $refundGrossAmount;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $totalOfAllRefunds;

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $refundHasBecomeFull;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $encryptedRefundTransactionId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $refundTransactionStatus;

	/**
	 * No Document Comments
	 *@access public
	 *@var ErrorList
	 */ 
	public $errorList;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "receiver.")) {
				$newPrefix = $prefix . "receiver.";
				$this->receiver = new Receiver();
				$this->receiver->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'refundStatus';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->refundStatus = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'refundNetAmount';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->refundNetAmount = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'refundFeeAmount';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->refundFeeAmount = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'refundGrossAmount';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->refundGrossAmount = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'totalOfAllRefunds';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->totalOfAllRefunds = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'refundHasBecomeFull';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->refundHasBecomeFull = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'encryptedRefundTransactionId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->encryptedRefundTransactionId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'refundTransactionStatus';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->refundTransactionStatus = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "errorList.")) {
				$newPrefix = $prefix . "errorList.";
				$this->errorList = new ErrorList();
				$this->errorList->init($map, $newPrefix);
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class RefundInfoList  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var RefundInfo
	 */ 
	public $refundInfo;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "refundInfo($i)")) {
					$newPrefix = $prefix . "refundInfo($i).";
					$this->refundInfo[$i] = new RefundInfo();
					$this->refundInfo[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Options that apply to the sender of a payment. 
 */
class SenderOptions  {

	/**
	 * Require the user to select a shipping address during the web
	 * flow. 
	 *@access public
	 *@var boolean
	 */ 
	public $requireShippingAddressSelection;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $referrerCode;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requireShippingAddressSelection != null) {
			$str .= $delim .  $prefix . 'requireShippingAddressSelection=' . urlencode($this->requireShippingAddressSelection);
			$delim = '&';
		}
		if($this->referrerCode != null) {
			$str .= $delim .  $prefix . 'referrerCode=' . urlencode($this->referrerCode);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'requireShippingAddressSelection';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->requireShippingAddressSelection = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'referrerCode';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->referrerCode = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * The sender identifier type contains information to identify
 * a PayPal account. 
 */
class SenderIdentifier  extends AccountIdentifier  {

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $useCredentials;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		parent::toNVPString($prefix = '');
		if($this->useCredentials != null) {
			$str .= $delim .  $prefix . 'useCredentials=' . urlencode($this->useCredentials);
			$delim = '&';
		}
		return $str;
	}


	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'useCredentials';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->useCredentials = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class UserLimit  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $limitType;

	/**
	 * No Document Comments
	 *@access public
	 *@var CurrencyType
	 */ 
	public $limitAmount;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'limitType';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->limitType = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "limitAmount.")) {
				$newPrefix = $prefix . "limitAmount.";
				$this->limitAmount = new CurrencyType();
				$this->limitAmount->init($map, $newPrefix);
			}
			
		}
	}
} 



/**
 * This type contains the detailed warning information
 * resulting from the service operation. 
 */
class WarningData  {

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $warningId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $message;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'warningId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->warningId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'message';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->message = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class WarningDataList  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var WarningData
	 */ 
	public $warningData;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "warningData($i)")) {
					$newPrefix = $prefix . "warningData($i).";
					$this->warningData[$i] = new WarningData();
					$this->warningData[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request to cancel a Preapproval. 
 */
class CancelPreapprovalRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $preapprovalKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $preapprovalKey = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->preapprovalKey = $preapprovalKey;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->preapprovalKey != null) {
			$str .= $delim .  $prefix . 'preapprovalKey=' . urlencode($this->preapprovalKey);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The result of the CancelPreapprovalRequest. 
 */
class CancelPreapprovalResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request to confirm a Preapproval. 
 */
class ConfirmPreapprovalRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $preapprovalKey;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $fundingSourceId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $pin;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $preapprovalKey = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->preapprovalKey = $preapprovalKey;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->preapprovalKey != null) {
			$str .= $delim .  $prefix . 'preapprovalKey=' . urlencode($this->preapprovalKey);
			$delim = '&';
		}
		if($this->fundingSourceId != null) {
			$str .= $delim .  $prefix . 'fundingSourceId=' . urlencode($this->fundingSourceId);
			$delim = '&';
		}
		if($this->pin != null) {
			$str .= $delim .  $prefix . 'pin=' . urlencode($this->pin);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The result of the ConfirmPreapprovalRequest. 
 */
class ConfirmPreapprovalResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * A request to convert one or more currencies into their
 * estimated values in other currencies. 
 */
class ConvertCurrencyRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var CurrencyList
	 */ 
	public $baseAmountList;

	/**
	 * No Document Comments
	 *@access public
	 *@var CurrencyCodeList
	 */ 
	public $convertToCurrencyList;

	/**
	 * The two-character ISO country code where fx suppposed to
	 * happen 
	 *@access public
	 *@var string
	 */ 
	public $countryCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $conversionType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $baseAmountList = null, $convertToCurrencyList = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->baseAmountList = $baseAmountList;
		$this->convertToCurrencyList = $convertToCurrencyList;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->baseAmountList != null) {
			$newPrefix = $prefix . 'baseAmountList.';
			$str .= $delim . call_user_func(array($this->baseAmountList, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->convertToCurrencyList != null) {
			$newPrefix = $prefix . 'convertToCurrencyList.';
			$str .= $delim . call_user_func(array($this->convertToCurrencyList, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->countryCode != null) {
			$str .= $delim .  $prefix . 'countryCode=' . urlencode($this->countryCode);
			$delim = '&';
		}
		if($this->conversionType != null) {
			$str .= $delim .  $prefix . 'conversionType=' . urlencode($this->conversionType);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * A response that contains a table of estimated converted
 * currencies based on the Convert Currency Request. 
 */
class ConvertCurrencyResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var CurrencyConversionTable
	 */ 
	public $estimatedAmountTable;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "estimatedAmountTable.")) {
				$newPrefix = $prefix . "estimatedAmountTable.";
				$this->estimatedAmountTable = new CurrencyConversionTable();
				$this->estimatedAmountTable->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request to execute the payment request. 
 */
class ExecutePaymentRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $payKey;

	/**
	 * Describes the action that is performed by this API 
	 *@access public
	 *@var string
	 */ 
	public $actionType;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $fundingPlanId;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $payKey = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->payKey != null) {
			$str .= $delim .  $prefix . 'payKey=' . urlencode($this->payKey);
			$delim = '&';
		}
		if($this->actionType != null) {
			$str .= $delim .  $prefix . 'actionType=' . urlencode($this->actionType);
			$delim = '&';
		}
		if($this->fundingPlanId != null) {
			$str .= $delim .  $prefix . 'fundingPlanId=' . urlencode($this->fundingPlanId);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The result of a payment execution. 
 */
class ExecutePaymentResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $paymentExecStatus;

	/**
	 * No Document Comments
	 *@access public
	 *@var PayErrorList
	 */ 
	public $payErrorList;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'paymentExecStatus';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->paymentExecStatus = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "payErrorList.")) {
				$newPrefix = $prefix . "payErrorList.";
				$this->payErrorList = new PayErrorList();
				$this->payErrorList->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request to get the allowed funding sources available for
 * a preapproval. 
 */
class GetAllowedFundingSourcesRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $key;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $key = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->key = $key;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->key != null) {
			$str .= $delim .  $prefix . 'key=' . urlencode($this->key);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The response to get the backup funding sources available for
 * a preapproval. 
 */
class GetAllowedFundingSourcesResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var FundingSource
	 */ 
	public $fundingSource;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "fundingSource($i)")) {
					$newPrefix = $prefix . "fundingSource($i).";
					$this->fundingSource[$i] = new FundingSource();
					$this->fundingSource[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request to get the options of a payment request. 
 */
class GetPaymentOptionsRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $payKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $payKey = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->payKey != null) {
			$str .= $delim .  $prefix . 'payKey=' . urlencode($this->payKey);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The response message for the GetPaymentOption request 
 */
class GetPaymentOptionsResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var InitiatingEntity
	 */ 
	public $initiatingEntity;

	/**
	 * No Document Comments
	 *@access public
	 *@var DisplayOptions
	 */ 
	public $displayOptions;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $shippingAddressId;

	/**
	 * No Document Comments
	 *@access public
	 *@var SenderOptions
	 */ 
	public $senderOptions;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ReceiverOptions
	 */ 
	public $receiverOptions;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "initiatingEntity.")) {
				$newPrefix = $prefix . "initiatingEntity.";
				$this->initiatingEntity = new InitiatingEntity();
				$this->initiatingEntity->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "displayOptions.")) {
				$newPrefix = $prefix . "displayOptions.";
				$this->displayOptions = new DisplayOptions();
				$this->displayOptions->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'shippingAddressId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->shippingAddressId = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "senderOptions.")) {
				$newPrefix = $prefix . "senderOptions.";
				$this->senderOptions = new SenderOptions();
				$this->senderOptions->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "receiverOptions($i)")) {
					$newPrefix = $prefix . "receiverOptions($i).";
					$this->receiverOptions[$i] = new ReceiverOptions();
					$this->receiverOptions[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request to look up the details of a PayRequest. The
 * PaymentDetailsRequest can be made with either a payKey,
 * trackingId, or a transactionId of the PayRequest. 
 */
class PaymentDetailsRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $payKey;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $transactionId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $trackingId;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null) {
		$this->requestEnvelope = $requestEnvelope;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->payKey != null) {
			$str .= $delim .  $prefix . 'payKey=' . urlencode($this->payKey);
			$delim = '&';
		}
		if($this->transactionId != null) {
			$str .= $delim .  $prefix . 'transactionId=' . urlencode($this->transactionId);
			$delim = '&';
		}
		if($this->trackingId != null) {
			$str .= $delim .  $prefix . 'trackingId=' . urlencode($this->trackingId);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The details of the PayRequest as specified in the Pay
 * operation. 
 */
class PaymentDetailsResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $cancelUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $currencyCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $ipnNotificationUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $memo;

	/**
	 * No Document Comments
	 *@access public
	 *@var PaymentInfoList
	 */ 
	public $paymentInfoList;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $returnUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $senderEmail;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $status;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $trackingId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $payKey;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $actionType;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $feesPayer;

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $reverseAllParallelPaymentsOnError;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $preapprovalKey;

	/**
	 * No Document Comments
	 *@access public
	 *@var FundingConstraint
	 */ 
	public $fundingConstraint;

	/**
	 * No Document Comments
	 *@access public
	 *@var SenderIdentifier
	 */ 
	public $sender;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'cancelUrl';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->cancelUrl = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'currencyCode';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->currencyCode = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'ipnNotificationUrl';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->ipnNotificationUrl = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'memo';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->memo = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "paymentInfoList.")) {
				$newPrefix = $prefix . "paymentInfoList.";
				$this->paymentInfoList = new PaymentInfoList();
				$this->paymentInfoList->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'returnUrl';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->returnUrl = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'senderEmail';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->senderEmail = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'status';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->status = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'trackingId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->trackingId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'payKey';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->payKey = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'actionType';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->actionType = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'feesPayer';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->feesPayer = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'reverseAllParallelPaymentsOnError';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->reverseAllParallelPaymentsOnError = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'preapprovalKey';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->preapprovalKey = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "fundingConstraint.")) {
				$newPrefix = $prefix . "fundingConstraint.";
				$this->fundingConstraint = new FundingConstraint();
				$this->fundingConstraint->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "sender.")) {
				$newPrefix = $prefix . "sender.";
				$this->sender = new SenderIdentifier();
				$this->sender->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The PayRequest contains the payment instructions to make
 * from sender to receivers. 
 */
class PayRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var ClientDetailsType
	 */ 
	public $clientDetails;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $actionType;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $cancelUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $currencyCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $feesPayer;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $ipnNotificationUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $memo;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $pin;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $preapprovalKey;

	/**
	 * No Document Comments
	 *@access public
	 *@var ReceiverList
	 */ 
	public $receiverList;

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $reverseAllParallelPaymentsOnError;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $senderEmail;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $returnUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $trackingId;

	/**
	 * No Document Comments
	 *@access public
	 *@var FundingConstraint
	 */ 
	public $fundingConstraint;

	/**
	 * No Document Comments
	 *@access public
	 *@var SenderIdentifier
	 */ 
	public $sender;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $actionType = null, $cancelUrl = null, $currencyCode = null, $receiverList = null, $returnUrl = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->actionType = $actionType;
		$this->cancelUrl = $cancelUrl;
		$this->currencyCode = $currencyCode;
		$this->receiverList = $receiverList;
		$this->returnUrl = $returnUrl;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->clientDetails != null) {
			$newPrefix = $prefix . 'clientDetails.';
			$str .= $delim . call_user_func(array($this->clientDetails, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->actionType != null) {
			$str .= $delim .  $prefix . 'actionType=' . urlencode($this->actionType);
			$delim = '&';
		}
		if($this->cancelUrl != null) {
			$str .= $delim .  $prefix . 'cancelUrl=' . urlencode($this->cancelUrl);
			$delim = '&';
		}
		if($this->currencyCode != null) {
			$str .= $delim .  $prefix . 'currencyCode=' . urlencode($this->currencyCode);
			$delim = '&';
		}
		if($this->feesPayer != null) {
			$str .= $delim .  $prefix . 'feesPayer=' . urlencode($this->feesPayer);
			$delim = '&';
		}
		if($this->ipnNotificationUrl != null) {
			$str .= $delim .  $prefix . 'ipnNotificationUrl=' . urlencode($this->ipnNotificationUrl);
			$delim = '&';
		}
		if($this->memo != null) {
			$str .= $delim .  $prefix . 'memo=' . urlencode($this->memo);
			$delim = '&';
		}
		if($this->pin != null) {
			$str .= $delim .  $prefix . 'pin=' . urlencode($this->pin);
			$delim = '&';
		}
		if($this->preapprovalKey != null) {
			$str .= $delim .  $prefix . 'preapprovalKey=' . urlencode($this->preapprovalKey);
			$delim = '&';
		}
		if($this->receiverList != null) {
			$newPrefix = $prefix . 'receiverList.';
			$str .= $delim . call_user_func(array($this->receiverList, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->reverseAllParallelPaymentsOnError != null) {
			$str .= $delim .  $prefix . 'reverseAllParallelPaymentsOnError=' . urlencode($this->reverseAllParallelPaymentsOnError);
			$delim = '&';
		}
		if($this->senderEmail != null) {
			$str .= $delim .  $prefix . 'senderEmail=' . urlencode($this->senderEmail);
			$delim = '&';
		}
		if($this->returnUrl != null) {
			$str .= $delim .  $prefix . 'returnUrl=' . urlencode($this->returnUrl);
			$delim = '&';
		}
		if($this->trackingId != null) {
			$str .= $delim .  $prefix . 'trackingId=' . urlencode($this->trackingId);
			$delim = '&';
		}
		if($this->fundingConstraint != null) {
			$newPrefix = $prefix . 'fundingConstraint.';
			$str .= $delim . call_user_func(array($this->fundingConstraint, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->sender != null) {
			$newPrefix = $prefix . 'sender.';
			$str .= $delim . call_user_func(array($this->sender, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The PayResponse contains the result of the Pay operation.
 * The payKey and execution status of the request should always
 * be provided. 
 */
class PayResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $payKey;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $paymentExecStatus;

	/**
	 * No Document Comments
	 *@access public
	 *@var PayErrorList
	 */ 
	public $payErrorList;

	/**
	 * No Document Comments
	 *@access public
	 *@var FundingPlan
	 */ 
	public $defaultFundingPlan;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'payKey';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->payKey = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'paymentExecStatus';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->paymentExecStatus = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "payErrorList.")) {
				$newPrefix = $prefix . "payErrorList.";
				$this->payErrorList = new PayErrorList();
				$this->payErrorList->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "defaultFundingPlan.")) {
				$newPrefix = $prefix . "defaultFundingPlan.";
				$this->defaultFundingPlan = new FundingPlan();
				$this->defaultFundingPlan->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request to look up the details of a Preapproval. 
 */
class PreapprovalDetailsRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $preapprovalKey;

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $getBillingAddress;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $preapprovalKey = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->preapprovalKey = $preapprovalKey;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->preapprovalKey != null) {
			$str .= $delim .  $prefix . 'preapprovalKey=' . urlencode($this->preapprovalKey);
			$delim = '&';
		}
		if($this->getBillingAddress != null) {
			$str .= $delim .  $prefix . 'getBillingAddress=' . urlencode($this->getBillingAddress);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The details of the Preapproval as specified in the
 * Preapproval operation. 
 */
class PreapprovalDetailsResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $approved;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $cancelUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $curPayments;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $curPaymentsAmount;

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $curPeriodAttempts;

	/**
	 * No Document Comments
	 *@access public
	 *@var dateTime
	 */ 
	public $curPeriodEndingDate;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $currencyCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $dateOfMonth;

	/**
	 * No Document Comments
	 *@access public
	 *@var DayOfWeek
	 */ 
	public $dayOfWeek;

	/**
	 * No Document Comments
	 *@access public
	 *@var dateTime
	 */ 
	public $endingDate;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $maxAmountPerPayment;

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $maxNumberOfPayments;

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $maxNumberOfPaymentsPerPeriod;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $maxTotalAmountOfAllPayments;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $paymentPeriod;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $pinType;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $returnUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $senderEmail;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $memo;

	/**
	 * No Document Comments
	 *@access public
	 *@var dateTime
	 */ 
	public $startingDate;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $status;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $ipnNotificationUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var AddressList
	 */ 
	public $addressList;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $feesPayer;

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $displayMaxTotalAmount;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'approved';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->approved = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'cancelUrl';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->cancelUrl = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'curPayments';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->curPayments = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'curPaymentsAmount';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->curPaymentsAmount = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'curPeriodAttempts';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->curPeriodAttempts = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'curPeriodEndingDate';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->curPeriodEndingDate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'currencyCode';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->currencyCode = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'dateOfMonth';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->dateOfMonth = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'dayOfWeek';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->dayOfWeek = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'endingDate';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->endingDate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'maxAmountPerPayment';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->maxAmountPerPayment = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'maxNumberOfPayments';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->maxNumberOfPayments = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'maxNumberOfPaymentsPerPeriod';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->maxNumberOfPaymentsPerPeriod = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'maxTotalAmountOfAllPayments';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->maxTotalAmountOfAllPayments = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'paymentPeriod';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->paymentPeriod = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'pinType';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->pinType = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'returnUrl';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->returnUrl = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'senderEmail';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->senderEmail = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'memo';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->memo = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'startingDate';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->startingDate = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'status';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->status = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'ipnNotificationUrl';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->ipnNotificationUrl = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "addressList.")) {
				$newPrefix = $prefix . "addressList.";
				$this->addressList = new AddressList();
				$this->addressList->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'feesPayer';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->feesPayer = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'displayMaxTotalAmount';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->displayMaxTotalAmount = $map[$mapKeyName];
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * A request to create a Preapproval. A Preapproval is an
 * agreement between a Paypal account holder (the sender) and
 * the API caller (the service invoker) to make payment(s) on
 * the the sender's behalf with various limitations defined. 
 */
class PreapprovalRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var ClientDetailsType
	 */ 
	public $clientDetails;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $cancelUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $currencyCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $dateOfMonth;

	/**
	 * No Document Comments
	 *@access public
	 *@var DayOfWeek
	 */ 
	public $dayOfWeek;

	/**
	 * No Document Comments
	 *@access public
	 *@var dateTime
	 */ 
	public $endingDate;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $maxAmountPerPayment;

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $maxNumberOfPayments;

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $maxNumberOfPaymentsPerPeriod;

	/**
	 * No Document Comments
	 *@access public
	 *@var double
	 */ 
	public $maxTotalAmountOfAllPayments;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $paymentPeriod;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $returnUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $memo;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $ipnNotificationUrl;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $senderEmail;

	/**
	 * No Document Comments
	 *@access public
	 *@var dateTime
	 */ 
	public $startingDate;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $pinType;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $feesPayer;

	/**
	 * No Document Comments
	 *@access public
	 *@var boolean
	 */ 
	public $displayMaxTotalAmount;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $cancelUrl = null, $currencyCode = null, $returnUrl = null, $startingDate = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->cancelUrl = $cancelUrl;
		$this->currencyCode = $currencyCode;
		$this->returnUrl = $returnUrl;
		$this->startingDate = $startingDate;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->clientDetails != null) {
			$newPrefix = $prefix . 'clientDetails.';
			$str .= $delim . call_user_func(array($this->clientDetails, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->cancelUrl != null) {
			$str .= $delim .  $prefix . 'cancelUrl=' . urlencode($this->cancelUrl);
			$delim = '&';
		}
		if($this->currencyCode != null) {
			$str .= $delim .  $prefix . 'currencyCode=' . urlencode($this->currencyCode);
			$delim = '&';
		}
		if($this->dateOfMonth != null) {
			$str .= $delim .  $prefix . 'dateOfMonth=' . urlencode($this->dateOfMonth);
			$delim = '&';
		}
		if($this->dayOfWeek != null) {
			$str .= $delim .  $prefix . 'dayOfWeek=' . urlencode($this->dayOfWeek);
			$delim = '&';
		}
		if($this->endingDate != null) {
			$str .= $delim .  $prefix . 'endingDate=' . urlencode($this->endingDate);
			$delim = '&';
		}
		if($this->maxAmountPerPayment != null) {
			$str .= $delim .  $prefix . 'maxAmountPerPayment=' . urlencode($this->maxAmountPerPayment);
			$delim = '&';
		}
		if($this->maxNumberOfPayments != null) {
			$str .= $delim .  $prefix . 'maxNumberOfPayments=' . urlencode($this->maxNumberOfPayments);
			$delim = '&';
		}
		if($this->maxNumberOfPaymentsPerPeriod != null) {
			$str .= $delim .  $prefix . 'maxNumberOfPaymentsPerPeriod=' . urlencode($this->maxNumberOfPaymentsPerPeriod);
			$delim = '&';
		}
		if($this->maxTotalAmountOfAllPayments != null) {
			$str .= $delim .  $prefix . 'maxTotalAmountOfAllPayments=' . urlencode($this->maxTotalAmountOfAllPayments);
			$delim = '&';
		}
		if($this->paymentPeriod != null) {
			$str .= $delim .  $prefix . 'paymentPeriod=' . urlencode($this->paymentPeriod);
			$delim = '&';
		}
		if($this->returnUrl != null) {
			$str .= $delim .  $prefix . 'returnUrl=' . urlencode($this->returnUrl);
			$delim = '&';
		}
		if($this->memo != null) {
			$str .= $delim .  $prefix . 'memo=' . urlencode($this->memo);
			$delim = '&';
		}
		if($this->ipnNotificationUrl != null) {
			$str .= $delim .  $prefix . 'ipnNotificationUrl=' . urlencode($this->ipnNotificationUrl);
			$delim = '&';
		}
		if($this->senderEmail != null) {
			$str .= $delim .  $prefix . 'senderEmail=' . urlencode($this->senderEmail);
			$delim = '&';
		}
		if($this->startingDate != null) {
			$str .= $delim .  $prefix . 'startingDate=' . urlencode($this->startingDate);
			$delim = '&';
		}
		if($this->pinType != null) {
			$str .= $delim .  $prefix . 'pinType=' . urlencode($this->pinType);
			$delim = '&';
		}
		if($this->feesPayer != null) {
			$str .= $delim .  $prefix . 'feesPayer=' . urlencode($this->feesPayer);
			$delim = '&';
		}
		if($this->displayMaxTotalAmount != null) {
			$str .= $delim .  $prefix . 'displayMaxTotalAmount=' . urlencode($this->displayMaxTotalAmount);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The result of the PreapprovalRequest is a preapprovalKey. 
 */
class PreapprovalResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $preapprovalKey;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'preapprovalKey';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->preapprovalKey = $map[$mapKeyName];
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * A request to make a refund based on various criteria. A
 * refund can be made against the entire payKey, an individual
 * transaction belonging to a payKey, a tracking id, or a
 * specific receiver of a payKey. 
 */
class RefundRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $currencyCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $payKey;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $transactionId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $trackingId;

	/**
	 * No Document Comments
	 *@access public
	 *@var ReceiverList
	 */ 
	public $receiverList;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null) {
		$this->requestEnvelope = $requestEnvelope;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->currencyCode != null) {
			$str .= $delim .  $prefix . 'currencyCode=' . urlencode($this->currencyCode);
			$delim = '&';
		}
		if($this->payKey != null) {
			$str .= $delim .  $prefix . 'payKey=' . urlencode($this->payKey);
			$delim = '&';
		}
		if($this->transactionId != null) {
			$str .= $delim .  $prefix . 'transactionId=' . urlencode($this->transactionId);
			$delim = '&';
		}
		if($this->trackingId != null) {
			$str .= $delim .  $prefix . 'trackingId=' . urlencode($this->trackingId);
			$delim = '&';
		}
		if($this->receiverList != null) {
			$newPrefix = $prefix . 'receiverList.';
			$str .= $delim . call_user_func(array($this->receiverList, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The result of a Refund request. 
 */
class RefundResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $currencyCode;

	/**
	 * No Document Comments
	 *@access public
	 *@var RefundInfoList
	 */ 
	public $refundInfoList;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'currencyCode';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->currencyCode = $map[$mapKeyName];
			}
			if (PPUtils::array_match_key($map, $prefix . "refundInfoList.")) {
				$newPrefix = $prefix . "refundInfoList.";
				$this->refundInfoList = new RefundInfoList();
				$this->refundInfoList->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request to set the options of a payment request. 
 */
class SetPaymentOptionsRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $payKey;

	/**
	 * No Document Comments
	 *@access public
	 *@var InitiatingEntity
	 */ 
	public $initiatingEntity;

	/**
	 * No Document Comments
	 *@access public
	 *@var DisplayOptions
	 */ 
	public $displayOptions;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $shippingAddressId;

	/**
	 * No Document Comments
	 *@access public
	 *@var SenderOptions
	 */ 
	public $senderOptions;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ReceiverOptions
	 */ 
	public $receiverOptions;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $payKey = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->payKey != null) {
			$str .= $delim .  $prefix . 'payKey=' . urlencode($this->payKey);
			$delim = '&';
		}
		if($this->initiatingEntity != null) {
			$newPrefix = $prefix . 'initiatingEntity.';
			$str .= $delim . call_user_func(array($this->initiatingEntity, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->displayOptions != null) {
			$newPrefix = $prefix . 'displayOptions.';
			$str .= $delim . call_user_func(array($this->displayOptions, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->shippingAddressId != null) {
			$str .= $delim .  $prefix . 'shippingAddressId=' . urlencode($this->shippingAddressId);
			$delim = '&';
		}
		if($this->senderOptions != null) {
			$newPrefix = $prefix . 'senderOptions.';
			$str .= $delim . call_user_func(array($this->senderOptions, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		for($i = 0; $i < count($this->receiverOptions); $i++) {
			$newPrefix = $prefix . "receiverOptions($i).";
			$str .= $delim . call_user_func(array($this->receiverOptions[$i], 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The response message for the SetPaymentOption request 
 */
class SetPaymentOptionsResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request to get the funding plans available for a
 * payment. 
 */
class GetFundingPlansRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $payKey;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $payKey = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->payKey = $payKey;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->payKey != null) {
			$str .= $delim .  $prefix . 'payKey=' . urlencode($this->payKey);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The response to get the funding plans available for a
 * payment. 
 */
class GetFundingPlansResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var FundingPlan
	 */ 
	public $fundingPlan;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "fundingPlan($i)")) {
					$newPrefix = $prefix . "fundingPlan($i).";
					$this->fundingPlan[$i] = new FundingPlan();
					$this->fundingPlan[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request to get the addresses available for a payment. 
 */
class GetAvailableShippingAddressesRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * The key for which to provide the available addresses. Key
	 * can be an AdaptivePayments key such as payKey or
	 * preapprovalKey 
	 *@access public
	 *@var string
	 */ 
	public $key;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $key = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->key = $key;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->key != null) {
			$str .= $delim .  $prefix . 'key=' . urlencode($this->key);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The response to get the shipping addresses available for a
 * payment. 
 */
class GetAvailableShippingAddressesResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var Address
	 */ 
	public $availableAddress;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "availableAddress($i)")) {
					$newPrefix = $prefix . "availableAddress($i).";
					$this->availableAddress[$i] = new Address();
					$this->availableAddress[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request to get the addresses available for a payment. 
 */
class GetShippingAddressesRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * The key for which to provide the available addresses. Key
	 * can be an AdaptivePayments key such as payKey or
	 * preapprovalKey 
	 *@access public
	 *@var string
	 */ 
	public $key;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $key = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->key = $key;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->key != null) {
			$str .= $delim .  $prefix . 'key=' . urlencode($this->key);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The response to get the shipping addresses available for a
 * payment. 
 */
class GetShippingAddressesResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var Address
	 */ 
	public $selectedAddress;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "selectedAddress.")) {
				$newPrefix = $prefix . "selectedAddress.";
				$this->selectedAddress = new Address();
				$this->selectedAddress->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request to get the remaining limits for a user 
 */
class GetUserLimitsRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * The account identifier for the user 
	 *@access public
	 *@var AccountIdentifier
	 */ 
	public $user;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $country;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $currencyCode;

	/**
	 * List of limit types 
     *@array
	 *@access public
	 *@var string
	 */ 
	public $limitType;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = null, $user = null, $country = null, $currencyCode = null, $limitType = null) {
		$this->requestEnvelope = $requestEnvelope;
		$this->user = $user;
		$this->country = $country;
		$this->currencyCode = $currencyCode;
		$this->limitType = $limitType;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->user != null) {
			$newPrefix = $prefix . 'user.';
			$str .= $delim . call_user_func(array($this->user, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->country != null) {
			$str .= $delim .  $prefix . 'country=' . urlencode($this->country);
			$delim = '&';
		}
		if($this->currencyCode != null) {
			$str .= $delim .  $prefix . 'currencyCode=' . urlencode($this->currencyCode);
			$delim = '&';
		}
		for($i = 0; $i < count($this->limitType); $i++) {
			$str .= $delim .  $prefix . "limitType($i)=" .  urlencode($this->limitType[$i]);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * A response that contains a list of remaining limits 
 */
class GetUserLimitsResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var UserLimit
	 */ 
	public $userLimit;

	/**
	 * No Document Comments
	 *@access public
	 *@var WarningDataList
	 */ 
	public $warningDataList;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "userLimit($i)")) {
					$newPrefix = $prefix . "userLimit($i).";
					$this->userLimit[$i] = new UserLimit();
					$this->userLimit[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			if (PPUtils::array_match_key($map, $prefix . "warningDataList.")) {
				$newPrefix = $prefix . "warningDataList.";
				$this->warningDataList = new WarningDataList();
				$this->warningDataList->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 




?>