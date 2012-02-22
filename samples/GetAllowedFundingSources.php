<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Adaptive Payment - Get Allowed Funding Sources</title>
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
			<h3>Get Allowed Funding Sources</h3>
			<div id="apidetails">A request to get the allowed funding sources
				available for a preapproval.</div>
		</div>
		<div id="request_form">
			<form id="Form1" name="Form1" method="post"
				action="GetAllowedFundingSourcesReceipt.php">
				<div class="params">
					<div class="param_name"></div>
					<div class="param_value">
						<input name="key" id="key" value="PA-5F2292099Y734005C" />
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