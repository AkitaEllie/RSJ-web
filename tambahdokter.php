<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3>Tambah Data Dokter</h3>
    <form action="simpan_dokter.php" method="POST">
        <div class="form-group">
            <label for="idDokter">ID Dokter</label>
            <input type="text" class="form-control" name="idDokter" placeholder="ID Dokter" required>
        </div>
        <div class="form-group">
            <label for="nmDokter">Nama Dokter</label>
            <input type="text" class="form-control" name="nmDokter" placeholder="Nama Dokter" required>
        </div>
        <div class="form-group">
            <label for="spesialisasi">Spesialisasi</label>
            <input type="text" class="form-control" name="spesialisasi" placeholder="Spesialisasi" required>
        </div>
        <div class="form-group">
            <label for="noTelp">No Telp</label>
            <input type="text" class="form-control" name="noTelp" placeholder="No Telp" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
</body>
</html>