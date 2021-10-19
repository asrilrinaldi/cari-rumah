<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body pb-0">
                <div class="col-lg">
                    <h1>Daftar Akun</h1><br>
                    <?php if (session()->getFlashdata('gagal')) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('gagal') ?></div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('sukses')) : ?>
                        <div class="alert alert-info"><?= session()->getFlashdata('sukses') ?></div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url(); ?>/daftar/daftar">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" id="nama" placeholder="Nama Lengkap">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" name="email" id="email" placeholder="Email">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" name="password" id="password" placeholder="Password">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control  " name="level" id="level" value="2">
                        </div>
                        <div class="col text-center">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                        <div class="col text-center">
                            <a href="<?= base_url('login'); ?>">Sudah punya akun?</a>
                        </div><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>