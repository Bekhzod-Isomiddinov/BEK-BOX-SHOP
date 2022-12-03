<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "portfolio";

$con = new mysqli($servername, $username, $password, $db_name);
//$con = mysql_connect('localhost', 'root', '');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
