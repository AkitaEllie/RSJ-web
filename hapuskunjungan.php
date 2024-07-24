<?php
include 'koneksi.php';

if (isset($_GET['idKunjungan'])) {
    $idKunjungan = $_GET['idKunjungan'];
    $sql = "DELETE FROM kunjungan WHERE idKunjungan = '$idKunjungan'";

    if ($koneksi->query($sql) === TRUE) {
        header("Location: kunjungan.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
} else {
    echo "ID Kunjungan tidak ditemukan.";
}

$koneksi->close();
?>