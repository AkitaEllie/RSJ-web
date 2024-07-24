<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Kunjungan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3>Tambah Data Kunjungan</h3>
    <form action="simpan_kunjungan.php" method="POST">
        <div class="form-group">
            <label for="idKunjungan">ID Kunjungan</label>
            <input type="text" class="form-control" name="idKunjungan" placeholder="ID Kunjungan" required>
        </div>
        <div class="form-group">
            <label for="idPasien">ID Pasien</label>
            <input type="text" class="form-control" name="idPasien" placeholder="ID Pasien" required>
        </div>
        <div class="form-group">
            <label for="idDokter">ID Dokter</label>
            <input type="text" class="form-control" name="idDokter" placeholder="ID Dokter" required>
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" required>
        </div>
        <div class="form-group">
            <label for="keluhan">Keluhan</label>
            <textarea class="form-control" name="keluhan" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
</body>
</html>