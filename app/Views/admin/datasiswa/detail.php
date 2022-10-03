<?= $this->extend("template/admin/adminTemplate"); ?>


<?= $this->section("content"); ?>
<div class="card">
    <div class="card-header">
        Kelas Yang Di Ikuti
    </div>

    <div class="card-body">
        <?php $no = 1;
        foreach ($ruangan as $dt) : ?>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="<?= $dt["id"]; ?>" id="<?= $dt["id"]; ?>" checked>
                <?= $dt["nama_ruangan"]; ?>
                <!-- <label class="form-check-label" for="<?= $dt["id"]; ?>">

                </label> -->
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>