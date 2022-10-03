<?= $this->extend("template/guru/guruTemplate"); ?>
<?= $this->section("content"); ?>
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahModal">
            Tambah informasi
        </button>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table id="informasi" class="table table-striped">
                <thead>
                    <th></th>
                    <th>Kelas</th>
                    <th>Info</th>
                    <th>Dibuat</th>
                    <th>Action</th>
                </thead>

                <tbody class="border">
                    <?php
                    $no = 1;

                    foreach ($informasi as $dt) : ?>
                        <tr>
                            <td><i class="bi bi-book-half fa-lg text-primary"></i></td>
                            <td><?= $dt['nama_ruangan']; ?></td>
                            <td>
                                <div class="row fw-bold">
                                    <?= $dt['judul']; ?>
                                </div>

                                <div class="row">
                                    <?= $dt['isi']; ?>
                                </div>
                            </td>

                            <td>
                                <?= $dt['created_at']; ?>
                            </td>
                            <td></td>
                            <td>
                                <button @click="hapus('/guru/informasi/hapus/<?= $dt['id']; ?>')" class="btn btn-sm btn-outline-danger">Hapus</button>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="/guru/informasi/tambah">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah informasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Judul Informasi</label>
                        <input name="judul" type="text" class="form-control" placeholder="Judul" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
                        <textarea required name="isi" class="form-control" id="" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <select required class="form-control" name="kelas" id="">
                            <option value="">Silahkan Pilih Kelas</option>
                            <?php foreach ($kelas as $kl) :  ?>
                                <option value="<?= $kl['id']; ?>"><?= $kl['nama_ruangan']; ?></option>
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
<?= $this->endSection(); ?>


<?= $this->section("script"); ?>
<script>
    $(document).ready(function() {
        $('#informasi').DataTable({
            responsive: false
        });
    });
</script>

<?= $this->endSection(); ?>