<?php
	sleep(1);
	$temp = $_POST['str1']." ".$_POST['str2'];
	$temp = explode(' ',$temp);
	$temp = array_unique($temp);
	echo json_encode($temp);
?>