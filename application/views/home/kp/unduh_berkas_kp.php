    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Unduh Berkas KP</h1>

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
              <h6 class="m-0 font-weight-bold text-primary">Berkas Kerja Praktek</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <table class="table table-striped">
                <thead class="text-center">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Berkas</th>
                    <th scope="col">Unduh</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="text-center">
                    <th scope="row">1</th>
                    <td>Form Penilaian</td>
                    <td>
                      <a href="https://tif.uad.ac.id/download/file/Form_Penilaian_KP1.docx">
                        <i class="fas fa-fw fa-download"></i>
                      </a>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <th scope="row">2</th>
                    <td>Format Laporan</td>
                    <td>
                      <a href="https://tif.uad.ac.id/download/file/Format_Laporan_KP.docx">
                        <i class="fas fa-fw fa-download"></i>
                      </a>
                    </td>
                  </tr>
                  <tr class="text-center">
                    <th scope="row">3</th>
                    <td>Pembimbing Laporan</td>
                    <td>
                      <a href="https://tif.uad.ac.id/download/file/Pembimbing_KP_Ganjil_2018-2019.xlsx">
                        <i class="fas fa-fw fa-download"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->