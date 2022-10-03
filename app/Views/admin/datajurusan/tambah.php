<div class="row modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="col-12 modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= "Tambah " . $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/admin/datajurusan/tambah" method="POST">
                <div class="modal-body">
                    <div class="mt-2">
                        <label class="form-label">Kode Jurusan</label>
                        <input required type="text" class="form-control" name="kode_jurusan" placeholder="Masukan Kode Jurusan">
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Nama Jurusan</label>
                        <input required type="text" class="form-control" name="nama_jurusan" placeholder="Masukan Nama Jurusan">
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