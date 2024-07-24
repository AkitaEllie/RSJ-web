<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My App | Halaman Edit Data Pasien</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row mt-3">
      <div class="col-4">
        <h3>Edit Data Pasien</h3>
        <?php
        include 'koneksi.php';
        if (isset($_GET['edit'])) {
          $idPasien = $_GET['edit'];
          $panggil = $koneksi->prepare("SELECT * FROM pasien WHERE idPasien=?");
          $panggil->bind_param('s', $idPasien);
          $panggil->execute();
          $result = $panggil->get_result();
          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>
        <form action="proses_edit.php" method="POST">
          <div class="form-group">
            <label for="idPasien">ID Pasien</label>
            <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien" value="<?= $row['idPasien'] ?>" readonly>
          </div>
          <div class="form-group">
            <label for="nmPasien">Nama Pasien</label>
            <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pasien" value="<?= $row['nmPasien'] ?>" required>
          </div>
          <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="jk" value="Perempuan" <?= ($row['jk'] === "Perempuan") ? "checked" : "" ?>> Perempuan
            </div>
            <div class="form-check">
              <input type="radio" class="form-check-input" name="jk" value="Laki-laki" <?= ($row['jk'] === "Laki-laki") ? "checked" : "" ?>> Laki-laki
            </div>
          </div>
          <div class="form-group mt-3">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat" required><?= $row['alamat'] ?></textarea>
          </div>
          <div class="form-group mt-3">
            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
          </div>
        </form>
        <?php
          } else {
            echo "Data tidak ditemukan.";
          }
        } else {
          echo "ID Pasien tidak ditemukan.";
        }
        ?>
      </div>
    </div>
  </div>
</body>
</html>