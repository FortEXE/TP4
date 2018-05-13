<form action="<?= $API . '/deleteMahasiswa' ?>" method="POST" role="form">
  <!-- <legend>Tambah</legend> -->

  <?php foreach ($mahasiswas as $val): ?>
  <div class="form-group">
    <label for="id">id:</label>
    <input type="text" class="form-control col-sm-3" name="id" value="<?= $val->id ?>">
  </div>    
  <div class="form-group">
    <label for="nim">Nim:</label>
    <input type="text" class="form-control col-sm-3" name="nim" value="<?= $val->nim ?>">
  </div>
  <div class="form-group">
    <label for="nama">Nama:</label>
    <input type="text" class="form-control col-sm-3" name="nama" value="<?= $val->nama ?>">
  </div>
  <div class="form-group">
    <label for="kelas">Kelas:</label>
    <input type="text" class="form-control col-sm-3" name="kelas" value="<?= $val->kelas ?>">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control col-sm-3" name="email" value="<?= $val->email ?>">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="text" class="form-control col-sm-3" name="password" value="<?= $val->password ?>">
  </div>
  <div class="form-group">
    <input type="submit" name="submit" value="DELETE?" class="btn btn-danger">
  </div>
  <?php endforeach ?>
    <a href="javascript:history.back()" title="">back to main</a>
</form>
