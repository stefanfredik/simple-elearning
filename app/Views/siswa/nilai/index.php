<?= $this->extend("template/siswa/siswaTemplate"); ?>
<?= $this->section("content"); ?>
<div class="row mb-2">
    <div class="col-lg">
        <div class="card">
            <div class="card-header">
                Pilih Kelas
            </div>

            <div class="card-body">
                <form action="/siswa/nilai/tampilnilai/" method="POST">
                    <select name="mapel" class="form-control mb-2" name="" id="">
                        <option class="form-control" value="">Pilih Mata Pelajaran</option>
                        <?php foreach ($mapel as $dt) : ?>
                            <option value="<?= $dt["id"]; ?>"><?= $dt["nama_mapel"]; ?></option>
                        <?php endforeach; ?>
                    </select>

                    <input type="submit" value="Tampil Nilai" class="btn btn-primary">
                </form>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>