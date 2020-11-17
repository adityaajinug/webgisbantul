<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">
    <?= $head; ?>
  </h1>

  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $faskes['id']; ?>">
    <form>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?= $faskes['nama']; ?>">
        <?= form_error('nama', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="longtitude">Longtitude</label>
        <input type="text" class="form-control" id="longtitude" name="longtitude" value="<?= $faskes['longtitude']; ?>">
        <?= form_error('longtitude', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="latitude">Latitude</label>
        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="latitude" value="<?= $faskes['latitude']; ?>">
        <?= form_error('latitude', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?= $faskes['alamat']; ?>">
        <?= form_error('alamat', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="kecamatan">Kecamatan</label>
        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="kecamatan" value="<?= $faskes['kecamatan']; ?>">
        <?= form_error('kecamatan', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="kode/kab">Kota / Kab</label>
        <input type="text" class="form-control" id="kota/kab" name="kota/kab" placeholder="kota/kab" value="<?= $faskes['kota/kab']; ?>" readonly>
        <?= form_error('kota/kab', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <div class="form-group">
        <label for="kategori">Kategori </label>
        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="kategori" value="<?= $faskes['kategori']; ?>">
        <?= form_error('kategori', ' <small class="text-danger ">', '</small>'); ?>
      </div>
      <button type="button" class="btn btn-secondary">Cancel</button>
      <button type="submit" name="edit_faskes" class="btn btn-primary">Edit</button>
    </form>
</div>