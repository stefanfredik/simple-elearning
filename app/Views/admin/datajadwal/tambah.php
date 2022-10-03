<div class="row modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="col-12 modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= "Tambah " . $title; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="/admin/datajadwal/tambah" method="POST">
                <div class="modal-body">
                    <div class="mt-2">
                        <label class="form-label">Hari</label>
                        <select class="form-control" required name="hari">
                            <option value="">Pilih Hari</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumaat">Jumaat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>

                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlTextarea1" class="form-label">Jam</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Masuk</span>
                            <input required name="jamawal" type="time" class="form-control" placeholder="Waktu Masuk">
                            <span class=" input-group-text">Selesai</span>
                            <input required name="jamakhir" type="time" class="form-control" placeholder="Waktu Keluar">
                        </div>
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Kelas</label>

                        <select class="form-control" required name="kelas">
                            <option value="">Pilih Role</option>

                            <?php
                            foreach ($dataKelas as $dk) :
                                foreach ($dataJadwal as $dj) :  ?>
                                <?php endforeach ?>
                                <option value="<?= $dk['id']; ?>"><?= $dk['nama_ruangan']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Mata Pelajaran</label>

                        <select class="form-control" required name="mapel">
                            <option value="">Pilih Mata Pelajaran</option>

                            <?php
                            foreach ($dataMapel as $dm) :
                                foreach ($dataJadwal as $dj) :  ?>
                                <?php endforeach ?>
                                <option value="<?= $dm['id']; ?>"><?= $dm['nama_mapel']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="mt-2">
                        <label class="form-label">Guru</label>

                        <select class="form-control" required name="guru">
                            <option value="">Pilih Guru</option>

                            <?php
                            foreach ($dataGuru as $dg) :
                                foreach ($dataJadwal as $dj) :  ?>
                                <?php endforeach ?>
                                <option value="<?= $dg['id']; ?>"><?= $dg['nama']; ?></option>
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