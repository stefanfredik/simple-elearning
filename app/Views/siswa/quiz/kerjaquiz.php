<?= $this->extend("template/siswa/siswaTemplate"); ?>


<?= $this->section("content"); ?>
<div class="row mb-2">
    <form enctype="multipart/form-data" method="POST" action="/siswa/quiz/uploadquiz/<?= $quiz[0]["id"]; ?>">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col">Mata Pelajaran</div>
                        <div class="col"><?= $quiz[0]["mapel"]; ?></div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">Guru</div>
                        <div class="col"><?= $quiz[0]["namaguru"]; ?></div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">Batas Waktu</div>
                        <div class="col"><?= $quiz[0]["bataswaktu"]; ?></div>
                    </div>
                    <hr>

                    <?php if (!$selesai) { ?>

                        <label class="mb-2" for="">File quiz</label>
                        <input name="filequiz" type="file" class="form-control mb-2">

                        <label class="mb-2" for="">Keterangan</label>
                        <input name="keterangan" type="text" class="mb-2 form-control">

                        <div hidden>
                            <input type="text" name="guru" value="<?= $quiz[0]["guru"]; ?>">
                        </div>

                        <input type="submit" value="Simpan" class="btn btn-primary">
                    <?php } else { ?>
                        <div class="row flex align-items-center">
                            <div class="col-lg-2">
                                <div><i class="bi bi-check2-square  fs-1 text-success"></i></div>
                            </div>

                            <div class="col-lg">
                                <h5>Anda Telah Menyelsaikan quiz.</h5>
                            </div>
                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>