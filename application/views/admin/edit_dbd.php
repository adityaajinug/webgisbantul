<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $head; ?>
  </h1>

  <form action="" method="post">
    <input type="hidden" name="id_kec" value="<?= $dbd['id_kec']; ?>">
    <form>
      <div class="form-group">
        <label for="kode_kab">Kode Kab</label>
        <input type="text" class="form-control" id="kode_kab" name="kode_kab" value="<?= $dbd['kode_kab']; ?>" readonly>
        <?= form_error('kode_kab', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="kecamatan">Kecamatan</label>
        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $dbd['kecamatan']; ?>" readonly>
        <?= form_error('kecamatan', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="jumlah">Jumlah</label>
        <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $dbd['jumlah']; ?>">
        <?= form_error('jumlah', ' <small class="text-danger ">', '</small>'); ?>
      </div>

      <button type="button" class="btn btn-secondary">Cancel</button>
      <button type="submit" name="edit_dbd" class="btn btn-primary">Edit</button>
    </form>
</div>