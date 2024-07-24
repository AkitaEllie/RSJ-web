<?php
include 'koneksi.php';

if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $sql = "DELETE FROM pasien WHERE idPasien = '$idPasien'";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: pasien.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "ID Pasien tidak ditemukan.";
}

$koneksi->close();
?>
