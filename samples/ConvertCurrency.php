<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Adaptive Payment - Convert Currency</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
<script type="text/javascript" src="Common/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="Common/jquery.qtip-1.0.0-rc3.min.js"></script>
<script type="text/javascript">
		toolTips = {			
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
<body>
	<div id="wrapper">
		<div id="header">
			<h3>Convert Currency</h3>
			<div id="apidetails">A request to convert one or more currencies into
				their estimated values in other currencies.</div>
		</div>
		<div id="request_form">
			<form id="Form1" name="Form1" method="post"
				action="ConvertCurrencyReceipt.php">
				<div class="input_header">Base Amount</div>
				<table class="params">
					<tr>
						<th>Code *</th>
						<th>Amount *</th>
					</tr>
					<tr>
						<td><input type="text" name="currencyCode[]" id="currencyCode_0" value="EUR" /></td>
						<td><input type="text" name="currencyAmount[]" id="currencyAmount_0" value="10.0" /></td>
					</tr>
				</table>
				<div class="input_header">Convert to currency</div>
				<table class="params">
					<tr>
						<th>Code *</th>						
					</tr>
					<tr>
						<td><input type="text" name="toCurrencyCode[]" id="toCurrencyCode_0" value="USD" /></td>						
					</tr>
				</table>				
				<div class="params">
					<div class="param_name">Country code (2 character ISO code for the country where the function is suppposed to happen)</div>
					<div class="param_value">
						<input name="countryCode" id="countryCode"
							value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Conversion type</div>
					<div class="param_value">
						<select name="conversionType" id="conversionType">
							<option>- Select -</option>
							<option>SENDER_SIDE</option>
							<option>RECEIVER_SIDE</option>
							<option>BALANCE_TRANSFER</option>
						</select>
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
