<?php
$servername = "127.0.0.1";
$username ="roshan";
$password = "hibuddy";

// Create connection
$con = mysql_connect($servername, $username, $password);
mysql_select_db('pagination');
// Check connection
if (!$con) {
    die("Connection failed: " . mysql_error());
}
else
{
	//echo"Connection created";
}

?>
