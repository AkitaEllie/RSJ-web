<!DOCTYPE html>
<html>
<head>
    <title>My App | Tabel Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand btn-custom">My App</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link btn-custom">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="pasien.php" class="nav-link btn-custom">Pasien</a>
                    </li>
                    <li class="nav-item">
                        <a href="dokter.php" class="nav-link btn-custom" aria-current="page">Dokter</a>
                    </li>
                    <li class="nav-item">
                        <a href="kunjungan.php" class="nav-link btn-custom">Kunjungan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row mt-3">
        <div class="col-sm">
            <h3>Tabel Dokter</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="tambahdokter.php" class="btn btn-tambah-data btn-sm d-flex">Tambah Data Dokter</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <table class="table table-custom">
                <tr>
                    <th>No</th>
                    <th>ID Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Spesialisasi</th>
                    <th>No Telp</th>
                    <th>Action</th>
                </tr>
                <?php
                include 'koneksi.php';
                $no = 1;
                $hasil = $koneksi->query("SELECT * FROM dokter");
                while ($row = $hasil->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['idDokter']; ?></td>
                    <td><?= $row['nmDokter']; ?></td>
                    <td><?= $row['spesialisasi']; ?></td>
                    <td><?= $row['noTelp']; ?></td>
                    <td>
                        <a href="editdokter.php?edit=<?= $row['idDokter']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapusdokter.php?idDokter=<?= $row['idDokter']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvv5a8B+HcmWvXK4i" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa5UXT/r0O3P1B+91HpDnp7mo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rY+efp3q20fIdk7Pj47OV9ui6btk28mfr6DgobGt7tUtxE/r4" crossorigin="anonymous"></script>
</body>
</html>