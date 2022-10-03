<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>
<div class="row">
    <?php foreach ($kelas as $dt) :  ?>

        <div class="col-md-3">
            <div class="bg-primary text-white card my-2">
                <div class="card-header">
                    <h3><?= $dt["nama_ruangan"]; ?></h3>
                </div>

                <div class="card-body bg-dark">
                    <a class="badge text-white bg-primary" href="/guru/kelas/detail/<?= $dt["id"]; ?>">Detail Kelas</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>