      <!-- Begin Page Content -->
      <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Cards</h1>
          </div>

          <div class="row">
              <?php foreach ($iklan as $row) :  ?>
                  <!-- Earnings (Monthly) Card Example -->

                  <div class="col-xl-4 col-md-6 mb-4">
                      <div class="card shadow h-100 ">
                          <div class="card-body">
                              <img class="img-fluid img-thumbnail" style="height:200px; width: 300px;" alt="Responsive image" src="<?= base_url('assets/img/iklan/' . $row['foto']); ?>">
                              <p class="card-title text-gray-800"><?= substr($row['nama'], 0, 30); ?>...</p>
                          </div>
                      </div>
                  </div>
              <?php endforeach;  ?>


          </div>

      </div>
      <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->