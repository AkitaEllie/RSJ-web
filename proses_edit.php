<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $query = "UPDATE pasien SET nmPasien=?, jk=?, alamat=? WHERE idPasien=?";
    $stmt = $koneksi->prepare($query);
    $stmt->bind_param('ssss', $nmPasien, $jk, $alamat, $idPasien);
    if ($stmt->execute()) {
        header("Location: edit_sukses.php?id=$idPasien");
        exit();
    } else {
        header("Location: edit_gagal.php?id=$idPasien");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>