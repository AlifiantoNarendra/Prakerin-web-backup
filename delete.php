<?php

include('connection.php');

$id     = $_POST['id'];
$result['pesan'] = "";

$queryResult    = $connect->query("DELETE FROM tb_bank WHERE id='$id' ");

if ($queryResult) {
    $result['pesan']    = 'data berhasil dihapus';
}
