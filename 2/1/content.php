<?php
	sleep(1);
	$temp = $_POST['str'];
	$temp = strtolower($temp);
	$temp = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/","",$temp);
	$temp = explode(" ", $temp);
	echo json_encode($temp);
?>