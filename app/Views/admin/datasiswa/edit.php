<?php
$data = $this->session->getFlashdata("edit");
?>

<div class="row modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="col-12 modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= "Tambah " . $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/admin/datasiswa/simpan/<?= $data['id']; ?>" method="POST">
                <div class="modal-body">
                    <div class="mt-2">
                        <label class="form-label">Nama Guru</label>
                        <input value="<?= $data['nama']; ?>" required type="text" class="form-control" name="nama" placeholder="Masukan Nama Guru">
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Email</label>
                        <input value="<?= $data['email']; ?>" required type="email" class="form-control" name="email" placeholder="Masukan Email">
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Jenis Kelamin</label>
                        <select class="form-control" required name="jenis_kelamin">
                            <option value="">Jenis-Kelamin</option>
                            <option <?= $data['jenis_kelamin'] == 'laki-laki'  ? "selected" : ""; ?> value="laki-laki">Laki-Laki</option>
                            <option <?= $data['jenis_kelamin'] == 'perempuan'  ? "selected" : ""; ?> value="perempuan">Perempuan</option>
                        </select>
                    </div>

                    <div class=" mt-2">
                        <label class="form-label">Ruangan</label>
                        <select class="form-control" required name="ruangan">
                            <option value="">Pilih Ruangan</option>
                            <?php $no = 1;
                            foreach ($ruangan as $dt) : ?>
                                <option value="<?= $dt["id"]; ?>"><?= $dt["nama_ruangan"]; ?></option>
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