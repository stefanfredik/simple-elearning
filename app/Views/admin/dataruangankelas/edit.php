<?php
$data = $this->session->getFlashdata("edit");
?>

<div class="row modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="col-12 modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title"><?= "Tambah " . $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/admin/datakelas/simpan/<?= $data['id']; ?>" method="POST">
                <div class="modal-body">
                    <div class="mt-2">
                        <label class="form-label">Kode Ruangan Kelas</label>
                        <input value="<?= $data['kode_ruangan']; ?>" required type="text" class="form-control" name="kode_ruangan" placeholder="Masukan Kode Ruangan Kelas">
                    </div>

                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Nama Ruangan Kelas</label>
                        <input value="<?= $data['nama_ruangan']; ?>" required name="nama_ruangan" class="form-control" placeholder="Masukan Nama Ruangan Kelas" />
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Kelas</label>
                        <select class="form-control" required name="kelas">
                            <option>Pilih Kelas</option>
                            <option <?= $data['kelas'] == 1 ? "selected" : ""; ?> value="1">I</option>
                            <option <?= $data['kelas'] == 2 ? "selected" : ""; ?> value="2">II</option>
                            <option <?= $data['kelas'] == 3 ? "selected" : ""; ?> value="3">III</option>
                        </select>
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Jurusan</label>
                        <select class="form-control" required name="jurusan">
                            <option>Pilih Jurusan</option>

                            <?php foreach ($jurusan as $jurusan) : ?>
                                <option <?= $data['jurusan'] == $jurusan['kode_jurusan'] ? "selected" : ""; ?> value="<?= $jurusan['kode_jurusan']; ?>"><?= $jurusan['nama_jurusan']; ?></option>
                            <?php endforeach; ?>
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