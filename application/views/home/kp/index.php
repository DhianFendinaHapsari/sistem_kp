    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
      <!-- Content Row -->
      <?php if ($role_id == 2) : ?>
        <div class="row">

          <!-- Pendaftaran KP -->
          <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('home/daftar_kp'); ?>">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pendaftaran KP</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <!-- Nilai UTS/UAS -->
          <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('home/nilai_kp'); ?>">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nilai UTS/UAS</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-sticky-note fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <!-- Download Berkas KP -->
          <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('home/download_berkas_kp'); ?>">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Download Berkas KP</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <!-- Upload berkas KP -->
          <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('home/upload_berkas_kp'); ?>">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Upload Berkas</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-file-upload fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <!-- Info KP -->
          <div class="col-xl-3 col-md-6 mb-4">
            <a href="<?= base_url('home/info_kp'); ?>">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Info KP</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-info fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

        </div>

      <?php endif; ?>
    </div>
    <!-- /.container-fluid -->