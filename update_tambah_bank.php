<?php

include('connection_tambah_bank.php');

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$url    = $_POST['url'];
$logo   = $_POST['logo'];
$status = $_POST['status'];

$update = mysqli_query($connect, "UPDATE tb_bank SET nama='$nama', url='$url', logo='$logo', status='$status' WHERE id='$id' ");


header('Location:index_tambah_bank.php');

?>