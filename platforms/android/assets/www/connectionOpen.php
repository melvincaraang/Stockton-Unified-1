<?php

$host='athena.ecs.csus.edu'; // Host name 
$username='susd_user'; // Mysql username 
$password='Buzz1234'; // Mysql password 
$db_name='susd'; // Database name 
$tbl_name="user_login"; // Table name 

// Connect to server and select databse.
$link = mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

?>