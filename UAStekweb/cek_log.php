<?php
require("connection.php");

$noResi = isset($_POST['no_resi']) ? $_POST['no_resi'] : '';

// Cek apakah nomor resi sudah diisi
if (empty($noResi)) {
    echo "Nomor resi tidak valid.";
    exit;
}

// Query untuk mengambil log pengiriman berdasarkan nomor resi
$sql = "SELECT * FROM detail_log_pengiriman WHERE no_resi = '$noResi'";
$result = $con->query($sql);

// Cek apakah ada log pengiriman
if ($result->num_rows > 0) {
    // Tampilkan tabel log pengiriman
    echo "<table class='table table-bordered'>
            <thead class='table-dark'>
                <tr>
                    <th>Tanggal</th>
                    <th>Kota</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>";

    while ($row = $result->fetch_assoc()) {
        $date = date_create($row["tanggal"]);
        echo "<tr>
                <td>" . date_format($date,"d/m/Y") . "</td>
                <td>" . $row['kota'] . "</td>
                <td>" . $row['keterangan'] . "</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<div class='alert alert-warning' role='alert'>
            Tidak ada log pengiriman untuk nomor resi ini.
          </div>";
}
?>
