<?php
// Create connection

//Selects the database
/*
*/
//Lets search the databse for the user name and password
//Choose some sort of password encryption, I choose sha256
//Password function (Not In all versions of MySQL).
session_start();
$_SESSION['username'] = $row['username'];
$_SESSION['logged'] = TRUE;
echo 'Welcome, '.$_SESSION['username'];

 


?>