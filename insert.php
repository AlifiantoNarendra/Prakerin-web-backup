<?php

include('connection.php');

$nama   = $_POST['nama'];
$url    = $_POST['url'];
$logo = $_FILES['logo']['name'];
$tmp = $_FILES['logo']['tmp_name'];
$path = "../foto/" . $logo;
$status = $_POST['status'];
$result['pesan'] = "";

if ($nama == "") {
    $result['pesan'] = "nama bank harus di isi";
} elseif ($url == "") {
    $result['pesan'] = "url bank harus di isi";
} elseif ($logo == "") {
    $result['pesan'] = "logo bank harus di isi";
} elseif ($status == "") {
    $result['pesan'] = "status bank harus di isi";
} else {
    if (move_uploaded_file($tmp, $path)) {
        $sql = $connect->query("INSERT INTO tb_bank (nama,url,logo,status) VALUES ('$nama','$url','$logo','$status')");
        if ($sql) {
            $result['pesan'] = "Data berhasil di Tambahkan";
            echo '<script>
            setTimeout(function() {
                $("#modalUser .close").click();
            }, 2000);           
            </script>';
        } else {
            $result['pesan'] = "Data gagal di tambahkan";
            echo '<script>
            setTimeout(function() {
                $("#modalUser .close").click();
            }, 2000);           
            </script>';
        }
    }
}

echo json_encode($result);
