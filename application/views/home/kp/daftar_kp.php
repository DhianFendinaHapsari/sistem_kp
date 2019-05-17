    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Daftar KP</h1>

      <div class="row">
        <div class="col-xl-8 col-lg-7 mx-auto text-center">
          <?= $this->session->flashdata('pesan'); ?>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-xl-8 col-lg-7 mx-auto">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Form KP</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <?php if ($register == NULL) : ?>
                <form action="<?= base_url('home/daftar_kp'); ?>" method="post">
                  <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?= set_value('nim'); ?>">
                    <?= form_error('nim', '<small class="text-danger pl-2">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                    <?= form_error('nama', '<small class="text-danger pl-2">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="jenis">Jenis KP</label>
                    <select name="jenis" id="jenis" class="form-control">
                      <?php foreach ($jenis as $j) : ?>
                        <option value="<?= $j['id']; ?>">
                          <?= $j['nama']; ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="judul">Judul KP</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= set_value('judul'); ?>">
                    <?= form_error('judul', '<small class="text-danger pl-2">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="lokasi">Lokasi KP</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" value="<?= set_value('lokasi'); ?>">
                    <?= form_error('lokasi', '<small class="text-danger pl-2">', '</small>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="dosen">Dosen Pembimbing</label>
                    <select name="dosen" id="dosen" class="form-control">
                      <?php foreach ($dosen as $d) : ?>
                        <option value="<?= $d['niy']; ?>">
                          <?= $d['nama']; ?>
                        </option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">
                    <i class="fas fa-fw fa-plus"></i>
                    Daftar Sekarang
                  </button>
                </form>
              <?php else : ?>
                <div class="text-center">
                  <div class="alert alert-danger">Anda sudah terdaftar</div>
                </div>
              <?php endif; ?>
            </div>
          </div>
      <?php if($seminar == NULL) : ?>
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Siap Seminar ?</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <?php if ($register != NULL) : ?>
                <div class="text-center">
                  <a href="<?= base_url('home/daftar_seminar'); ?>" class="btn btn-primary">Daftar Sekarang</a>
                </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>


    </div>
    <!-- /.container-fluid -->