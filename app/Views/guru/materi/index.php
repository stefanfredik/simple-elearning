<?= $this->extend("template/guru/guruTemplate"); ?>
<?= $this->section("content"); ?>
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
            Tambah Materi
        </button>
    </div>

    <div class="card-body">
        <table id="materi" class="table table-striped">
            <thead>
                <th></th>
                <th>Kelas</th>
                <th>Mapel</th>
                <th>Keterangan</th>
                <th>Waktu Upload</th>
                <th>File</th>
            </thead>
            <tbody class="border">
                <?php
                $no = 1;
                foreach ($materi as $dt) : ?>
                    <tr>
                        <td><i class="bi bi-book-half fa-lg text-primary"></i></td>
                        <td><?= $dt["nama_ruangan"]; ?></td>
                        <td><?= $dt["nama_mapel"]; ?></td>
                        <td><?= $dt["keterangan"]; ?></td>
                        <td><?= $dt["waktu"]; ?></td>
                        <td>
                            <a class="mx-2 btn btn-sm btn-outline-primary" href="/guru/materi/download/<?= $dt["file"]; ?>">Download</a>
                            <button @click="hapus('/guru/materi/hapus/<?= $dt['idmateri']; ?>')" class="btn btn-sm btn-outline-danger">Hapus</button>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?= form_open_multipart('guru/materi/tambah'); ?>
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Materi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row mb-2">
                    <div class="col-lg-4">
                        Kelas
                    </div>

                    <div class="col-lg-8">
                        <select required name="kelas" class="form-control" id="">
                            <option value="">Pilih kelas</option>
                            <?php foreach ($kelas as $dt) :  ?>
                                <option value="<?= $dt["id"]; ?>"><?= $dt["nama_ruangan"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-4">
                        Mata Pelajaran
                    </div>

                    <div class="col-lg-8">
                        <select required name="mapel" class="form-control" id="">
                            <option value="">Pilih Mata Pelajaran</option>
                            <?php foreach ($mapel as $dt) :  ?>
                                <option value="<?= $dt["id"]; ?>"><?= $dt["nama_mapel"]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-4">
                        Keterangan
                    </div>

                    <div class="col-lg-8">
                        <input name="keterangan" type="text" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-lg-4">
                        File
                    </div>

                    <div class="col-lg-8">
                        <input name="file" type="file" class="form-control" required>
                        <label class="form-text">Format file : Document (pdf, doc,docx), Gambar. Ukuran Maximal : 4MB. </label>
                    </div>
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
<?= $this->endSection(); ?>


<?= $this->section("script"); ?>
<script>
    $(document).ready(function() {
        $('#materi').DataTable();
    });
</script>

<?= $this->endSection(); ?>