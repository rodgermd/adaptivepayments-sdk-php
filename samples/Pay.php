<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>PayPal Platform SDK - Pay</title>
<link href="Common/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="Common/ToolTip.js"></script>
<script type="text/javascript" src="Common/sdk_functions.js"></script>
<script type="text/javascript">
function PrePopulate()
{
	document.getElementById('email').value = "platfo_1255077030_biz@gmail.com";
	document.getElementById('preapprovalkey').value = "";
	document.getElementById('receiveremail_0').value = "platfo_1255612361_per@gmail.com";
	document.getElementById('amount_0').value = "1.00";

}
</script>
</head>

<body>

<div id="jive-wrapper">
           	

<?php 
require_once 'Common/menu.html';?>
<div id="request_form">
				<center><h3><b>Adaptive Payments - Pay</b></h3></center>
				<p class="header3"><a onclick="PrePopulate()">Populate default values</a></p>

<form name="Form1" id="Form1" action="PayReceipt.php" method="post">
	<table align="center" width="95%">
	   <tr>
	      <table align="center" width="95%">
			<tr>
				<td class="thinfield label" colspan="4" >
					<p align="left">
					<b>Sender Details</b>
					</p>
				</td>
			</tr>
			<tr>
				<td class="thinfield"><a href=""
					style="text-decoration: none"
					onmouseover="ShowContent('senderEmail'); return true;"
					onmouseout="HideContent('senderEmail'); return true;"
					href="javascript:ShowContent('senderEmail')">Sender's Email</a>
				<div id="senderEmail"
					class="tooltip">email
				address of sender</div>
				</td>
				<td align="left">
				  <input type="text" id="email" size="50"	maxlength="80" name="email" value="">
				</td>
				<td align="left">
					(optional for GuestPayment)
				</td>
			</tr>

			<tr>
				<td class="thinfield"><a href=""
					style="text-decoration: none"
					onmouseover="ShowContent('currencyCode'); return true;"
					onmouseout="HideContent('currencyCode'); return true;"
					href="javascript:ShowContent('currencyCode')">Currency Code</a>
				<div id="currencyCode"
					class="tooltip">
				The code for the currency in which the payment is made<br /> you can specify only one currency, regardless of the number of receivers</div>
				</td>
	
				<td align="left"><select name="currencyCode" id="currencyCode">
					<option value="USD">USD</option>
					<option value="GBP">GBP</option>
					<option value="EUR">EUR</option>
					<option value="JPY">JPY</option>
					<option value="CAD">CAD</option>
					<option value="AUD">AUD</option>
				</select></td>
	
			</tr>
			<tr>
				<td class="thinfield"><a href=""
					style="text-decoration: none"
					onmouseover="ShowContent('feespayer'); return true;"
					onmouseout="HideContent('feespayer'); return true;"
					href="javascript:ShowContent('feespayer')">Fees Payer</a>
				<div id="feespayer"
					class="tooltip">The payer of PayPal fees.<br />
	                <b>Allowed values are:</b><br />
	                    >> <i>SENDER</i> Sender pays all fees (for personal, implicit simple/parallel payments)<br />
	                    >> <i>PRIMARYRECEIVER</i> Primary receiver pays all fees<br />
	                    >> <i>EACHRECEIVER</i> Each receiver pays their own fee (default and personal payments)<br />
	                    >> <i>SECONDARYONLY</i> Secondary receivers pay all fees (use only for chained payments with one secondary receiver)</div>
				</td>
				<td align="left"><select name="feesPayer" id="feesPayer">
					<option value="EACHRECEIVER">EACHRECEIVER</option>
					<option value="PRIMARYRECEIVER">PRIMARYRECEIVER</option>
					<option value="SENDER">SENDER</option>
					<option value="SECONDARYONLY">SECONDARYONLY</option>
				</select></td>
	
			</tr>
			<tr>
				<td class="thinfield"><a href=""
					style="text-decoration: none"
					onmouseover="ShowContent('actionType'); return true;"
					onmouseout="HideContent('actionType'); return true;"
					href="javascript:ShowContent('actionType')">Action Type</a>
				<div id="actionType"
					class="tooltip">
				  Whether the Pay request pays the receiver or whether the Pay request is set up to create a payment requesbut not fulfill the payment until the Execute Pay request is called.<br/>
	                          <b>Allowable values are:</b><br />
	                          >> <i>PAY</i> Use this option if you are not using the Pay request in combinations with the ExecutePayment request.<br />
	                          >> <i>CREATE</i> Use this option to set up the payment instructions with the SetPaymentOptions request and
	                         <br />then execute the payment at a later time with the ExecutePayment request.<br/>
	                          >> <i>PAY_PRIMARY </i> For chained payments only, specify this
								value to delay payments to the secondary receivers; only
								the payment to the primary receiver is processed
	            </div>
				</td>
				<td align="left"><select name="actionType" id="actionType">
					<option value="PAY" selected="true">PAY</option>
					<option value="CREATE">CREATE</option>
					<option value="PAY_PRIMARY">PAY_PRIMARY</option>
				</select></td>
			</tr>
			<tr>
				<td class="thinfield"><a href=""
					style="text-decoration: none"
					onmouseover="ShowContent('PreapprovalKey1'); return true;"
					onmouseout="HideContent('PreapprovalKey1'); return true;"
					href="javascript:ShowContent('PreapprovalKey1')">Preapproval Key</a>
				<div id="PreapprovalKey1"
					class="tooltip">
							The key associated with a preapproval for this payment. The
	                        preapproval key is required if this is a preapproved payment.<br /><br />
	                        <i>NOTE:</i>The Preapproval API is unavailable to API callers with Standard
	                        permission levels; for more information, refer to the section Adaptive
	                        Payments Permission Levels.</div>
				</td>
				<td align="left"><input id="preapprovalkey" type="text"
					maxLength="32" size="50" value="" name="preapprovalkey"></td>
	
			</tr>
	   </table>
	 </tr>  		
	
	<tr>
	  <table id="dataTable" align="center" width="95%">
	    <tr>
				<td class="thinfield label" colspan="2" >
					<p align="left"><br/><br/>
					<b>Receiver Details</b>
					</p>
				</td>
		</tr>
		<tr>
			<td><a href="" style="text-decoration: none"
				onmouseover="ShowContent('payee'); return true;"
				onmouseout="HideContent('payee'); return true;"
				href="javascript:ShowContent('payee')">Payee</a>
			<div id="payee"
				class="tooltip">payee</div>
			</td>
			
			<td ><a href="" style="text-decoration: none"
				onmouseover="ShowContent('receiverEmail'); return true;"
				onmouseout="HideContent('receiverEmail'); return true;"
				href="javascript:ShowContent('receiverEmail')">Receiver Email **</a>
			<div id="receiverEmail"
				class="tooltip"> Receiver's email address. This address can be unregistered with paypal.com.<br />If
                    so, a receiver cannot claim the payment until a PayPal account is linked to the
                    email address. <br />The PayRequest must pass either an email address or a mobile
                    phone number.</div>
			</td>

			<td ><a href="" style="text-decoration: none"
				onmouseover="ShowContent('amount'); return true;"
				onmouseout="HideContent('amount'); return true;"
				href="javascript:ShowContent('amount')">Amount **</a>
			<div id="amount"
				class="tooltip"> Amount to be paid to the receiver.</div>
			</td>
			
			<td ><a href="" style="text-decoration: none"
				onmouseover="ShowContent('primayReceiver'); return true;"
				onmouseout="HideContent('primayReceiver'); return true;"
				href="javascript:ShowContent('primayReceiver')">Primary
			Receiver **</a>
			<div id="primayReceiver"
				class="tooltip">
				      Whether this receiver is the primary receiver, which makes the
                        payment a chained payment.<br /> You can specify at most one primary receiver.
                        Omit this field for simple and parallel payments.
                        <b>Allowable values are:</b><br />
                        >><i>true </i> Primary receiver
                        >><i>false </i> Secondary receiver (default)
             </div>
			</td>
		</tr>
			
	   <tr>
			<td align="left">Receiver**</td>
			<td><input type="text" name="receiverEmail[]" id="receiveremail_0" size="50" value=""></td>
			<td><input class="smallfield" type="text" name="receiverAmount[]" id="amount_0" size="5" maxlength="7" value=""></td>
			<td ><select class="smallfield"  name="primaryReceiver[]" id="primaryReceiver">
				<option value="true">true</option>
				<option value="false" selected="true">false</option>
			</select></td>
		</tr>
      </table>
    </tr> 
     <tr><td><br/></td></tr>
    <tr> 
      <table  align="center">
         <tr>
           <td><a class="pop-button primary" onclick="addRow('dataTable')" id="Submit"><span>Add Receiver</span></a></td>
           <td><a class="pop-button primary" onclick="deleteRow('dataTable')" id="Submit"><span>Delete Receiver</span></a></td>
	     </tr>
	   </table>    
    </tr>
    
    <tr>
      <table align="center" width="95%">
		<tr>
			<td class="thinfield" ><a href=""
				style="text-decoration: none"
				onmouseover="ShowContent('memo'); return true;"
				onmouseout="HideContent('memo'); return true;"
				href="javascript:ShowContent('memo')">Memo</a>
			<div id="memo"
				class="tooltip"> 
				      A note associated with the payment (text, not HTML).<br /> The
                    maximum is 1,000 characters. You can use new line characters.
             </div>
			</td>
			<td><textarea rows="2" cols="30" name="memo">This is the memo</textarea>
		</tr>
		
		<tr align="right">
			<td colspan="4"><i>** Required field</i><br/><br/></td>
		</tr>
		<tr>
			<td><b>NOTE:</b></td>
			<td colspan="3">For parallel payment set both primary receiver
			to false, for chained payment any one must be true.<br/>
			If action type set to "Create" payment will be
			done in 3 steps - <i>Create</i>, <i>Set</i> and <i>Execute</i> pay.<br/>
			You can add maximum of 6 receivers.
			</td>
		</tr>
		<tr align="center">
			<td colspan="2"><br/>
                <a class="pop-button primary" onclick="document.Form1.submit();" id="Submit"><span>Submit</span></a>
			</td>
        </tr>
     </table>
     </tr> 
      
	</table>

<br/>
</form>
</div>
</body>
</html>
