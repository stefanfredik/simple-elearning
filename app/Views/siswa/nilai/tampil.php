<?= $this->extend("template/siswa/siswaTemplate"); ?>

<?= $this->section("content"); ?>

<div id="nilai">

    <?= $this->include("siswa/nilai/index"); ?>

    <div class="row mb-2">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Daftar Nilai Tugas
                </div>

                <div class="card-body">
                    <div>
                        <table id="tugas" class="table">
                            <thead>
                                <th>No</th>
                                <th>Keterangan</th>
                                <th>Mapel</th>
                                <th>Nilai</th>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                foreach ($tugas as $dt) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= ucwords($dt["keterangan"]); ?></td>
                                        <td><?= $dt["nama_mapel"]; ?></td>
                                        <td><?= $dt["nilai"]; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row mb-2">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Daftar Nilai Quiz
                </div>

                <div class="card-body">
                    <div>
                        <table id="quiz" class="table">
                            <thead>
                                <th>No</th>
                                <th>Keterangan</th>
                                <th>Mapel</th>
                                <th>Nilai</th>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                foreach ($quiz as $dt) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= ucwords($dt["keterangan"]); ?></td>
                                        <td><?= $dt["nama_mapel"]; ?></td>
                                        <td><?= $dt["nilai"]; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row mb-2">
        <div class="col-lg">
            <div class="card">
                <div class="card-header">
                    Daftar Nilai Ujian
                </div>

                <div class="card-body">
                    <div>
                        <table id="ujian" class="table">
                            <thead>
                                <th>No</th>
                                <th>Keterangan</th>
                                <th>Mapel</th>
                                <th>Nilai</th>
                            </thead>

                            <tbody>
                                <?php $no = 1;
                                foreach ($ujian as $dt) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= ucwords($dt["keterangan"]); ?></td>
                                        <td><?= $dt["nama_mapel"]; ?></td>
                                        <td><?= $dt["nilai"]; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>