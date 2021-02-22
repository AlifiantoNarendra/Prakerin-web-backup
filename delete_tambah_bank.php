<?php

include('connection_tambah_bank.php');

$id     = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM tb_bank WHERE id='$id' ");

header('Location:index_tambah_bank.php');

?>