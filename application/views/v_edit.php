<form action="<?= site_url('Server/putMahasiswa') ?>" method="POST" role="form">
  <!-- <legend>Tambah</legend> -->

  <div class="form-group">
    <label for="nim">Nim:</label>
    <input type="text" class="form-control col-sm-3" name="nim" value="<?= $nim ?>">
  </div>
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" class="form-control col-sm-3" name="nama" value="<?= $nama ?>">
  </div>
  <div class="form-group">
    <label for="kelas">Kelas:</label>
    <input type="text" class="form-control col-sm-3" name="kelas" value="<?= $kelas ?>">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control col-sm-3" name="email" value="<?= $email ?>">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="text" class="form-control col-sm-3" name="password" value="<?= $password ?>">
  </div>
  <button type="submit" name="submit" class="btn btn-success">Edit</button>
</form>