<?php 
	$db_link = mysqli_connect("mysql.hostinger.fr", "u160369851_qanda", "1234567890", "u160369851_qanda") or die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());;

	$sql = "select * from qanda";
	$results = mysqli_query($db_link, $sql) or die('Error in Selecting : ' . mysqli_error($db_link));

	$questionsArray = array();
	while($row = mysqli_fetch_assoc($results)) {
		$questionsArray[] = $row;
	}

	echo json_encode($questionsArray);
?>