<?php 
session_start();
require_once('connection.php');

    if(isset($_POST['Login']))
    {

        if(empty($_POST['username']) || empty($_POST['password'])) 
        {
            header("location:adminlogin.php?Empty= Username atau Password tidak boleh kosong");
        }
        else
        {
            $query="select * from user_admin where username='".$_POST['username']."' and password='".$_POST['password']."' and status_aktif=1";
            $result=mysqli_query($con, $query);
            
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['username']=$_POST['username'];
                header("location:adminpage.php");
            }
            else
            {
                header("location:adminlogin.php?Invalid= Username atau Password salah");
            }
        }
    }
?>