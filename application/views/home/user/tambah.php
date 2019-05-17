    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Users</h1>

      <div class="row">
        <div class="col-xl-8 col-lg-7 mx-auto">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <form action="<?= base_url('home/tambahUser') ?>" method="post">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" value="<?= set_value('username'); ?>">
                  <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="niy">NIY</label>
                  <input type="text" class="form-control" id="niy" name="niy" placeholder="Masukan NIY"value="<?= set_value('niy'); ?>">
                  <?= form_error('niy', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <label for="nama">Nama Dosen</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Dosen" value="<?= set_value('nama'); ?>">
                  <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="password1">Kata Sandi</label>
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Kata sandi">
                    <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <label for="password2">Ketik ulang Kata Sandi</label>
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulang Kata sandi">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Tambah akun baru</button>
              </form>
            </div>
          </div>

        </div>

      </div>
      <!-- /.container-fluid -->