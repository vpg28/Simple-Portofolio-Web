<?php
require("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    // Fetch no_resi berdasarkan id yang dipilih
    $stmt = $con->prepare("SELECT no_resi FROM transaksi_resi_pengiriman WHERE id_resi = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $response = ["no_resi" => $row["no_resi"]];
        echo json_encode($response);
    } else {
        // Handle error
        echo json_encode(["no_resi" => "Tidak ditemukan"]);
    }

    $stmt->close();
}
?>