<?php
    session_start();
    if(isset($_SESSION['username']))
    {
    }
    else
    {
        header("location:adminlogin.php");
    }
?>

<?php
    if(isset($_POST['delete'])) {
        require("connection.php");
        $stmt = $con->prepare("DELETE FROM transaksi_resi_pengiriman WHERE no_resi = ?");
        $stmt->bind_param("s", $no_resi); 
        $no_resi = $_POST["delete"]; 
        $stmt->execute();
    }
?>

<?php
    if(isset($_POST['entry'])) {
        require("connection.php");

        $tanggal = $_POST["tgl_resi"];
        $nomor = $_POST["no_resi"];
        $hasil = mysqli_query($con, "SELECT no_resi FROM transaksi_resi_pengiriman WHERE no_resi = '$nomor'");
        if(mysqli_fetch_assoc($hasil)) {
            echo "<script>
                alert('nomor resi sudah ada!');
                </script>";
        }else{
            mysqli_query($con, "INSERT INTO transaksi_resi_pengiriman (id_resi, no_resi, tgl_resi) VALUES(null, '$nomor','$tanggal')");
        };
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">  
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <div class="container-fluid">
            <a class="navbar-brand">
                <?php
                if (isset($_SESSION['username'])) {
                    echo 'Halo, ' . $_SESSION['username'];
                }
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="adminpage.php">Data Resi Pengiriman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userakses.php">User Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php?logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row align-items-start">
            <div class="col-4">
                <h2>Entry Nomor Resi</h2>
                <form action="" method="post">
                    <p>Tanggal</p>
                    <input type="date" name="tgl_resi" class="form-control mb-3">
                    <p>Nomor Resi</p>
                    <input type="text" name="no_resi" class="form-control mb-3">
                    <div class="d-grid">
                        <button class="btn btn-dark mb-3" name="entry">Entry</button>
                    </div>
                </form>
            </div>
            <form action="" method="post">
                <table class="table table-bordered mt-3" style="margin: 10px">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Tanggal Resi</th>
                            <th scope="col">Nomor Resi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once("connection.php");
                        $sql = "SELECT * FROM transaksi_resi_pengiriman";
                        $result = $con->query($sql);
                        if ($result->num_rows > 0) {
                            $no = 1;
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td>
                                        <?php
                                        $date = date_create($row["tgl_resi"]);
                                        echo date_format($date, "d/m/Y");
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $row["no_resi"]
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo "<button type='button' class='btn btn-primary' onclick='entry_log(" . $row["id_resi"] . ")' data-bs-toggle='modal' data-bs-target='#entry_log'>Entry Log</button>";
                                        ?>
                                        <button class='btn btn-danger' name='delete' value='<?php echo $row['no_resi']; ?>' >Hapus</button>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else {
                        }
                            ?>
                    </tbody>
                </table>
            </form>
        </div>

        <div class="entry_log">
            <form action="" method="post">
                <div class="modal fade" id="entry_log" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-bg-dark" style="font-weight: bold; color: #262626;">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Entry Log</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3" id="mb1">
                                    <label class="form-label" id="no_resi_log" name="no_resi_log"></label>
                                </div>
                                <div class="mb-3" id="mb1">
                                    <label class="form-label" style="color: #1c1c1c;">Tanggal</label>
                                    <input type="date" class="form-control" id="tgl_log" name="tgl_log">
                                </div>
                                <div class="mb-3" id="mb1">
                                    <label class="form-label" style="color: #1c1c1c;">Kota</label>
                                    <input type="text" class="form-control" id="kota_log" name="kota_log">
                                </div>
                                <div class="mb-3" id="mb1">
                                    <label class="form-label" style="color: #1c1c1c;">Keterangan</label>
                                    <textarea class="form-control" id="ket_log" name="ket_log" rows="2"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-dark" name="detail" onclick="inputData('insert')">Input</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        var resi;
        function entry_log(id){
            console.log("entry " + id);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'get_no_resi.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if (xhr.status >= 200 && xhr.status < 400) {
                    var response = JSON.parse(xhr.responseText);
                    resi = response.no_resi
                    document.getElementById('no_resi_log').innerText = 'No Resi: ' + resi;
                } else {
                    console.error('Request gagal dengan status ' + xhr.status);
                }
            };

            xhr.onerror = function() {
                console.error('Request gagal');
            };

            xhr.send('id=' + id);
        }
        function inputData(action){
            $(document).ready(function(){
                var data = {
                    action: action,
                    noResi: resi,
                    tanggal: $("#tgl_log").val(),
                    kota: $("#kota_log").val(),
                    keterangan: $("#ket_log").val(),
                };

                $.ajax({
                    url: 'insertlog.php',
                    type: 'post',
                    data: data,
                    success:function(response){
                        alert(response);
                    }
                });
                $("#tgl_log").val("");
                $("#kota_log").val("");
                $("#ket_log").val("");
            });
        } 
    </script>
</body>
</html>