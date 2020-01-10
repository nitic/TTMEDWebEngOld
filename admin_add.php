<?php
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
    <form action="admin_posteddata.php" method="post" enctype="multipart/form-data">
    <table>
    <tr>
        <td>ชื่อเรื่อง</td>
        <td><input name="title" type="text" id="title" size="80" /></td>
    </tr>
    <tr>
        <td>รููปภาพประกอบ</td>
        <td><input id="pictue" name="pictue" type="file" /> (w 150 X h 120)</td>
    </tr>
    <tr >
        <td colspan="2">
        <textarea class="ckeditor" id="editor1" name="editor1" cols="90" rows="20">
        </textarea>
		<button type="submit" class="btn"><span><span>Save</span></span></button>
        </td>
      </tr>
    </table>

	</form>

</body>
</html>