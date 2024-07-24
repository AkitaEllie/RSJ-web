<?php
include 'koneksi.php';

if (isset($_GET['idDokter'])) {
    $idDokter = $_GET['idDokter'];
    $sql = "DELETE FROM dokter WHERE idDokter = '$idDokter'";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: dokter.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "ID Dokter tidak ditemukan.";
}

$koneksi->close();
?>