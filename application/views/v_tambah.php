<form action="<?= site_url('mahasiswa/proses_tambah') ?>" method="POST" role="form">
  <!-- <legend>Tambah</legend> -->

  <div class="form-group">
    <label for="nim">Nim:</label>
    <input type="text" class="form-control col-sm-3" name="nim" placeholder="Input nim">
  </div>
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" class="form-control col-sm-3" name="nama" placeholder="Input nama">
  </div>
  <div class="form-group">
    <label for="kelas">Kelas:</label>
    <input type="text" class="form-control col-sm-3" name="kelas" placeholder="Input kelas">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control col-sm-3" name="email" placeholder="Input email">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="text" class="form-control col-sm-3" name="password" placeholder="Input password">
  </div>
  <button type="submit" name="submit" class="btn btn-success">Tambah</button>
</form>