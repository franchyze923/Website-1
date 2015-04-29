<?php

$host="localhost";
$username="franpoli_bucky";
$password="248919";
$db_name="franpoli_webform";
//all  this  to connect to DB, username is username of mysql, password is too 

//connect to database

$link = mysql_connect("$host","$username","$password") or die("cant connect");

mysql_select_db("$db_name") or die ("cant select db");

//echo "connected successfully";

$value= $_POST["name"]; // name of item 1 in html form
$value2= $_POST["email"];//name of item 2in html form
$value3= $_POST["message"];//name of item 2in html form

$sql = "INSERT INTO userinfo (Name,Email,Message) VALUES ('$value','$value2','$value3')"; //the inputs after demo are the fields in the database


if (!mysql_query ($sql)){
	die('error:' . mysql_error());
}

mysql_close();

echo "Thanks for submitting!";
?>
<br />
<br/>
	<p"><a href="index.html">Click here to go to the Homepage</a></p>