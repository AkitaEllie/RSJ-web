<?php
include 'koneksi.php';

$idDokter = $_POST['idDokter'];
$nmDokter = $_POST['nmDokter'];
$spesialisasi = $_POST['spesialisasi'];
$noTelp = $_POST['noTelp'];

$sql = "INSERT INTO dokter (idDokter, nmDokter, spesialisasi, noTelp) VALUES ('$idDokter', '$nmDokter', '$spesialisasi', '$noTelp')";

if ($koneksi->query($sql) === TRUE) {
    header("Location: dokter.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>