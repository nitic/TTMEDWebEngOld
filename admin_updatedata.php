<?php
require_once("StartConnect.inc");


if($_FILES["pictue"]["name"] != "")
{
	if(copy($_FILES["pictue"]["tmp_name"],"uploads/".$_FILES["pictue"]["name"]))
		{
			$PictureName = $_FILES["pictue"]["name"];
		}
		
	$sql = "UPDATE `english` SET `Title` = '".$_POST["title"]."', `Detail` = '".htmlspecialchars($editor1)."', `Image` = '".$PictureName."' WHERE `Id` = ".$_POST["id"];
}
else
{
    $sql = "UPDATE `english` SET `Title` = '".$_POST["title"]."', `Detail` = '".htmlspecialchars($editor1)."' WHERE `Id` = ".$_POST["id"];	
}


$result = mysql_query($sql);
 if (!$result) {
			echo "Could not successfully run query ($sql) from DB: " . mysql_error();
	  } 
 else{
	        echo '<meta http-equiv="Refresh" content="0;URL=admin_edit.php">';
	 }  
?>
