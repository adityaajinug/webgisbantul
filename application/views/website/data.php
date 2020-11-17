<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="index.html">Beranda</a></li>
        <li><a href="blog.html">Data</a></li>
      </ol>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container">

      <div class="row">

        <div class="col-lg entries">
          <h2 class="entry-title">
            <p><b>Info data statistik Kabupaten Bantul</b></p>
          </h2>



          <article class="entry entry-single">


            <div class="entry-content">
              <div class="row">
                <div class="col">
                  <div class="mt-3 mb-3 bg-white">


                  </div>
                  <div class="mt-3 p-3">
                    <h1 class="text-center mb-3">Data DBD Kabupaten Bantul 2019</h1>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Kode Kab</th>
                          <th scope="col">Kecamatan</th>
                          <th scope="col">Jumlah</th>

                        </tr>
                      </thead>
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

                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="mt-3 mb-3 bg-white">


                  </div>
                  <div class="mt-3 p-3">
                    <h1 class="text-center mb-3">Data Faskes Kabupaten Bantul 2019</h1>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama</th>
                          <th scope="col">Alamat</th>
                          <th scope="col">Kecamatan</th>
                          <th scope="col">Kota/Kab</th>
                          <th scope="col">Kategori</th>


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
                            <td><?= $row["alamat"]; ?></td>
                            <td><?= $row["kecamatan"]; ?></td>
                            <td><?= $row["kota/kab"]; ?></td>
                            <td><?= $row["kategori"]; ?></td>

                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>


          </article><!-- End blog entry -->


        </div>
        <!-- End blog entries list -->

      </div>

    </div>
  </section>


</main><!-- End #main -->