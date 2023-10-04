        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">ProfilKu</h1>
          <div class="row">
            <div class="col-lg">
              <?= $this->session->flashdata('') ?>
            </div>
          </div>
          <div class="col-md-5 ">
            <div class="card-header bg-secondary text-white"> Hai, Selamat Datang!<?= $user['name']; ?></div>
            <div class="card mb-3 col-lg-8" style="max-width: 540px;">
              <div class="row no-gutters ">
                <div class="col-md-6">
                  <div class="card-body">
                    <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="card-img">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h5 class="card-title"><?= $user['name']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?></p>
                    <p class="card-text"><?= $user['alamat']; ?></p>
                    <p class="card-text">Menjadi member sejak</p>
                    <?= $user['date']; ?></p>
                  </div>
                </div>
              </div>
            </div>
            
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->