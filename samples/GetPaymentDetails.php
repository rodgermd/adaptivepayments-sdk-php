<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<HTML>
	<HEAD>
		<title>PayPal PHP SDK -Preapproval Details</title>
		 <link href="Common/style.css" rel="stylesheet" type="text/css" />
		 <script type="text/javascript" src="Common/tooltip.js">
    </script>
	</HEAD>
<script type="text/javascript">
function prefill()
{
	document.getElementById('payKey').value = "AP-5YL76254522892258";

}

</script>

		<body >
       <br/>
        <div id="jive-wrapper">
            

		<?php 
require_once 'Common/menu.html';?>
<div id="request_form">
<center>					
<h3><b>Adaptive Payments - PaymentDetails</b></h3>
					<p class="header3"><a onclick="prefill()">Populate default values</a></p>
		
				<br/>

		<form id="Form1" name="Form1" method="post" action="PaymentDetails.php?cs=s">
 <table align="center">
		<tr>

			<td class="smallfield"><a style="text-decoration: none"
				onmouseover="ShowContent('payKey1'); return true;"
				onmouseout="HideContent('payKey1'); return true;"
				href="javascript:ShowContent('payKey1')">Pay Key:</a>
			<div id="payKey1"
				style="display: none; position: absolute; border-style: solid; background-color: white; padding: 20px;">The
			 The pay key that identifies the payment for which you want to
                    retrieve details. <br />This is the pay key returned in the PayResponse message</div>
			</td>
			<td align="left"><input type="text" name="payKey" id="payKey" size="55" value=""></td>
		</tr>

		     <tr></tr>
		     <tr></tr>
           <tr align="center">
			<td colspan="2"><br/>
                <a class="pop-button primary" onclick="document.Form1.submit();" id="Submit"><span>Submit</span></a>
			</td>
        </tr>
<tr align="right">
			<td colspan="4"><i>** Required</i><br/><br/></td>
		</tr>
	</table>
	</form>
	</center>
</div>
	</div>
	
</body>

</HTML>

