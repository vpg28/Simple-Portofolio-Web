<?php
require 'connection.php';

if(isset($_POST["action"])){
    if($_POST["action"] == "insert"){
        insert();
    }
}

function insert() {
    global $con;

    $noResi = $_POST["noResi"];
    $tanggal = $_POST["tanggal"];
    $kota = $_POST["kota"];
    $keterangan = $_POST["keterangan"];

    $query = "INSERT INTO detail_log_pengiriman VALUES (null, '$noResi', '$tanggal', '$kota', '$keterangan')";
    mysqli_query($con, $query);
    echo "Detail log berhasil dimasukkan";
}

?>