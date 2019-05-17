    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Mahasiswa KP</h1>

      <div class="row">
        <div class="col-xl-8 col-lg-7 mx-auto text-center">
          <?= $this->session->flashdata('pesan'); ?>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-xl-8 col-lg-7 mx-auto">
          <form action="<?= base_url('home/ubahMahasiswa/') . $nim; ?>" method="post">
            <input type="hidden" name="nim" value="<?= $nim; ?>">
            <div class="form-group">
              <label for="nilai_UTS">Nilai UTS</label>
              <select name="nilai_UTS" id="nilai_UTS" class="form-control">
                <option value="A">A</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B">B</option>
                <option value="B-">B-</option>
                <option value="C+">C+</option>
                <option value="C">C</option>
                <option value="C-">C-</option>
                <option value="D+">D+</option>
                <option value="D">D</option>
                <option value="D-">D-</option>
                <option value="E+">E+</option>
                <option value="E">E</option>
              </select>
            </div>
            <div class="form-group">
              <label for="nilai_UAS">Nilai UAS</label>
              <select name="nilai_UAS" id="nilai_UAS" class="form-control">
                <option value="A">A</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B">B</option>
                <option value="B-">B-</option>
                <option value="C+">C+</option>
                <option value="C">C</option>
                <option value="C-">C-</option>
                <option value="D+">D+</option>
                <option value="D">D</option>
                <option value="D-">D-</option>
                <option value="E+">E+</option>
                <option value="E">E</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">
              <i class="fas fa-fw fa-pencil-alt"></i>
              Simpan Perubahan
            </button>
          </form>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->