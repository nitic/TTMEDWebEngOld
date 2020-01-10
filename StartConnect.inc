<?php

$ServerName = "localhost";
$DatabaseName = "";

$UserName = "root";
$Password = "";

$Conn = mysql_connect($ServerName,$UserName,$Password) or die("Can't connect to Server");
mysql_select_db($DatabaseName,$Conn) or die("Cann't connect to Database");
mysql_query("SET NAMES UTF8"); 

?>