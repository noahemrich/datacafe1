<?php

define('DB_NAME', 'feelings');
define('DB_USER', 'vsoon1');
define('DB_PASSWORD', 'letsmesh#9');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$value = $_POST['email'];
$value2 = $_POST['text'];

$sql = "INSERT INTO demo (email, text) VALUES ('$value', '$value2')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

mysql_close();
?>
