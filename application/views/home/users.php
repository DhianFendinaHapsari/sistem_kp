    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <h1 class="h3 mb-4 text-gray-800">Users</h1>
      <div class="row py-2">
        <div class="col-8 text-center mx-auto">
          <?= $this->session->userdata('pesan'); ?>
        </div>
        <div class="col-xl-8 col-lg-7 mx-auto">
          <a href="<?= base_url('home/tambahUser'); ?>" class="btn btn-primary float-right">Tambah Dosen</a>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-8 col-lg-7 mx-auto">
          <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Is Active</th>
                    <th scope="col">Role</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($users != NULL) : ?>
                    <?php
                    $i = 1;
                    foreach ($users as $user) :
                      ?>
                      <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $user['username']; ?></td>
                        <td>
                          <?php
                          if ($user['is_active']) {
                            echo "Aktif";
                          } else {
                            echo "Tidak Aktif";
                          }
                          ?>
                        </td>
                        <td>
                          <?php
                          if ($user['role_id'] == 1) {
                            echo "Dosen";
                          } else if ($user['role_id'] == 2) {
                            echo "Mahasiswa";
                          } else {
                            echo "Admin";
                          }
                          ?>
                        </td>
                        <td><?= date('d-m-Y', $user['created_at']); ?></td>
                        <td>
                          <a class="badge badge-primary" href="<?= base_url('home/aktivasi') . '?id=' . $user['id']; ?>">
                            Ubah Aktivasi
                          </a>
                        </td>
                      </tr>

                    <?php endforeach; ?>
                  <?php elseif (condition) : ?>
                    <tr>
                      <td colspan="6">Tidak ada data.</td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>

      </div>
      <!-- /.container-fluid -->