<?php
include 'koneksi.php';

$idKunjungan = $_POST['idKunjungan'];
$idPasien = $_POST['idPasien'];
$idDokter = $_POST['idDokter'];
$tanggal = $_POST['tanggal'];
$keluhan = $_POST['keluhan'];

$sql = "INSERT INTO kunjungan (idKunjungan, idPasien, idDokter, tanggal, keluhan) VALUES ('$idKunjungan', '$idPasien', '$idDokter', '$tanggal', '$keluhan')";

if ($koneksi->query($sql) === TRUE) {
    header("Location: kunjungan.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>