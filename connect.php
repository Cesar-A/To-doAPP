<?php
$mysqli =new mysqli('localhost', 'root', 'root', 'taasks');
if($mysqli->connect_error){
	die('Connect Error ('. $mysqli->connect_erno .')'
		.$mysqli->connect_error);
}
else{
	echo "Connection made";
}
$mysqli->close();
?>