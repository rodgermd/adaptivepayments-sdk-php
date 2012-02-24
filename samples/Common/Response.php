<?php
?>
<table width ="700">
<tr>
<td>Request:</td>
</tr>
<tr>
<td><textarea style=" width:1000px;" rows="10" cols="500"><?php echo $service->getLastRequest()?></textarea>
</td>
</tr>
<tr>
<td>Response:</td>
</tr>
<tr>
<td><textarea style=" width:1000px;"><?php echo $service->getLastResponse()?></textarea>
</td>
</tr>
</table>
<br>
<a href="index.php">Home</a>