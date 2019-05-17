    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Upload Berkas KP</h1>

      <div class="row">
        <div class="col-xl-8 col-lg-7 mx-auto text-center">
          <?= $this->session->flashdata('pesan'); ?>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-xl-6 mx-auto">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Pra BAB</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <form action="<?= base_url('home/upload_berkas_kp'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="file" name="berkas" id="berkas" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-fw fa-file-upload"></i>
                  Upload Berkas
                </button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-xl-6 mx-auto">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">BAB isi</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <form action="<?= base_url('home/upload_berkas_kp'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="file" name="berkas" id="berkas" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-fw fa-file-upload"></i>
                  Upload Berkas
                </button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-xl-6">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Lampiran</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <form action="<?= base_url('home/upload_berkas_kp'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="file" name="berkas" id="berkas" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-fw fa-file-upload"></i>
                  Upload Berkas
                </button>
              </form>
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- /.container-fluid -->