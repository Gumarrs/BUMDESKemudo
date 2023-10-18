<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

$prodi = mysqli_query($connection, "SELECT * FROM struktur");
?>

<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Visi</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
          <form action="./store.php" method="POST" enctype="multipart/form-data">
            <table cellpadding="8" class="w-100">
              <tr>
                <td>ID</td>
                <td><input class="form-control" type="text" name="id" required></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td><input class="form-control" type="text" name="nama" required></td>
              </tr>
              <tr>
              <tr>
                <td>Jabatan</td>
                <td><input class="form-control" type="text" name="jabatan" required></td>
              </tr>
              <tr>
                <td>Gambar</td>
                <td><input class="form-control" type="file" name="image" required></td>
              </tr>
              <tr>
                <td>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan">
                </td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>