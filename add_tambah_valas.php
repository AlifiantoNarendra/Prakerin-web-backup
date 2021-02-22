<?php

include('connection_tambah_valas.php');

$query      = mysqli_query($connect, "SELECT nama FROM tb_bank");
$results    = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .container form{
            border-radius: 20px;
            padding: 50px;
            margin: 150px auto;
            box-shadow: 3px 3px 5px rgba(0,0,0,0.5);
        }
    </style>

  </head>
  <body>


    <div class="container" style="width: 45%;">
        <form action="insert_tambah_valas.php" method="post" class="bg-light"> 
            <div class="row justify-content-start mb-3">
                <div class="col-md-3 col-xs-12"><label>Nama Bank</label></div>
                <div class="col-md-3 col-xs-12">
                    <select name="nama_bank" style="width: 180px;" required>
                        <?php foreach ($results as $result) : ?>
                            <option value="<?php echo $result ['nama']?>">                      
                                <?php echo $result['nama'] ?>                        
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="row justify-content-start mb-3">
                <div class="col-md-3 col xs-12"><label>Nilai Beli</label></div>
                <div class="col-md-3 col xs-12"><input type="text" name="beli" placeholder="Rp..." required></div>
            </div>
            <div class="row justify-content-start mb-3">
                <div class="col-md-3 col xs-12"><label>Nilai Jual</label></div>
                <div class="col-md-3 col xs-12"><input type="text" name="jual" placeholder="Rp..." required></div>
            </div>
            <div class="row justify-content-start mb-4">
                <div class="col-md-3 col xs-12"><label>Mata Uang</label></div>
                <div class="col-md-3 col xs-12">
                    <select name="mata_uang" style="width: 180px;" required>
                        <option value="usd">USD</option>
                        <option value="sgd">SGD</option>
                        <option value="eur">EUR</option>
                        <option value="idr">IDR</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12"><button type="submit" class="btn btn-secondary pl-5 pr-5">Tambah</button></div>
            </div>
        </form>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

