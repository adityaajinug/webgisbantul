<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center mt-5">

    <div class="col-lg-7 mt-5">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">

            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login Akun</h1>
                </div>
                <?= $this->session->flashdata('pesan'); ?>
                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Alamat Email...." value="<?= set_value('email') ?>">
                    <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <button type="submit" class="btn btn-ijo btn-user btn-block ">
                    Login
                  </button>
                  <a href="<?= base_url('auth/registrasi') ?>"><button type="submit" class="btn btn-ijo btn-user btn-block mt-3">
                      Registrasi</a>

                  </button>
                  <hr>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>