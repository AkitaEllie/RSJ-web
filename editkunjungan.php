<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Kunjungan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3>Edit Data Kunjungan</h3>
    <?php
    include 'koneksi.php';
    $idKunjungan = $_GET['edit'];
    $result = $koneksi->query("SELECT * FROM kunjungan WHERE idKunjungan = '$idKunjungan'");
    $row = $result->fetch_assoc();
    ?>
    <form action="update_kunjungan.php" method="POST">
        <input type="hidden" name="idKunjungan" value="<?= $row['idKunjungan'] ?>">
        <div class="form-group">
            <label for="idPasien">ID Pasien</label>
            <input type="text" class="form-control" name="idPasien" value="<?= $row['idPasien'] ?>" required>
        </div>
        <div class="form-group">
            <label for="idDokter">ID Dokter</label>
            <input type="text" class="form-control" name="idDokter" value="<?= $row['idDokter'] ?>" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" value="<?= $row['tanggal'] ?>" required>
        </div>
        <div class="form-group">
            <label for="keluhan">Keluhan</label>
            <textarea class="form-control" name="keluhan" rows="3" required><?= $row['keluhan'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
</body>
</html>