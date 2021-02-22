<?php

include ('connection_tambah_valas.php');
$query      = mysqli_query($connect, "SELECT * FROM tb_valas");
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


  </head>
  <body>
    
    
    
    <div class="container" style="text-transform: uppercase;">
        <h1 class="text-center mb-3 mt-4" style="font-weight: 700;">data valas</h1>
            <a href="add_tambah_valas.php" style="font-weight: 500;font-size:1.1em">tambah data</a>   
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th class="col-xs-12 text-center" style="width: 50px;">no</th>
                                <th class="col-xs-12 text-center" style="width:200px;">nama bank</th>
                                <th class="col-xs-12 text-center" style="width:200px;">nilai beli</th>
                                <th class="col-xs-12 text-center" style="width:200px;">nilai jual</th>
                                <th class="col-xs-12 text-center" style="width:200px;">last update</th>
                                <th class="col-xs-12 text-center" style="width:200px;">more options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $result) : ?>
                                <tr class="text-center" style="font-weight: 500;">
                                    <td class="nomer"><?php echo $result['id']?></td>
                                    <td><?php echo $result['bank_id']?></td>
                                    <td class="url"><?php echo $result['beli']?></td>
                                    <td><?php echo $result['jual']?></td>
                                    <td><?php echo $result['date_updated']?></td>
                                    <td>
                                        <a href="edit_tambah_valas.php?id=<?php echo $result['id']?>">Edit |</a>
                                        <a href="delete_tambah_valas.php?id=<?php echo $result['id']?>"> hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>               
                        </tbody>   
                    </table>   
                </div>
        </div>
                    









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>