      <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->
          <h2 class="font-weight-bold text-dark">Mau beli rumah?</h2<br>

              <h4 class="text-dark">Dapatkan info rumah di CariRumah.com</h4>
              <!-- Topbar Search -->

              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form><br>

              <div class="row">
                  <?php foreach ($iklan as $row) :  ?>
                      <!-- Earnings (Monthly) Card Example -->

                      <div class="col-xl-3 col-md-6 mb-4">
                          <div class="card shadow h-100 ">
                              <div class="card-body ">
                                  <img class="img-fluid img-thumbnail" alt="Responsive image" src="<?= base_url('assets/img/iklan/' . $row['foto']); ?>">

                              </div>

                              <div class=" card-footer bg-white">
                                  <label class="border border-secondary rounded-right text-dark">&nbsp;<?= $row['sertifikat']; ?> &nbsp;</label>
                                  <label class="border border-secondary rounded-right text-dark">&nbsp; <?= $row['kamar']; ?> Kamar &nbsp;</label>

                                  <div class="col text-right">
                                      <a href="<?= base_url('login'); ?>" style="color: green;">Selengkapnya</a>
                                  </div><br>
                              </div>
                          </div>
                      </div>
                  <?php endforeach;  ?>


              </div>

      </div>
      <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->