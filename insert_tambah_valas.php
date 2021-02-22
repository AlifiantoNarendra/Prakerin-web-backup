<?php

include ('connection_tambah_valas.php');

$nama           = $_POST['nama_bank'];
$beli           = $_POST['beli'];
$jual           = $_POST['jual'];
$mata_uang      = $_POST['mata_uang'];

$insert = mysqli_query ($connect, "INSERT INTO tb_valas SET bank_id='$nama', beli='$beli', jual='$jual', mata_uang='$mata_uang' ");

if ($insert)
    header('Location:index_tambah_valas.php');
else
    echo 'Input Data Gagal...';

?>