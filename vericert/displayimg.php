<?php


   $con =mysql_connect("localhost", "root" , "");
   $sdb= mysql_select_db("my_database",$con);
   $sql = "SELECT * FROM `imgt`";
   $mq = mysql_query($sql) or die ("not working query");
   $row = mysql_fetch_array($mq) or die("line 44 not working");
   $s=$row['myimage'];
   echo $row['myimage'];

   echo '<img src="'.$s.'" alt="HTML5 Icon" style="width:128px;height:128px">';
   ?>