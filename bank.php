<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">


    <style>
        body {
            text-transform: uppercase;
            height: 100%;
            width: 100%;
        }

        #logo {
            margin-top: -50px;
        }

        #bank:hover,
        #valas:hover {
            background-color: gray;
            display: block;
        }

        #bank {
            background-color: gray;
            display: block;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>

    <title>Hello, world!</title>
</head>

<body onload="show_loading();">

    <div class="loading overlay">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <table class="table tabel-responsive mb-0">
        <tbody>
            <tr>
                <td style="width: 20%;height: 150px; padding:35px;" class="bg-dark text-white">
                    <img src="../img/world.jpg" width="100px" class="rounded-circle">
                    <h5 class="text-right mr-3" id="logo">logo</h5>
                </td>
                <td rowspan="3" id="tabel">

                </td>
            </tr>
            <tr class="bg-dark text-white">
                <td class="text-center" style="width: 20%; height: 485px;">
                    <h4 class="pt-4 pb-4">data router</h4>
                    <hr class="bg-secondary">
                    <h5><a href="bank.html" class="text-white" id="bank">bank</a></h5>
                    <hr class="bg-secondary">
                    <h5><a href="valas.html" class="text-white" id="valas">valas</a></h5>
                    <hr class="bg-secondary">
                </td>
            </tr>
            <tr class="bg-dark text-white">
                <td style="width: 20%;height: 20px;">
                    <h5 class="text-center"><a href="#" class="text-white">logout<i class="fas fa-sign-out-alt ml-2"></i></a></h5>
                </td>
            </tr>
        </tbody>
    </table>




    <!-- Optional JavaScript -->
    <script src="../js/script.js"></script>
    <script src="../js/jquery.js"></script>
    <script type="text/javascript">
        $("#tabel").load('index.php');
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>