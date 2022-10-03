<?php
$data = $this->session->getFlashdata("edit");
// dd($data);
?>

<div class="row modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="col-12 modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= "Edit " . $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/admin/datajadwal/simpan/<?= $data['id']; ?>" method="POST">
                <div class="modal-body">
                    <div class="mt-2">
                        <label class="form-label">Hari</label>
                        <select class="form-control" required name="hari">
                            <option value="">Pilih Hari</option>
                            <option <?= $data['hari'] == 'Senin' ? "selected" : ""; ?> value="Senin">Senin</option>
                            <option <?= $data['hari'] == 'Selasa' ? "selected" : ""; ?> value="Selasa">Selasa</option>
                            <option <?= $data['hari'] == 'Rabu' ? "selected" : ""; ?> value="Rabu">Rabu</option>
                            <option <?= $data['hari'] == 'Kamis' ? "selected" : ""; ?> value="Kamis">Kamis</option>
                            <option <?= $data['hari'] == 'Jumaat' ? "selected" : ""; ?> value="Jumaat">Jumaat</option>
                            <option <?= $data['hari'] == 'Sabtu' ? "selected" : ""; ?> value="Sabtu">Sabtu</option>
                            <option <?= $data['hari'] == 'Minggu' ? "selected" : ""; ?> value="Minggu">Minggu</option>
                        </select>
                    </div>

                    <div class="mb-3 mt-2">

                        <?php $jam = explode(" - ", $data['jam']); ?>

                        <label for="exampleFormControlTextarea1" class="form-label">Jam</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Masuk</span>
                            <input value="<?= $jam[0]; ?>" required name="jamawal" type="time" class="form-control" placeholder="Waktu Masuk">
                            <span class=" input-group-text">Selesai</span>
                            <input value="<?= $jam[1]; ?>" required name=" jamakhir" type="time" class="form-control" placeholder="Waktu Keluar">
                        </div>
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Kelas</label>

                        <select class="form-control" required name="kelas">
                            <option value="">Pilih Role</option>

                            <?php
                            foreach ($dataKelas as $dk) : ?>
                                <option <?= $dk['id'] == $data['kelas'] ? "selected" : "" ?> value="<?= $dk['id']; ?>"><?= $dk['nama_ruangan']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Mata Pelajaran</label>

                        <select class="form-control" required name="mapel">
                            <option value="">Pilih Mata Pelajaran</option>

                            <?php
                            foreach ($dataMapel as $dm) : ?>
                                <option <?= $dm['id'] == $data['mapel'] ? "selected" : "" ?> value="<?= $dm['id']; ?>"><?= $dm['nama_mapel']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Guru</label>

                        <select class="form-control" required name="guru">
                            <option value="">Pilih Guru</option>

                            <?php
                            foreach ($dataGuru as $dg) : ?>
                                <option <?= $dg['id'] == $data['guru'] ? "selected" : "" ?> value="<?= $dg['id']; ?>"><?= $dg['nama']; ?></option>
                            <?php endforeach ?>
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