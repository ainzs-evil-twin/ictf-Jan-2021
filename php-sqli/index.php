<?php

require_once "config.php";

$pass = $_GET['param'];

if(!isset($pass)) {
	highlight_file(__FILE__);
	die();
}

$sql = "SELECT username, password FROM users WHERE password = '".md5($pass, true)."'";

$result = mysqli_query($link, $sql);

$info = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($link);

var_dump($info);

?>
