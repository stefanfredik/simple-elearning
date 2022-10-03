<?php $validation = \Config\Services::validation(); ?>

<div class="row modal fade" id="tambahujian" tabindex="-1" aria-labelledby="tambahujian" aria-hidden="true">
    <div class="col-12 modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= "Tambah " . $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- <form action="/guru/ujian/tambah" method="POST"> -->
            <?= form_open_multipart('guru/ujian/tambah'); ?>
            <div class="modal-body">
                <div class="mt-2">
                    <label class="form-label">Keterangan</label>
                    <input required type="text" class="form-control" name="keterangan" placeholder="Keterangan">
                </div>

                <div class="mt-2">
                    <label class="form-label">Batas waktu</label>
                    <div class="row">
                        <div class="col">
                            <input name="date" required type="date" class="form-control">
                        </div>

                        <div class="col">
                            <input name="time" required type="time" class="form-control">
                        </div>
                    </div>
                </div>

                <div class=" mt-2">
                    <label class="form-label">Mata Pelajaran</label>
                    <select class="form-control" required name="mapel">
                        <option value="">Pilih Mata Pelajaran</option>
                        <?php foreach ($mapel as $dt) : ?>
                            <option value="<?= $dt['id']; ?>"><?= $dt["nama_mapel"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class=" mt-2">
                    <label class="form-label">Kelas</label>
                    <select class="form-control" required name="kelas">
                        <option value="">Pilih Kelas</option>
                        <?php foreach ($ruangan as $dt) : ?>
                            <option value="<?= $dt['id']; ?>"><?= $dt["nama_ruangan"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mt-2">
                    <label class="form-label">File</label>
                    <input name="file" type="file" class="form-control" required>
                    <label class="form-text">Format file : Document (pdf, doc,docx), Gambar. Ukuran Maximal : 4MB. </label>
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