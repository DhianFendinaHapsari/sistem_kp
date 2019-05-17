<div class="container">

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-7 mx-auto">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
              <?= $this->session->flashdata('pesan'); ?>
            </div>
            <form class="user" action="<?= base_url('auth/registration'); ?>" method="post">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                <?= form_error('username', '<small class="text-danger pl-2">', '</small>'); ?>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="password" name="password1" placeholder="Kata sandi">
                  <?= form_error('password1', '<small class="text-danger pl-2">', '</small>'); ?>
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="password" name="password2" placeholder="Ulang Kata sandi">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
                Daftarkan Akun
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="<?= base_url('') ?>">Lupa Kata sandi?</a>
            </div>
            <div class="text-center">
              <a class="small" href="<?= base_url('auth'); ?>">Udah punya akun? Masuk!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>