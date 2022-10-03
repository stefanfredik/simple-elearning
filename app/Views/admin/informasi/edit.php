<?php
$dataInformasi = $this->session->getFlashdata("edit");
?>

<div class="row modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="col-12 modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= "Edit " . $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/admin/informasi/simpan/<?= $dataInformasi['id']; ?>" method="POST">
                <div class="modal-body">
                    <div class="mt-2">
                        <label class="form-label">Judul</label>
                        <input value="<?= $dataInformasi['judul']; ?>" required type="text" class="form-control" name="judul" placeholder="Masukan Judul Informasi">
                    </div>

                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Isi Informasi</label>
                        <textarea required name="isi" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $dataInformasi['isi']; ?></textarea>
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Role</label>
                        <select class="form-control" required name="role">
                            <option>Pilih Role</option>
                            <option <?= $dataInformasi['role'] == 1 ? "selected" : ""; ?> value="1">Guru</option>
                            <option <?= $dataInformasi['role'] == 2 ? "selected" : ""; ?> value="2">Siswa</option>
                            <option <?= $dataInformasi['role'] == 3 ? "selected" : ""; ?> value="3">Siswa dan Guru</option>
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