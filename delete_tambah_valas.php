<?php

include('connection_tambah_valas.php');

$id     = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM tb_valas WHERE id='$id' ");

header('Location:index_tambah_valas.php');

?>