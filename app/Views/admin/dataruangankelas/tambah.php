<div class="row modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="col-12 modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= "Tambah " . $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/admin/datakelas/tambah" method="POST">
                <div class="modal-body">
                    <div class="mt-2">
                        <label class="form-label">Kode Ruangan Kelas</label>
                        <input required type="text" class="form-control" name="kode_ruangan" placeholder="Masukan Kode Ruangan Kelas">
                    </div>

                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Nama Ruangan Kelas</label>
                        <input required name="nama_ruangan" class="form-control" placeholder="Masukan Nama Ruangan Kelas" />
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Kelas</label>
                        <select class="form-control" required name="kelas">
                            <option>Pilih Kelas</option>
                            <option value="1">I</option>
                            <option value="2">II</option>
                            <option value="3">III</option>
                        </select>
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Jurusan</label>
                        <select class="form-control" required name="jurusan">
                            <option>Pilih Jurusan</option>

                            <?php foreach ($jurusan as $jurusan) : ?>
                                <option value="<?= $jurusan['kode_jurusan']; ?>"><?= $jurusan['nama_jurusan']; ?></option>
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