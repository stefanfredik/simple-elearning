<?php
$data = $this->session->getFlashdata("edit");
?>


<div class="row modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="col-12 modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= "Edit " . $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/admin/datajurusan/simpan/<?= $data['id_jurusan']; ?>" method="POST">
                <div class="modal-body">
                    <div class="mt-2">
                        <label class="form-label">Kode Jurusan</label>
                        <input value="<?= $data['kode_jurusan']; ?>" required type="text" class="form-control" name="kode_jurusan" placeholder="Masukan Kode Jurusan">
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Nama Jurusan</label>
                        <input value="<?= $data['nama_jurusan']; ?>" required type="text" class="form-control" name="nama_jurusan" placeholder="Masukan Nama Jurusan">
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