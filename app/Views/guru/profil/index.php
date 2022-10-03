<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>
<div class="card">
    <div class="card-header">
        <h4><?= ucwords($profile['nama']); ?></h4>
    </div>

    <div class="card-body">
        <div class="row my-2">
            <div class="col-md-3">
                Nama Lengkap
            </div>

            <div class="fw-bold col-md">
                <?= ucwords($profile["nama"]); ?>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md-3">
                Jenis Kelamin
            </div>

            <div class="fw-bold col-md">
                <?= ucwords($profile["jenis_kelamin"]); ?>
            </div>
        </div>

        <div class="row my-2">
            <div class="col-md-3">
                Email
            </div>

            <div class="fw-bold col-md">
                <?= $profile["email"]; ?>
            </div>
        </div>

        <div class="row my-2">
            <div class="col-md-3">
                Kelas Mengajar
            </div>

            <div class="fw-bold col-md">
                <?php foreach ($kelas as $dt) echo $dt["nama_ruangan"] . ", "; ?>
            </div>
        </div>

    </div>
</div>

<hr>

<div class="card">
    <div class="card-header">
        Data Jadwal
    </div>

    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Kelas</th>
                    <th>Mata Pelajaran</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1;
                foreach ($jadwal as $dt) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $dt["hari"]; ?></td>
                        <td><?= $dt["nama_ruangan"]; ?></td>
                        <td><?= $dt["nama_mapel"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>