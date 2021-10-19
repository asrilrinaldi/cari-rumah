<!-- Modal Login -->
<div class="modal fade" id="modalLogin">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('home/Login'); ?>" method="POST">
                    <div class="form-group mb-0">
                        <label for="id">Email</label><br>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan email">
                    </div><br>
                    <div class="form-group mb-0">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password">
                    </div><br>
                    <div class="form-group mb-0">
                        <input type="checkbox" value="" id="rememberPasswordCheck">
                        <label for="rememberPasswordCheck">
                            Remember password
                        </label>
                    </div>
                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit"><i class="fas fa-sign-in-alt fa-fw"></i>&nbsp;Masuk</button>
            </div>

            </form>
        </div>
    </div>
</div>
<!-- END Modal Tambah Teacher -->