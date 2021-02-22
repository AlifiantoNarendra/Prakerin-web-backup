<?php

    include('connection.php');

    $queryResult    = $connect->query("SELECT * FROM tb_bank");
    $result         = array();

    while ($fetchData=$queryResult->fetch_assoc()) {
        $result[]=$fetchData;
    }

    echo json_encode($result);

?>