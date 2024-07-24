<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3>Edit Data Dokter</h3>
    <?php
    include 'koneksi.php';
    $idDokter = $_GET['edit'];
    $result = $koneksi->query("SELECT * FROM dokter WHERE idDokter = '$idDokter'");
    $row = $result->fetch_assoc();
    ?>
    <form action="update_dokter.php" method="POST">
        <input type="hidden" name="idDokter" value="<?= $row['idDokter'] ?>">
        <div class="form-group">
            <label for="nmDokter">Nama Dokter</label>
            <input type="text" class="form-control" name="nmDokter" value="<?= $row['nmDokter'] ?>" required>
        </div>
        <div class="form-group">
            <label for="spesialisasi">Spesialisasi</label>
            <input type="text" class="form-control" name="spesialisasi" value="<?= $row['spesialisasi'] ?>" required>
        </div>
        <div class="form-group">
            <label for="noTelp">No Telp</label>
            <input type="text" class="form-control" name="noTelp" value="<?= $row['noTelp'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
</body>
</html>