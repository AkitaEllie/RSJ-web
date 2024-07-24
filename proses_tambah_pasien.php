<?php
include 'koneksi.php';

$idPasien = $_POST['idPasien'];
$nmPasien = $_POST['nmPasien'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO pasien (idPasien, nmPasien, jk, alamat) VALUES ('$idPasien', '$nmPasien', '$jk', '$alamat')";

if ($koneksi->query($sql) === TRUE) {
    header("Location: pasien.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}

$koneksi->close();
?>
