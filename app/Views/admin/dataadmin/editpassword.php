<?php $validation = \Config\Services::validation(); ?>
<?php
$data = $this->session->getFlashdata("ubahpassword");
?>
<div class="row modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="col-12 modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= "Edit Password " ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/admin/dataadmin/simpanpassword/<?= $data['id']; ?>" method="POST">
                <?php $validation = \Config\Services::validation(); ?>
                <div class="modal-body">
                    <div class="mt-2">
                        <label class="form-label">Password</label>
                        <input required type="password" class="form-control" name="password" placeholder="Masukan Password">
                        <p class=" text-danger"><?= $validation->showError('password'); ?></p>
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Konfirmasi Password</label>
                        <input required type="password" name="konfirmasi_password" class="form-control" placeholder="Masukan Ulang Password">
                        <span class="text-danger"><?= $validation->showError('konfirmasi_password'); ?></span>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>