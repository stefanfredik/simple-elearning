<?= $this->extend("template/siswa/siswaTemplate"); ?>


<?= $this->section("content"); ?>

<?php foreach ($mapel as $dm) : ?>
    <div class="row mb-2">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <?= $dm["nama_mapel"]; ?>
                </div>

                <div class="card-body">
                    <table class="table">
                        <tbody class="border">
                            <?php $i = 0;
                            foreach ($materi as $m) : ?>
                                <?php if ($m["mapel"] == $dm["mapel"]) { ?>
                                    <tr class="">
                                        <td width="12px" class="col"><i class="bi bi-book-half fa-lg text-primary"></i></td>

                                        <td class="col">
                                            <?= $m["keterangan"]; ?>
                                        </td>

                                        <td class="col">
                                            <?= $m["waktu"]; ?>
                                        </td>

                                        <td class="col">
                                            <a class="mx-2 btn btn-sm btn-outline-primary" href="/guru/materi/download/<?= $m["file"]; ?>">Download</a>
                                            <!-- <button class="btn btn-outline-primary btn-sm">Download Materi</button> -->
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<?= $this->endSection();
// foreach ($variable as $key => $value) {
//     # code...
// }

?>