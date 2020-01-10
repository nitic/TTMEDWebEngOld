<?php
require_once("StartConnect.inc");


if($_FILES["pictue"]["name"] != "")
{
	if(copy($_FILES["pictue"]["tmp_name"],"uploads/".$_FILES["pictue"]["name"]))
		{
			$PictureName = $_FILES["pictue"]["name"];
		}
}
else
{
     $PictureName = "nopic.png";
}


$sql = "INSERT INTO `english` (`Id`, `Title`, `Detail`, `Image`, `Date`) VALUES (NULL, '".$_POST["title"]."','".htmlspecialchars($editor1)."', '".$PictureName."', '".date("Y-m-d")."')";

$result = mysql_query($sql);

  
 if (!$result) {
			echo "Could not successfully run query ($sql) from DB: " . mysql_error();
	  } 
 else{
	        echo "<h3>บันทึกข้อมูลเรียบร้อยแล้ว</h3>";
	        echo '<meta http-equiv="Refresh" content="3;URL=admin.php">';
	 }  
?>
