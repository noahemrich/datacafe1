<?php

define('DB_NAME', 'heroku_10e45fe45066204');
define('DB_USER', 'b1e4408afef9b2');
define('DB_PASSWORD', '2651c64d');
define('DB_HOST', 'us-cdbr-iron-east-02.cleardb.net:3306');

$link = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}


$db_selected = $mysqli->select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$value = $_POST['email'];
$value2 = $_POST['text'];

$sql = "INSERT INTO demo (email, text) VALUES ('$value', '$value2')";

if (!$mysqli->query($sql)) {
	die('Error: ' . $mysqli->connect_errno());
}

mysqli_close($sql_link);
?>
