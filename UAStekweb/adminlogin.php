<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    
    <?php
        if (@$_GET['Empty']) {
            echo "<script>alert('" . $_GET['Empty'] . "');</script>";
        }
        if (@$_GET['Invalid']) {
            echo "<script>alert('" . $_GET['Invalid'] . "');</script>";
        }
    ?>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">WELCOME!</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="adminlogin.php">Login admin</a>
              </li>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card bg-white mt-5">
                    <div class="card-title bg-dark text-white mt-0">
                        <h3 class="text-center py-3">WELCOME!</h3>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <p>Username</p>
                            <input type="text" name="username" class="form-control mb-3">
                            <p>Password</p>
                            <input type="password" name="password" class="form-control mb-3">
                            <!-- <button class="btn btn-dark mt-3" name="Login">Login</button> -->
                            <div class="d-grid">
                                <button class="btn btn-dark mt-3" name="Login">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>