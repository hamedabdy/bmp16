<?php
	$data = json_decode(file_get_contents("php://input"));

	$db_link = mysqli_connect("mysql.hostinger.fr", "u160369851_qanda", "1234567890");
    if (!$db_link) {
        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else { print "\nconnected : ". mysqli_get_host_info($db_link). "<br/>"; }

    $i = mysqli_real_escape_string($db_link, $data->id);
    $a = mysqli_real_escape_string($db_link, $data->answer);

    mysqli_select_db($db_link, "u160369851_qanda");

    $sql = "UPDATE `u160369851_qanda`.`qanda` SET `answer`='".$a."' WHERE id=".$i.";";
    $query = mysqli_query($db_link, $sql);
    if(!$query) {
        die("\n\nERROR : " .mysqli_error($db_link));
    }

	
?>