<?php
/**
 * APIError.php
 * Displays error parameters.
 */
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePayments.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>PayPal API Error</title>
<link href="Common/sdk.css" rel="stylesheet" type="text/css" />
</head>
<body>	
	<div id="wrapper">
<?php
	require_once 'Common/menu.html';?>
		<div id="response_form">
			<h3><b>The PayPal API has returned an error!</b></h3>
			<b> PayPal API Error</b><br/><br/>	
		    <table width="400">
		    	<tr>
		    		<td>
<?php
    var_dump($response);
?>
					</td>
				</tr>
		    </table>
		</div>
	</div>
</body>
</html>