<!-- body start -->
<div id="body">
		<!-- top shadow start -->
		<div id="topShadow"></div>
		<!-- top shadow end -->
        
<?php
     if($_GET["page"] != ""){
		  $sql = 'Select Title, Detail From english Where Id = '.$_GET["page"];
		  $table = mysql_query($sql);
		   while($row = mysql_fetch_array($table))
	  	   { 
				print '<div  id="bodyPannel"><h1>'.$row["Title"].'</h1><br />';
				print html_entity_decode($row["Detail"]);
				print "</div>";
	   	   }
	   
	 }
	 else
	 {
 ?>       
        
		<!-- body pannel start -->
		<div id="bodyPannel">
            <br class="spacer" />
				<div id="futurePlans">
					<h2 class="text1">Events</h2>
<?php


$sql = "Select * From english order by Id desc LIMIT 0 , 5";
$table = mysql_query($sql);
   
       print '<table width="100%" border="0">'; 
	   
	   while($row = mysql_fetch_array($table))
	   { 
	        print '<tr style="height:150px">';
			print '<td valign="top"><img src="uploads/'.$row["Image"].'" align="left" border="1" width="150" height="120"  /></td>';
			print '<td valign="top" style="padding:5px 0 0 10px"><h3>'.$row["Title"].'</h3>
			       <br /><div align="justify">'.substr(str_replace("&nbsp;","",strip_tags(html_entity_decode($row["Detail"]))), 0, 300).'...
				   <a href="index.php?page='.$row["Id"].'"><i>Read more</i></a></div>
				   </td></tr>';
	   }
		print '</table>';


?>                     
		</div>
</div>
 <!-- body pannel end -->
<?php
	 }
?> 
 
<!-- top shadow start -->		
<div id="bottomShadow"></div><br class="spacer" />
<!-- bottom shadow end -->
</div>
<!-- body end -->