<?php
$path = '../lib';
set_include_path(get_include_path() . PATH_SEPARATOR . $path);
require_once('services/AdaptivePayments/AdaptivePaymentsService.php');
require_once('PPLoggingManager.php');

$logger = new PPLoggingManager('PreapprovalDetails');

?>
<html>
<head>
<title>PreapprovalDetails Sample API Page</title>
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
			<h3>Preapproval Details</h3>
			<div id="apidetails">A request to obtain information about an
				agreement between you and a sender for making payments on the
				sender’s behalf.</div>
		</div>
		<div id="request_form">
			<form method="POST" action="PreapprovalDetailsReceipt.php">
				<div class="params">
					<div class="param_name">Preapproval Key</div>
					<div class="param_value">
						<input type="text" name="preapprovalKey"
							value="PA-2T305990ET0354039" />
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