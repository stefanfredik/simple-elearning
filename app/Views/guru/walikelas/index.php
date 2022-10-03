<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>


<div class="card">
    <div class="card-header">
        Data Mata Pelajaran
    </div>

    <div class="card-body">
        <table class="table">
            <tbody>
                <?php foreach ($allmapel as $dt) : ?>
                    <tr>
                        <td><i class="mx-3 p-1 border rounded text-white bg-primary bi bi-book-fill"></i></td>
                        <td><?= $dt["nama_mapel"]; ?></td>
                        <td><?= $dt["nama"]; ?></td>
                        <td><?= $dt["hari"] . " | " . $dt["jam"] . " Wita"; ?></td>
                        <td><a href="/guru/walikelas/detail/<?= $dt["mapel"]; ?>" class="btn btn-primary">Detail</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- <div class="row">
            <div class="col-lg">
                <i class="mx-3 p-1 border rounded text-white bg-primary bi bi-book-fill"></i>
            </div>

            <div class="col-lg">
                <span>Matematika</span>
            </div>

            <div class="col-lg">
                <span>Guru</span>
            </div>

            <div class="col-lg">
                <span>Detail</span>
            </div>
        </div> -->
    </div>
</div>

<?= $this->endSection(); ?>