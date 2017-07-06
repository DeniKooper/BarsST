<?php
	sleep(1);
	$temp = $_POST['str'];
	$temp = preg_replace ("/[^0-9]/","",$temp);
	$temp = explode(" ", $temp);
	echo json_encode($temp);
?>