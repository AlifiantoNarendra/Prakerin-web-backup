<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">

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

</head>

<body>

    <div class="container">
        <h1 class="text-center mb-3 mt-4" style="font-weight: 700;">DATA BANK</h1>
        <button type="button" class="btn btn-success tambah" data-toggle="modal" data-target="#modalUser"><i class="fas fa-plus mr-2"></i>Tambah Data</button>
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center" style="width: 100px;">id bank</th>
                        <th class="text-center" style="width:200px;">nama bank</th>
                        <th class="text-center" style="width:200px;">url</th>
                        <th class="text-center" style="width:200px;">logo</th>
                        <th class="text-center" style="width:200px;">status</th>
                        <th colspan="2" class="text-center" style="width:200px;">more options</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                </tbody>
            </table>
        </div>
        <!-- modal tambah -->
        <div class="modal fade" id="modalUser" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="pesanerror"></p>
                        <form action="" method="post" enctype="multipart/form-data" id="form">
                            <div class="form-group">
                                <label for="id" hidden>id bank</label>
                                <input type="text" class="form-control" id="id" name="id" hidden>
                            </div>
                            <div class="form-group">
                                <label for="nama">nama bank</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Bank...">
                            </div>
                            <div class="form-group">
                                <label for="url">url</label>
                                <input type="text" class="form-control" id="url" name="url" placeholder="Masukkan url Bank...">
                            </div>
                            <div class="form-group">
                                <label for="logo">logo</label>
                                <input type="file" class="form-control-file mt-1" id="logo" name="logo">
                            </div>
                            <div class="row justify-content-start mb-4">
                                <div class="col-md-3 col xs-12"><label>Status</label></div>
                                <div class="col-md-5 col xs-12" aria-required="true">
                                    <input type="radio" name="status" value="Aktif">Aktif<br>
                                    <input type="radio" name="status" value="Tidak Aktif">Tidak Aktif
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="tambah" value="insert" id="insert" style="width: 100px;"><i class="fas fa-plus mr-1"></i>Tambah</button>
                        <button type="submit" class="btn btn-primary" name="edit" value="edit" id="edit" style="width: 100px;"><i class="fas fa-edit mr-2"></i>Edit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 100px;"><i class="fas fa-window-close mr-2"></i>Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery.js"></script>
    <script type="text/javascript">
        loadData();

        $(document).on("click", ".tambah", function() {
            $("#modalUser").show();
            $(".modal-title").text("Tambah Data");
            $('[value="insert"]').show();
            $('[value="edit"]').hide();
        })

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
                    loadData();
                }
            })
        })

        $(document).on("click", ".selectdata", function() {
            var id = $(this).attr("id");

            $("#modalUser").show();
            $(".modal-title").text("Edit Data");
            $('[value="insert"]').hide();
            $('[value="edit"]').show();

            $.ajax({
                type: "POST",
                data: {
                    id: id
                },
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
        })
        $("#edit").click(function(event) {
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
                    loadData();
                }
            })
        })

        $(document).on("click", ".hapus", function() {
            var id = $(this).attr("id");
            if (confirm("Apakan Anda Yakin Ingin Menghapus Data Ini??")) {
                $.ajax({
                    type: "POST",
                    data: {
                        id: id
                    },
                    url: "delete.php",
                    success: function(result) {
                        loadData();
                    }
                })
            } else {
                return false;
            }
        })

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
                        barisBaru.html("<td>" + val.id + "</td><td>" + val.nama + "</td><td class=url><a href='#'>" + val.url + "</a></td><td><img src='../foto/" + val.logo + "' width='50' height='50'></td><td>" + val.status + "</td><td><button class='selectdata btn btn-primary' data-toggle='modal' data-target='#modalUser' id='" + val.id + "'><i class='fas fa-edit mr-1'></i>Edit</button></td> <td><button class='selectdata hapus btn btn-danger' id='" + val.id + "'><i class='fas fa-trash mr-1'></i>Hapus</button></td>");

                        dataHandler.append(barisBaru);
                    })
                }
            });
        }
    </script>


</body>

</html>