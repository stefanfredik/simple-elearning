<?= $this->extend("template/siswa/siswaTemplate"); ?>


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
                Tingkat Kelas
            </div>

            <div class="fw-bold col-md">
                Kelas <?= ucwords($profile["kelas"]); ?>
            </div>
        </div>

        <div class="row my-2">
            <div class="col-md-3">
                Ruangan Kelas
            </div>

            <div class="fw-bold col-md">
                <?= ucwords($profile["nama_ruangan"]); ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>