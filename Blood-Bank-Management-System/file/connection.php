<?php
$servername = "mysql";
$username = getenv("USERNAME");
$password = getenv("PASSWORD");
$dbname = getenv("DB_NAME");
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>