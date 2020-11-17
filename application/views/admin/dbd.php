<div class="container-fluid">

  <!-- Page Heading -->

  <h1 class="h3 mb-2 text-gray-800"><?= $head; ?></h1>


  <!-- DataTales Example -->
  <div class="card shadow mb-4">


    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

          <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Kab</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Action</th>


          </tr>

          <tbody>
            <?php
            $i = 1;

            foreach ($data_dbd as $row) :

            ?>
              <tr>
                <td><?= $i; ?></td>
                <td><?= $row["kode_kab"]; ?></td>
                <td><?= $row["kecamatan"]; ?></td>
                <td><?= $row["jumlah"]; ?></td>
                <td>
                  <a href="<?= base_url(); ?>admin/edit_dbd/<?= $row['id_kec']; ?>" class="badge badge-success"> Edit</a>

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