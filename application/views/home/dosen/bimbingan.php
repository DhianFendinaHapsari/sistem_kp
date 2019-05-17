    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Bimbingan KP</h1>

      <div class="row">
        <div class="col-xl-8 col-lg-7 mx-auto text-center">
          <?= $this->session->flashdata('pesan'); ?>
        </div>
      </div>

      <!-- Content Row -->
      <div class="row">
        <div class="col-xl-8 col-lg-7 mx-auto">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Judul</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($mahasiswa as $m) : ?>
                <tr>
                  <th scope="row"><?= $i++; ?></th>
                  <td><?= $m['nim']; ?></td>
                  <td><?= $m['nama']; ?></td>
                  <td><?= $m['judul']; ?></td>
                  <td>
                    <a href="<?= base_url('home/ubahMahasiswa/') . $m['nim']; ?>" class="badge badge-primary">
                      <i class="fas fa-fw fa-edit"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
    <!-- /.container-fluid -->