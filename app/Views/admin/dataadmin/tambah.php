<?php $validation = \Config\Services::validation(); ?>

<div class="row modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="col-12 modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= "Tambah " . $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/admin/dataadmin/tambah" method="POST">
                <div class="modal-body">
                    <div class="mt-2">
                        <label class="form-label">Email</label>
                        <input required type="email" class="form-control" name="email" placeholder="Masukan Email" value="<?= old('email'); ?>">
                        <span class=" text-danger"><?= $validation->showError('email'); ?></span>
                    </div>

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

                    <hr>

                    <div class="mt-2">
                        <label class="form-label">Nama Admin</label>
                        <input required type="text" class="form-control" name="nama" placeholder="Masukan Nama Admin" value="<?= old('nama'); ?>">
                    </div>



                    <div class=" mt-2">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-control" required name="jenis_kelamin">
                            <option value="">Jenis-Kelamin</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
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