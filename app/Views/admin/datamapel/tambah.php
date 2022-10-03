<div class="row modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="col-12 modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= "Tambah " . $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/admin/datamapel/tambah" method="POST">
                <div class="modal-body">
                    <div class="mt-2">
                        <label class="form-label">Kode Mata Pelajaran</label>
                        <input required type="text" class="form-control" name="kode_mapel" placeholder="Masukan Kode Mata Pelajaran">
                    </div>

                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Nama Mata Pelajaran</label>
                        <textarea required name="nama_mapel" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Nilai KKM</label>
                        <input required type="number" class="form-control" name="kkm" placeholder="Masukan Nilai KKM">
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