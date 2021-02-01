<?php

include "flag.php";

$p1 = $_GET['param1'];
$p2 = $_GET['param2'];

if(!isset($p1) || !isset($p2)) {
	highlight_file(__FILE__);
	die();
}

if($p1 !== $p2 && $p1 == md5($p1) && $p2 == md5($p2)) {
	die($flag);
}

?>
