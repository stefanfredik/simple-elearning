<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Materi</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/guru/materi">Lihat Materi</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Tugas</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/guru/tugas">Lihat Tugas</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Quiz</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/guru/quiz">Lihat Quiz</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Ujian</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/guru/ujian">Lihat Ujian</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        Informasi
    </div>

    <div class="card-body">
        <?php foreach ($info as $dt) : ?>
            <div class="row">
                <div class="text-primary col-md-1 d-flex justify-content-center">
                    <i class="bi bi-info-circle fa-2x"></i>
                </div>

                <div class="col-md-8">
                    <div class="row fw-bold">
                        <?= ucwords($dt['judul']); ?>
                    </div>

                    <div class="row">
                        <?= $dt['isi']; ?>
                    </div>
                </div>

                <div class="col-md-2 ">
                    <p class="badge bg-dark"><?= $dt['created_at']; ?></p>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>