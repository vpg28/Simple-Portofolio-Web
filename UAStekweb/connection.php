<?php

    $con=mysqli_connect('localhost','root','','db_uastekweb');

    if(!$con)
    {
        die('Lakukan pengecekan ulang pada koneksi' .mysqli_error());
    }

?>