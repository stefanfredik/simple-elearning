<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>
<div class="card">
    <div class="card-header">
        Nilai Siswa
    </div>

    <div class="card-body">
        <div>
            <form action="/guru/nilai/getdata" method="POST">
                <div class="row">
                    <div class="col-lg-3">
                        Kelas
                    </div>
                    <div class="col-lg-3">
                        Kategory
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <select required class="form-control" name="kelas" id="">
                            <option value="">Pilih Kelas</option>
                            <?php foreach ($kelas  as $dt) :  ?>
                                <option value="<?= $dt['id']; ?>"><?= $dt['nama_ruangan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-lg-3">
                        <select required class="form-control" name="mapel" id="">
                            <option value="">Pilih Mapel</option>
                            <?php foreach ($mapel  as $dt) :  ?>
                                <option value="<?= $dt['id']; ?>"><?= $dt['nama_mapel']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-lg-2">
                        <input type="submit" required class="btn btn-primary" value="Tampil Nilai">
                    </div>
                </div>
            </form>
            <hr>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Tugas</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Quiz</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Ujian</button>
                </li>
            </ul>


            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                </div>


                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>
        </div>
    </div>
</div>


<!-- <table class="table ">
    <thead class="text-center align-middle ">
        <tr class="">
            <th rowspan="2">No</th>
            <th rowspan="2">Nama Siswa</th>
            <th colspan="2">Tugas</th>
            <th rowspan="2">Total</th>
        </tr>
        <tr>
            <th>Tugas 1</th>
            <th>Tugas 2</th>
        </tr>
    </thead>
</table> -->

<?= $this->endSection(); ?>