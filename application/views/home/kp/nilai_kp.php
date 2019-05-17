              <!-- Begin Page Content -->
              <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Nilai KP</h1>

                <div class="row">
                  <div class="col-xl-8 col-lg-7 mx-auto text-center">
                    <?= $this->session->flashdata('pesan'); ?>
                  </div>
                </div>

                <!-- Content Row -->
                <div class="row">
                  <div class="col-xl-3 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                              UTS : <h1 class="text-danger"><?= $uts; ?></h1>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-star fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                              SEMINAR : <h1 class="text-danger"><?= $uas; ?></h1>
                            </div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-star fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!-- /.container-fluid -->