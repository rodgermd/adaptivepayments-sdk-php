<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Adaptive Payment - Preapproval</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
<script type="text/javascript" src="Common/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="Common/jquery.qtip-1.0.0-rc3.min.js"></script>
<script type="text/javascript">
	toolTips = {
		dateOfMonth : "The day of the month on which a monthly payment is to be made. Allowable values are numbers between 0 and 31. A number between 1 and 31 indicates the date of the month. Specifying 0 indicates that payment can be made on any day of the month.",
		dayOfWeek: "The day of the week that a weekly payment is to be made.",
		endingDate: "Last date for which the preapproval is valid. It cannot be later than one year from the starting date."
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
	$returnUrl = $_SERVER["PHP_SELF"];
	$cancelUrl = $_SERVER["PHP_SELF"];	
?>
<body>
	<div id="wrapper">
		<div id="header">
			<h3>Preapproval</h3>
			<div id="apidetails">A request to create a Preapproval. A Preapproval
				is an agreement between a Paypal account holder (the sender) and the
				API caller (the service invoker) to make payment(s) on the the
				sender's behalf with various limitations defined.</div>
		</div>
		<div id="request_form">
			<form id="Form1" name="Form1" method="post"
				action="PreapprovalReceipt.php">
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
					<div class="param_name">Payment date - Date of month</div>
					<div class="param_value">
						<input name="dateOfMonth" id="dateOfMonth" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Payment date - Day of week</div>
					<div class="param_value">
						<select name="dayOfWeek" id="dayOfWeek">
							<option>- Select -</option>
							<option>NO_DAY_SPECIFIED</option>
							<option>SUNDAY</option>
							<option>MONDAY</option>
							<option>TUESDAY</option>
							<option>WEDNESDAY</option>
							<option>THURSDAY</option>
							<option>FRIDAY</option>
							<option>SATURDAY</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Payment end date</div>
					<div class="param_value">
						<input name="endingDate" id="endingDate" value="<?php echo date("Y-m-d", time() + 864000);?>" />
					</div>
				</div>				
				<div class="params">
					<div class="param_name">Maximum amount per payment</div>
					<div class="param_value">
						<input name="maxAmountPerPayment" id="maxAmountPerPayment" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Maximum number of payments</div>
					<div class="param_value">
						<input name="maxNumberOfPayments" id="maxNumberOfPayments" value="10" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Maximum number of payments per period</div>
					<div class="param_value">
						<input name="maxNumberOfPaymentsPerPeriod" id="maxNumberOfPaymentsPerPeriod" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Maximum total amount of all payments</div>
					<div class="param_value">
						<input name="maxTotalAmountOfAllPayments" id="maxTotalAmountOfAllPayments" value="50.0" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Payment period</div>
					<div class="param_value">
						<select name="paymentPeriod" id="paymentPeriod">
							<option>- Select -</option>
							<option>NO_PERIOD_SPECIFIED</option>
							<option>DAILY</option>
							<option>WEEKLY</option>
							<option>BIWEEKLY</option>
							<option>SEMIMONTHLY</option>
							<option>MONTHLY</option>
							<option>ANNUALLY</option>
						</select>
					</div>
				</div>
				<div class="params">
					<div class="param_name">Return URL *</div>
					<div class="param_value">
						<input name="returnUrl" id="returnUrl" value="<?php echo $returnUrl;?>" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Memo</div>
					<div class="param_value">
						<input name="memo" id="memo" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">IPN Notification URL</div>
					<div class="param_value">
						<input name="ipnNotificationUrl" id="ipnNotificationUrl" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Sender email</div>
					<div class="param_value">
						<input name="senderEmail" id="senderEmail" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Starting date *</div>
					<div class="param_value">
						<input name="startingDate" id="startingDate" value="<?php echo date("Y-m-d");?>" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Is PIN type required</div>
					<div class="param_value">
						<select name="pinType" id="pinType">
							<option>- Select -</option>
							<option>NOT_REQUIRED</option>
							<option>REQUIRED</option>
						</select>
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
					<div class="param_name">Display maximum total amount</div>
					<div class="param_value">
						<input name="displayMaxTotalAmount" id="displayMaxTotalAmount" value="" />
					</div>
				</div>				
				<div class="submit">
					<input type="submit" value="Submit" />
				</div>
			</form>
		</div>
	</div>
</body>
</html>
