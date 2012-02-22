<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Adaptive Payment - Set Payment Options</title>
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
			<h3>Set Payment Options</h3>
			<div id="apidetails">You us e th e SetPaymentOptions API operation to
				specify settings for a payment of the actionType CREATE. This
				actionType is specified in the PayRequest message.</div>
		</div>
		<div id="request_form">
			<form id="Form1" name="Form1" method="post"
				action="SetPaymentOptionsReceipt.php">
				<div class="params">
					<div class="param_name">Pay key *</div>
					<div class="param_value">
						<input name="payKey" id="payKey" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Institution Id</div>
					<div class="param_value">
						<input name="institutionId" id="institutionId" value="" />
					</div>
				</div>
				<div class="section_header">Display options</div>
				<div class="params">
					<div class="param_name">Email header image Url</div>
					<div class="param_value">
						<input name="emailHeaderImageUrl" id="emailHeaderImageUrl"
							value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Email marketing image Url</div>
					<div class="param_value">
						<input name="emailMarketingImageUrl" id="emailMarketingImageUrl"
							value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Header image Url</div>
					<div class="param_value">
						<input name="headerImageUrl" id="headerImageUrl" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Business name</div>
					<div class="param_value">
						<input name="businessName" id="businessName" value="" />
					</div>
				</div>
				<div class="section_header"></div>
				<div class="params">
					<div class="param_name">Shipping address Id</div>
					<div class="param_value">
						<input name="shippingAddressId" id="shippingAddressId" value="" />
					</div>
				</div>
				<div class="section_header">Sender options</div>
				<div class="params">
					<div class="param_name">Requires shipping address selection</div>
					<div class="param_value">
						<input name="requireShippingAddressSelection"
							id="requireShippingAddressSelection" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Referrer code</div>
					<div class="param_value">
						<input name="referrerCode" id="referrerCode" value="" />
					</div>
				</div>
				<div class="section_header">Receiver options</div>
				<div class="params">
					<div class="param_name">Description</div>
					<div class="param_value">
						<input name="description" id="description" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Custom Id</div>
					<div class="param_value">
						<input name="customId" id="customId" value="" />
					</div>
				</div>
				<div class="section_header">Invoice data</div>
				<div class="input_header">Invoice item</div>
				<table id="invoiceItemTable">
					<tr>
						<th></th>
						<th>Name</th>
						<th>Identifier</th>
						<th>Price</th>
						<th>Item price</th>
						<th>Item count</th>
					</tr>
					<tr id="invoiceItemTable_0">
						<td align="left"><input type="checkbox" name="invoiceItem[]" id="invoiceItem_0" disabled="disabled" /></td>
						<td><input type="text" name="name[]" id="name_0" value=""/></td>
						<td><input type="text" name="identifier[]" id="identifier_0" value=""/></td>
						<td><input type="text" name="price[]" id="price_0" value=""/></td>						
						<td><input type="text" name="itemPrice[]" id="itemPrice_0" value=""/></td>
						<td><input type="text" name="itemCount[]" id="itemCount_0" value=""/></td>
					</tr>
				</table>
				<table align="center">
					<tr>
						<td><a onclick="cloneRow('invoiceItemTable', 10)" id="Submit"><span>Add
									Item </span> </a></td>
						<td><a onclick="deleteRow('invoiceItemTable')" id="Submit"><span> Delete
									Item</span> </a></td>
					</tr>
				</table>				
				<div class="params">
					<div class="param_name">Total tax</div>
					<div class="param_value">
						<input name="totalTax" id="totalTax" value="" />
					</div>
				</div>
				<div class="params">
					<div class="param_name">Total shipping</div>
					<div class="param_value">
						<input name="totalShipping" id="totalShipping" value="" />
					</div>
				</div>
				<div class="input_header">Receiver identifier</div>
				<table class="params">
					<tr>
						<th>Email</th>
						<th>Phone</th>
					</tr>
					<tr>
						<td><input name="emailIdentifier" id="emailIdentifier" value="" /></td>
						<td> 
							<input type="text" name="phoneCountry" id="phoneCountry" value="" class="xsmallfield" /> - 
							<input type="text" name="phoneNumber" id="phoneNumbe0" value="" class="xsmallfield" />
							<input type="text" name="phoneExtn" id="phoneExtn" value="" class="xsmallfield" />
						</td>						
					</tr>
				</table>
				<div class="params">
					<div class="param_name">Referrer code</div>
					<div class="param_value">
						<input name="referrerCode" id="referrerCode" value="" />
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
