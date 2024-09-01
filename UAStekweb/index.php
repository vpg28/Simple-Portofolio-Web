<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
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
    <div class="container" style="margin: 30px;">
        <h1 style="margin: 30px 0 30px 0;">Cek Pengiriman</h1>
        <div class="row align-items-start">
            <div class="col-4">
                <form action="" method="post" style="display: flex;">
                    <input type="text" name="no_resi" id="no_resi" class="form-control mb-3" placeholder="Nomor Pengiriman">
                    <div class="d-grid" style="margin-left: 5px">
                        <button class="btn btn-dark mb-3" name="lihat" onclick="cekPengiriman(event)">Lihat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="logContainer" style="margin: 30px 30px 0 30px"></div>
    <script>
        function cekPengiriman(event) {
            // Menghentikan perilaku default tombol
            event.preventDefault();
            // Ambil nomor resi dari input
            var noResi = $("#no_resi").val();

            // Lakukan request AJAX
            $.ajax({
                type: "POST",
                url: "cek_log.php", 
                data: { no_resi: noResi },
                success: function(response) {
                    // Tampilkan log pengiriman
                    $(".logContainer").html(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText); // Log error response dari request AJAX
                }
            });
        }
    </script>
</body>
</html>