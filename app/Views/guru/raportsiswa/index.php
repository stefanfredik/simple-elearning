<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>

<div class="card">
    <div class="card-header">
        Daftar Raport Nilai Siswa
    </div>


    <div class="card-body">
        <table class="table">
            <tbody>
                <?php foreach ($siswakelas as $dt) : ?>
                    <tr>
                        <td><i class="mx-3 p-1 border rounded text-white bg-primary bi bi-book-fill"></i></td>
                        <td><?= ucwords($dt["nama"]); ?></td>
                        <td><a class="btn btn-secondary" href="/guru/raportsiswa/detail/<?= $dt["id"]; ?>"><i class="mx-2 bi bi-printer-fill"></i>Cetak Raport</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->endSection(); ?>