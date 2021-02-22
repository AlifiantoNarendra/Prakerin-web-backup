<?php

include('connection_tambah_valas.php');

$id         = $_POST['id'];
$nama       = $_POST['nama_bank'];
$beli       = $_POST['beli'];
$jual       = $_POST['jual'];
$mata_uang  = $_POST['mata_uang'];

$update = mysqli_query($connect, "UPDATE tb_valas SET bank_id='$nama', beli='$beli', jual='$jual', mata_uang='$mata_uang' WHERE id='$id' ");

if ($update)
    header('Location:index_tambah_valas.php');
else
    echo 'Update Gagal...';

?>