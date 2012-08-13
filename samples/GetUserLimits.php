<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Adaptive Payment - Get User Limits</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/sdk_functions.js"></script>
<script type="text/javascript" src="Common/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="Common/jquery.qtip-1.0.0-rc3.min.js"></script>
<script type="text/javascript">
		toolTips = {
			phoneCountry : "Telephone country code",
			phoneNumber : "Telephone number",
			phoneExtn : "Telephone extension"				
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
			<h3>Get User Limits</h3>
			<div id="apidetails">The request to get the remaining limits for a
				user.</div>
		</div>
		<div id="request_form">
			<form id="Form1" name="Form1" method="post"
				action="GetUserLimitsReceipt.php">
				<div class="input_header">Account identifier (Provide email or phone)</div>
				<table>
					<tr>
						<th>Email</th>
						<th>Phone</th>
					</tr>
					<tr>
						<td>
							<input name="email" id="email" value="" />
						</td>
						<td>
							<input name="phoneCountry" id="phoneCountry" value=""  class="xsmallfield"/> -
							<input name="phoneNumber" id="phoneNumber" value="" class="xsmallfield" /> 
							<input name="phoneExtension" id="phoneExtension" value="" class="xsmallfield"/>
						</td>						
					</tr>
				</table>
				<div class="params">
					<div class="param_name">Country *</div>
					<div class="param_value">
						<input name="country" id="country" value="US" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Currency Code *</div>
					<div class="param_value">
						<input name="currencyCode" id="currencyCode" value="USD" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Preapproval key *</div>
					<div class="param_value">
						<input name="Preapprovalkey" id="Preapprovalkey" value="" />
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
