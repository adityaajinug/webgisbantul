<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <h1 class="h3 mb-2 text-gray-800"><?= $head; ?></h1>

  <div class="row">
    <div class="col-lg">
      <?= form_error('pesan', '<div class="alert alert-danger" role="alert"> ', '
    </div>'); ?>

      <?= $this->session->flashdata('pesan'); ?>
      <a href="http://" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Faskes</a></div>
  </div>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">


    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Longtitude</th>
              <th scope="col">Latitude</th>
              <th scope="col">Alamat</th>
              <th scope="col">Kecamatan</th>
              <th scope="col">Kota/Kab</th>
              <th scope="col">Kategori</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;

            foreach ($data_faskes as $row) :

            ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["longtitude"]; ?></td>
                <td><?= $row["latitude"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td><?= $row["kecamatan"]; ?></td>
                <td><?= $row["kota/kab"]; ?></td>
                <td><?= $row["kategori"]; ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/edit_faskes/<?= $row['id']; ?>" class="badge badge-success"> Edit</a>
                  <a href="<?= base_url(); ?>admin/hapus_faskes/<?= $row['id']; ?>" class="badge badge-danger" data-toggle="modal" data-target="#hapusJadwalModal"> Hapus</a>
                </td>

              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_faskes'); ?>" method="post">
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="longtitude" name="longtitude" placeholder="Longtitude">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude">
            </div>
            <div class="form-group">
              <textarea type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="kota/kab" name="kota/kab" placeholder="Kota/kab">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Kategori">
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Hapus Modal-->
<div class="modal fade" id="hapusJadwalModal" tabindex="-1" role="dialog" aria-labelledby="hapusJadwalModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Yakin Hapus Data?</h5>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?= base_url(); ?>admin/hapus_faskes/<?= $row['id']; ?>">Hapus</a>
      </div>
    </div>
  </div>
</div>