<!DOCTYPE html>
<html>
<head>
    <title>My App |Tambah Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2 class="mt-4">Tambah Pasien</h2>
    <form action="proses_tambah_pasien.php" method="POST">
        <div class="mb-3">
            <label for="idPasien" class="form-label">ID Pasien</label>
            <input type="text" class="form-control" id="idPasien" name="idPasien" required>
        </div>
        <div class="mb-3">
            <label for="nmPasien" class="form-label">Nama Pasien</label>
            <input type="text" class="form-control" id="nmPasien" name="nmPasien" required>
        </div>
        <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin</label>
            <select class="form-control" id="jk" name="jk" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvv5a8B+HcmWvXK4i" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa5UXT/r0O3P1B+91HpDnp7mo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rY+efp3q20fIdk7Pj47OV9ui6btk28mfr6DgobGt7tUtxE/r4" crossorigin="anonymous"></script>
</body>
</html>
