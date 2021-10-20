<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card o-hidden border-0 my-5">
            <div class="card-body pb-0">
                <div class="col-lg">
                    <h4>Pasang Iklan</h4><br>
                    <?php if (session()->getFlashdata('gagal')) : ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('gagal') ?></div>
                    <?php endif; ?>
                    <?php if (session()->getFlashdata('sukses')) : ?>
                        <div class="alert alert-info"><?= session()->getFlashdata('sukses') ?></div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url(); ?>/penjual/iklan" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <div class="form-group">
                            <label class="form-label">Nama Iklan</label>
                            <input type="text" class="form-control <?= ($validation->hasError('namaiklan')) ? 'is-invalid' : ''; ?>" name="namaiklan" id="namaiklan" placeholder="Nama Iklan">
                            <div class="invalid-feedback">
                                <?= $validation->getError('namaiklan'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Foto </label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" name="foto" id="foto">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('foto'); ?>
                                </div>
                                <label class="custom-file-label" for="foto">Choose file</label>
                            </div>

                        </div>

                        <div class="col text-right">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>