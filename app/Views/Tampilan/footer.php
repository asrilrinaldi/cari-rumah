  <!-- Footer -->
  <footer class="sticky-footer bg-white">
      <div class="container my-auto">
          <div class="copyright text-center my-auto">
              <span>Copyright &copy; Asril Rinaldi <?= date('Y') ?></span>
          </div>
      </div>
  </footer>
  <!-- End of Footer -->
  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url()  ?>/assets/js/jquery-3.6.0.min.js"></script>
  <script src="<?= base_url()  ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()  ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url()  ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url()  ?>/assets/js/sb-admin-2.min.js"></script>
  <!-- my script -->
  <script src="assets/js/script.js"></script>

  <script>
      $(document).on('click', '#btn-hapus', function() {
          $('.modal-hapus #id').val($(this).data('id'));
      })
  </script>
  <script>
      $(document).on('click', '#btn-edit', function() {
          $('.modal-edit #id').val($(this).data('id'));
          $('.modal-edit #nama').val($(this).data('nama'));
          $('.modal-edit #password').val($(this).data('password'));
          $('.modal-edit #level').val($(this).data('level'));
      })
  </script>
  <script>
      $(document).on('click', '#btn-logout', function() {
          $('.modal-logout #id').val($(this).data('id'));
      })
  </script>

  </body>

  </html>