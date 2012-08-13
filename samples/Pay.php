<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>PayPal Adaptive Payments - Pay</title>
<link rel="stylesheet" type="text/css" href="Common/sdk.css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
<script type="text/javascript" src="Common/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="Common/jquery.qtip-1.0.0-rc3.min.js"></script>
<script type="text/javascript">
	toolTips = {
		actionType : "Whether the Pay request pays the receiver or whether the Pay request is set up to create a payment requesbut not fulfill the payment until the Execute Pay request is called.Allowable values are: <br/ >>> <i>PAY</i> Use this option if you are not using the Pay request in combinations with the ExecutePayment request.<br/><br/> >> <i>CREATE</i> Use this option to set up the payment instructions with the SetPaymentOptions request and then execute the payment at a later time with the ExecutePayment request.<br/><br/> >> <i>PAY_PRIMARY </i> For chained payments only, specify this value to delay payments to the secondary receivers; only the payment to the primary receiver is processed",
		phoneCountry_0 : "Telephone country code",
		phoneNumber_0 : "Telephone number",
		phoneExtn_0 : "Telephone extension",
		pin : "Sender’s personal identification number, which was specified when the sender signed up for a preapproval."
	}	
	$(document).ready( function () {
		jQuery.each(toolTips, function(id, toolTip) {
			$("#"+id).attr("title", toolTip);
		}); 
		$("input[title]").qtip(qtipConfig);
		$("select[title]").qtip(qtipConfig);
	});
</script>
</head>
<?php

	
	$serverName = $_SERVER['SERVER_NAME'];
	$serverPort = $_SERVER['SERVER_PORT'];
	$url=dirname('http://'.$serverName.':'.$serverPort.$_SERVER['REQUEST_URI']);
	$returnUrl = $url."/WebflowReturnPage.php";
	$cancelUrl =  $url."Pay.php";
?>

<body>
	<div id="wrapper">
		<div id="header">
			<h3>Pay</h3>
			<div id="apidetails"></div>
		</div>
		<div id="request_form">
			<form action="PayReceipt.php" method="post">
				<div class="params">
					<div class="param_name">Action type *</div>
					<div class="param_value">
						<select name="actionType" id="actionType">
							<option value="PAY">PAY</option>
							<option value="CREATE">CREATE</option>
							<option value="PAY_PRIMARY">PAY_PRIMARY</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Cancel Url *</div>
					<div class="param_value">
						<input name="cancelUrl" id="cancelUrl" value="<?php echo $cancelUrl;?>" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Currency code *</div>
					<div class="param_value">
						<input name="currencyCode" value="USD" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Fees payer</div>
					<div class="param_value">
						<select name="feesPayer">
							<option value="EACHRECEIVER">EACHRECEIVER</option>
							<option value="PRIMARYRECEIVER">PRIMARYRECEIVER</option>
							<option value="SENDER" selected="selected">SENDER</option>
							<option value="SECONDARYONLY">SECONDARYONLY</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">IPN Notification Url</div>
					<div class="param_value">
						<input name="ipnNotificationUrl" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Memo</div>
					<div class="param_value">
						<input name="memo" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Pin</div>
					<div class="param_value">
						<input name="pin" id="pin" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Preapproval key</div>
					<div class="param_value">
						<input name="preapprovalKey" id="preapprovalKey" value="" />
					</div>
				</div>
				<div class="section_header">Receiver info</div>
				<table class="params" id="receiverTable">
					<tr>
						<th></th>
						<th>Email *</th>
						<th>Amount *</th>
						<th>Phone number</th>
						<th>Primary receiver</th>
						<th>Invoice Id</th>
						<th>Payment type</th>
						<th>Payment subtype</th>
					</tr>
					<tr id="receiverTable_0">
						<td align="left"><input type="checkbox" name="receiver[]" id="receiver_0" disabled="disabled" /></td>
						<td>
							<input type="text" name="receiverEmail[]" id="receiveremail_0" value="platfo_1255612361_per@gmail.com">
						</td>
						<td>
							<input type="text" name="receiverAmount[]" id="amount_0" value="1.0" class="smallfield">
						</td>
						<td>
							<input type="text" name="phoneCountry[]" id="phoneCountry_0" value="" class="xsmallfield" /> - 
							<input type="text" name="phoneNumber[]" id="phoneNumber_0" value="" class="xsmallfield" />
							<input type="text" name="phoneExtn[]" id="phoneExtn_0" value="" class="xsmallfield" />
						</td>						
						<td>
							<select name="primaryReceiver[]" id="primaryReceiver_0" class="smallfield">
								<option value="true">true</option>
								<option value="false" selected="selected">false</option>
							</select>
						</td>
						<td>
							<input type="text" name="invoiceId[]" id="invoiceid_0" value="" class="smallfield">
						</td>
						<td>
							<select name="paymentType[]" id="paymentType_0" class="smallfield">
								<option>- Select -</option>
								<option>GOODS</option>
								<option>SERVICE</option>
								<option>PERSONAL</option>
								<option>CASHADVANCE</option>
								<option>DIGITALGOODS</option>
							</select>
						</td>
						<td>
							<input type="text" name="paymentSubType[]" id="paymentSubType" value="" class="smallfield">
						</td>						
					</tr>
				</table>
				<table align="center">
					<tr>
						<td><a onclick="cloneRow('receiverTable', 8)" id="Submit"><span>Add
									Receiver </span> </a></td>
						<td><a onclick="deleteRow('receiverTable')" id="Submit"><span> Delete
									Receiver</span> </a></td>
					</tr>
				</table>
				<div class="params">
					<div class="param_name">Reverse all parallel payments on error</div>
					<div class="param_value">
						<input name="reverseAllParallelPaymentsOnError" id="reverseAllParallelPaymentsOnError" value="false" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Sender email (Optional for Guest Payment)</div>
					<div class="param_value">
						<input name="senderEmail" id="senderEmail" value="platfo_1255077030_biz@gmail.com" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Return Url</div>
					<div class="param_value">
						<input name="returnUrl" id="returnUrl" value="<?php echo $returnUrl;?>" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Tracking Id</div>
					<div class="param_value">
						<input name="trackingId" id="trackingId" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Funding constraint (Requires advanced permission levels)</div>
					<div class="param_value">
						<select name="fundingConstraint" id="fundingConstraint">
							<option value="">- Select -</option>
							<option>ECHECK</option>
							<option>BALANCE</option>
							<option>CREDITCARD</option>
						</select>
					</div>
				</div>
				<div class="input_header">Sender Identifier</div>
				<table class="params">
					<tr>
						<th>Email</th>
						<th>Phone</th>
						<th>Use Credentials</th>
					</tr>
					<tr>
						<td><input name="emailIdentifier" id="emailIdentifier" value="" /></td>
						<td><input name="phoneIdentifier" id="phoneIdentifier" value="" /></td>
						<td><input name="useCredentials" id="useCredentials" value="" /></td>
					</tr>
				</table>				
				<div class="submit">
					<input type="submit" value="Submit" />
				</div>
			</form>
		</div>
	</div>
</body>
</html>
