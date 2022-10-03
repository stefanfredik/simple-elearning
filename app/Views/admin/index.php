<?= $this->extend('template/admin/adminTemplate'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="row">
        <div class="col-xl col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <h5>Data Siswa</h5>
                    <hr>
                    <p class=" display-6 text-center"><?= $jSiswa; ?></p>
                </div>

                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/admin/datasiswa">Detail</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl col-md-6">
            <div class="card bg-info text-white mb-4">
                <div class="card-body">
                    <h5>Data Guru</h5>
                    <hr>
                    <p class=" display-6 text-center"><?= $jGuru; ?></p>
                </div>

                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/admin/dataguru">Detail</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <h5>Data Kelas</h5>
                    <hr>
                    <p class=" display-6 text-center"><?= @$jKelas; ?></p>
                </div>

                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/admin/datakelas">Detail</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <h5>Data Admin</h5>
                    <hr>
                    <p class=" display-6 text-center"><?= @$jAdmin; ?></p>
                </div>

                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/admin/dataadmin">Detail</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

        <div class="col-xl col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <h5>Data Informasi</h5>
                    <hr>
                    <p class=" display-6 text-center"><?= @$jInformasi; ?></p>
                </div>

                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/admin/dataadmin">Detail</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>


    </div>

    <hr>

</div>

<?= $this->endSection(); ?>