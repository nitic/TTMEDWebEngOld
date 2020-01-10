<?php
require_once("StartConnect.inc");
/*
$username = "kengi"; 
$password = "45012"; 

 
function authenticate() { 
Header( "WWW-authenticate: basic realm='Protected'"); 
Header( "HTTP/1.0 401 Unauthorized"); 
echo "You must enter a valid login ID and password! "; 
exit; 

} 

 
function CheckPwd($user,$pass) { 
global $username,$password; 
return ($user != $username || $pass != $password) ? false : true; 
} 

 
if(!isset($PHP_AUTH_USER)) { 
authenticate(); 
} 

elseif(!CheckPwd($PHP_AUTH_USER,$PHP_AUTH_PW)) { 
authenticate(); 

} 
*/

if(isset($_GET["eid"]))
{
	 $sql = 'Select Id, Title, Detail From english Where Id = '.$_GET["eid"];
     $table = mysql_query($sql);
	   while($row = mysql_fetch_array($table))
	   { 
			$id = $row["Id"];
			$title = $row["Title"];
			$detail = $row["Detail"];
	   }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="ckeditor/config.js"></script>
</head>

<body>
<div style="width:600px;height:800px; float:left">
<?php
     $sql = "Select * From english order by Id desc";
     $table = mysql_query($sql);
   
       print '<table border="1" cellpadding="1" cellspacing="0">'; 
	   print '<tr><td "width=500px" align="center">Title</td><td>Action</td></tr>';
	   while($row = mysql_fetch_array($table))
	   { 
			print '<tr><td><a href="admin_edit.php?eid='.$row["Id"].'">'.$row["Title"].'</a></td><td><a href="admin_deletedata.php?id='.$row["Id"].'">Delete</a></td></tr>';
	   }
		print '</table>';
?>  

</div>
    <form action="admin_updatedata.php" method="post" enctype="multipart/form-data">
    <table>
    <tr>
        <td>ชื่อเรื่อง</td>
        <td><input name="title" type="text" id="title" size="80" value="<?=$title?>" /></td>
    </tr>
    <tr>
        <td>รููปภาพประกอบ</td>
        <td><input id="pictue" name="pictue" type="file" /> (w 150 X h 120)</td>
    </tr>
    <tr >
        <td colspan="2">
        <textarea class="ckeditor" id="editor1" name="editor1" cols="90" rows="20">
                 <?=$detail?>
        </textarea>
        <input name="id" type="hidden" id="id" value="<?=$id?>" />
		<button type="submit" class="btn"><span><span>Update</span></span></button>
        </td>
      </tr>
    </table>
       
	</form>

</body>
</html>