<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        body {
            text-transform: uppercase;
        }

        .url {
            text-transform: lowercase;
        }

        .container p {
            color: red;
            font-weight: 500;
        }
    </style>

    <script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>

    <div class="container">
        <h1 class="text-center mb-3 mt-4" style="font-weight: 700;">DATA BANK</h1>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover text-center mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center" style="width: 100px;">id bank</th>
                        <th class="text-center" style="width:200px;">nama bank</th>
                        <th class="text-center" style="width:200px;">url</th>
                        <th class="text-center" style="width:200px;">logo</th>
                        <th class="text-center" style="width:200px;">status</th>
                        <th class="text-center" style="width:200px;">more options</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
        <h2 class="text-left mb-3 mt-5" style="font-weight: 500;">insert/update/delete</h2>
        <form action="" method="post" enctype="multipart/form-data" id="form">
            <div class="row">
                <div class="col">
                    <p class="text-left" id="pesanerror"></p>
                </div>
            </div>
            <div class="row justify-content-start mb-3">
                <div class="col-md-3 col-xs-12"><label hidden>bank id</label></div>
                <div class="col-md-3 col-xs-12"><input type="text" name="id" hidden></div>
            </div>
            <div class="row justify-content-start mb-3">
                <div class="col-md-3 col-xs-12"><label>Nama Bank</label></div>
                <div class="col-md-3 col-xs-12"><input type="text" name="nama"></div>
            </div>
            <div class="row justify-content-start mb-3">
                <div class="col-md-3 col xs-12"><label>Url</label></div>
                <div class="col-md-3 col xs-12"><input type="text" name="url"></div>
            </div>
            <div class="row justify-content-start mb-3">
                <div class="col-md-3 col xs-12"><label>Logo</label></div>
                <div class="col-md-3 col xs-12"><input type="file" name="logo"></div>
            </div>
            <div class="row justify-content-start mb-4">
                <div class="col-md-3 col xs-12"><label>Status</label></div>
                <div class="col-md-4 col xs-12">
                    <input type="radio" name="status" value="Aktif">Aktif<br>
                    <input type="radio" name="status" value="Tidak Aktif">Tidak Aktif
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-2">
                    <button class="btn btn-secondary" value="insert" id="insert" style="width: 100px;">INSERT</button>
                </div>
                <div class="col-md-2">
                    <button id="edit" class="btn btn-secondary" value="update" style="width: 100px;">UPDATE</button>
                </div>
                <div class="col-md-2">
                    <button onclick="deletedata()" class="btn btn-secondary" style="width: 100px;">DELETE</button>
                </div>
            </div>
        </form>
    </div>




    <script type="text/javascript">
        loadData();

        $("#insert").click(function(event) {
            event.preventDefault();

            var form = $('#form')[0];

            var data = new FormData(form);

            $.ajax({
                type: 'POST',
                enctype: 'multipart/form-data',
                url: 'insert.php',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    $("#pesanerror").html(data);
                    console.log(" Sukses :  ", data);
                    $("#insert").prop("disabled", false);
                    loadData();
                }
            })
        })

        $(document).on("click", ".selectdata", function() {
            $('[value="insert"]').hide();
            var id = $(this).attr("id");


            $.ajax({
                type: "POST",
                data: " id=" + id + " ",
                url: "edit.php",
                success: function(result) {
                    var objResult = JSON.parse(result);

                    $("[name='id']").val(objResult.id);
                    $("[name='nama']").val(objResult.nama);
                    $("[name='url']").val(objResult.url);
                    $("[name='logo']").val(objResult.logo);
                    $("[name='status']").val(objResult.status);

                }
            })

        });

        $("#edit").click(function(event) {
            var id = $("[name='id']").val();
            event.preventDefault();

            var form = $('#form')[0];

            var data = new FormData(form);

            $.ajax({
                type: 'POST',
                enctype: 'multipart/form-data',
                url: 'update.php',
                data: data,
                processData: false,
                contentType: false,
                cache: false,
                success: function(data) {
                    $("#pesanerror").html(data);
                    console.log(" Sukses :  ", data);
                    $("#insert").prop("disabled", false);
                    loadData();
                }
            })
        })

        function deletedata() {
            var id = $("[name='id']").val();
            $.ajax({
                type: "POST",
                data: " id=" + id + " ",
                url: "delete.php",
                success: function(result) {
                    var objResult = JSON.parse(result);
                    $("#pesanerror").html(objResult.pesan);
                    loadData();
                }
            })
        }

        function loadData() {
            var dataHandler = $("#tbody");
            dataHandler.html("");

            $.ajax({
                type: "GET",
                data: "",
                url: 'ambildata.php',
                success: function(result) {
                    var objResult = JSON.parse(result);
                    $.each(objResult, function(key, val) {
                        var barisBaru = $("<tr>");
                        barisBaru.html("<td>" + val.id + "</td><td>" + val.nama + "</td><td class=url>" + val.url + "</td><td><img src='foto/" + val.logo + "' width='50' height='50'></td><td>" + val.status + "</td><td><button class='selectdata' id='" + val.id + "'>select</button></td>");

                        dataHandler.append(barisBaru);
                    })
                }
            });
        }
    </script>



</body>

</html>