<?php 
    $data = json_decode(file_get_contents("php://input"));

    $db_link = mysqli_connect("mysql.hostinger.fr", "u160369851_qanda", "1234567890");
    if (!$db_link) {
        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
    } else { print 'connected : '. mysqli_get_host_info($db_link). "<br/>"; }

    $n = mysqli_real_escape_string($db_link, $data->name);
    $q = mysqli_real_escape_string($db_link, $data->question);

    mysqli_select_db($db_link, "u160369851_qanda");

    $sql = "INSERT INTO `u160369851_qanda`.`qanda` (`name`, `timestamp`, `question`) VALUES('".$n."', CURRENT_TIMESTAMP, '".$q."')";
    $query = mysqli_query($db_link, $sql);
    if(!$query) {
        die("ERROR : " .mysqli_error($db_link));
    }
?>