<?php
require_once("StartConnect.inc");

if(isset($_GET["id"]))
{
	 $sql = 'Delete From english Where Id = '.$_GET["id"];
	$result = mysql_query($sql);
	 if (!$result) 
	      {
			echo "Could not successfully run query ($sql) from DB: " . mysql_error();
		  } 
	 else{
			echo '<meta http-equiv="Refresh" content="0;URL=admin_edit.php">';
		  } 
} 
?>
