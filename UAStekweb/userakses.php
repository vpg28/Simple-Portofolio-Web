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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Akses</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/acc3ee9eed.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="style.css">
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white mb-3">
        <div class="container-fluid">
          <a class="navbar-brand">
    <?php
        if(isset($_SESSION['username']))
        {
            echo 'Halo, '.$_SESSION['username'];
        }
    ?>    </a>
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
        </div>
</nav>
<div class="container" style="margin-left: 20px">
    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalnonaktif" id="signup" style="margin: 10px"><i class="fas fa-user-slash"></i> Nonaktifkan admin</button>
        <div class="modal fade" id="modalnonaktif" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="wrapLogin">
                            <h2 class="modal-title" id="exampleModalLabel">Nonaktifkan Admin</h2>
                        </div>
                    </div>
                    <div class="modal-body" style="margin: 0%;">
                        <div class="container-fluid">
                        <div class="row d-flex justify-content-center align-items-center m-0">
                            <div class="login_oueter">
                            <form action="" method="post" id="login" autocomplete="off" class="bg-light border p-3">
                                <div class="form-row">
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input name="namaadmin" type="text" value="" class="input form-control" id="namaadmin" placeholder="Masukkan nama admin" aria-label="namaadmin" aria-describedby="basic-addon1" style="height: 4vh;" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="save" style="width: 100%;">Save</button>
                                </div>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalSignUp" id="signup" style="margin: 10px"><i class="fas fa-user-plus"></i> Entry admin</button>
    <!-- Modal Sign Up -->
    <div class="modal fade" id="modalSignUp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <div class="wrapLogin">
                    <h2 class="modal-title" id="exampleModalLabel">Sign Up</h2>
                  </div>
              </div>
              <div class="modal-body" style="margin: 0%;">
                <div class="container-fluid">
                  <div class="row d-flex justify-content-center align-items-center m-0">
                    <div class="login_oueter">
                      <form action="" method="post" id="login" autocomplete="off" class="bg-light border p-3">
                        <div class="form-row">
                          <div class="col-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                              </div>
                              <input name="nama" type="text" value="" class="input form-control" id="nama" placeholder="Nama Admin" aria-label="nama" aria-describedby="basic-addon1" style="height: 4vh;" required>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                              </div>
                              <input name="username" type="text" value="" class="input form-control" id="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" style="height: 4vh;" required>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                              </div>
                              <input name="password" type="password" value="" class="input form-control" id="password" placeholder="Password" required="true" aria-label="password" aria-describedby="basic-addon1" style="height: 4vh;">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                              </div>
                              <input name="confirm-password" type="password" value="" class="input form-control" id="confirm-password" placeholder="Confirm Password" required="true" aria-label="password" aria-describedby="basic-addon1" style="height: 4vh;">
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="signup" style="width: 100%;">Sign Up</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEdit1" id="edit" style="margin: 10px"><i class="fas fa-user-edit"></i> Edit admin</button>
    <!-- Modal Edit -->
    <div class="modal fade" id="modalEdit1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <div class="wrapLogin">
                    <h2 class="modal-title" id="exampleModalLabel">Edit Admin</h2>
                  </div>
              </div>
              <div class="modal-body" style="margin: 0%;">
                <div class="container-fluid">
                  <div class="row d-flex justify-content-center align-items-center m-0">
                    <div class="login_oueter">
                      <form action="" method="post" id="login" autocomplete="off" class="bg-light border p-3">
                        <div class="form-row">
                          <div class="col-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                              </div>
                              <input name="namaadmin" type="text" value="" class="input form-control" id="namaadmin" placeholder="Masukkan nama admin" aria-label="namaadmin" aria-describedby="basic-addon1" style="height: 4vh;" required>
                            </div>
                          </div>
                          <div class="col-12">
                          <button class="btn btn-primary" type="button" name="getNama" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#modalEdit2">OK</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
    <div class="modal fade" id="modalEdit2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <div class="wrapLogin">
                    <h2 class="modal-title" id="exampleModalLabel">Edit Admin</h2>
                  </div>
              </div>
              <div class="modal-body" style="margin: 0%;">
                <div class="container-fluid">
                  <div class="row d-flex justify-content-center align-items-center m-0">
                    <div class="login_oueter">
                      <form action="" method="post" id="login" autocomplete="off" class="bg-light border p-3">
                        <div class="form-row">
                          <div class="col-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                              </div>
                              <input name="nama" type="text" value="" class="input form-control" id="nama" placeholder="Nama Admin" aria-label="nama" aria-describedby="basic-addon1" style="height: 4vh;" required>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                              </div>
                              <input name="username" type="text" value="" class="input form-control" id="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" style="height: 4vh;" required>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                              </div>
                              <input name="password" type="password" value="" class="input form-control" id="password" placeholder="Password" required="true" aria-label="password" aria-describedby="basic-addon1" style="height: 4vh;">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                              </div>
                              <input name="confirm-password" type="password" value="" class="input form-control" id="confirm-password" placeholder="Confirm Password" required="true" aria-label="password" aria-describedby="basic-addon1" style="height: 4vh;">
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit" name="edit" style="width: 100%;">Edit</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
</div>
</body>
</html>
<?php include "connection.php";
  if (isset($_POST["signup"])){
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm-password"];
    if($password !== $confirm) {
      echo "<script>
            Swal.fire(
              'Error',
              'Password and confirm password are not the same!',
              'error'
            )
            </script>";
      return false;
    } else {
      $password = password_hash($password,PASSWORD_DEFAULT);
      $hasil = mysqli_query($con, "SELECT username FROM user_admin WHERE username = '$username'");
      if(mysqli_fetch_assoc($hasil)) {
        echo "<script>
            Swal.fire(
              'Error',
              'Username already exists!',
              'error'
            )
            </script>";
        return false;
      }
      mysqli_query($con, "INSERT INTO user_admin (id, username, password, nama_admin, status_aktif) VALUES(null,'$username','$password','$nama','1')");
      echo "<script>
            Swal.fire(
              'Success',
              'Account created!',
              'success'
            )
            </script>";
    }
  }
  if (isset($_POST["edit"])){
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm-password"];
    if($password !== $confirm) {
      echo "<script>
            Swal.fire(
              'Error',
              'Password and confirm password are not the same!',
              'error'
            )
            </script>";
      return false;
    } else {
      $password = password_hash($password,PASSWORD_DEFAULT);
      $hasil = mysqli_query($con, "SELECT username FROM user_admin WHERE username = '$username'");
      if(mysqli_fetch_assoc($hasil)) {
        echo "<script>
            Swal.fire(
              'Error',
              'Username already exists!',
              'error'
            )
            </script>";
        return false;
      }
      mysqli_query($con, "UPDATE user_admin SET username = '$username', password = '$password', nama_admin = '$nama' WHERE nama_admin = '$nama'");
      echo "<script>
            Swal.fire(
              'Success',
              'Account edited!',
              'success'
            )
            </script>";
    }
  }
  if(isset($_POST["save"])){
    $nama = $_POST["namaadmin"];
    echo $nama;
    mysqli_query($con,"UPDATE user_admin SET status_aktif = '0' WHERE nama_admin = '$nama'");
  };
?>