<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>
<div class="card">
    <div class="card-header">
        Daftar Mata Pelajaran
    </div>

    <div class="card-body">
        <?php foreach ($mapel as $dt) : ?>
            <div class="row">
                <div class="col">
                    <i class="text-primary bi bi-book mx-2"></i>
                    <span class="fw-bold"><?= $dt["nama_mapel"]; ?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<hr />

<div class="card">
    <div class="card-header">
        Daftar Siswa Kelas <?= $kelas["nama_ruangan"]; ?>
    </div>
    <div class="card-body">
        <table id="datasiswa" class="table border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1;
                foreach ($siswa as $dt) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $dt["nama"]; ?></td>
                        <td><?= $dt["jenis_kelamin"]; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section("script"); ?>
<script>
    $(document).ready(function() {
        $('#datasiswa').DataTable({
            // "bLengthChange": false,
        });
    });
</script>
<?= $this->endSection(); ?>