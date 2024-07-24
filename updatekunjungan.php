<?php
include 'koneksi.php';

$idKunjungan = $_POST['idKunjungan'];
$idPasien = $_POST['idPasien'];
$idDokter = $_POST['idDokter'];
$tanggal = $_POST['tanggal'];
$keluhan = $_POST['keluhan'];

$sql = "UPDATE kunjungan SET idPasien='$idPasien', idDokter='$idDokter', tanggal='$tanggal', keluhan='$keluhan' WHERE idKunjungan='$idKunjungan'";

if ($koneksi->query($sql) === TRUE) {
    header("Location: kunjungan.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>