<?= $this->extend("template/siswa/siswaTemplate"); ?>

<?= $this->section("content"); ?>
<div class="card">
    <div class="card-header">
        Daftar Quiz
    </div>

    <div class="card-body">
        <?php  ?>

        <table class="table">
            <tbody class="border">
                <?php $no = 1;
                foreach ($quiz as $dt) : ?>
                    <tr>
                        <!-- <td><?= $no++; ?></td> -->
                        <td><i class="text-primary bi bi-file-earmark-medical fa-lg"></i></td>
                        <td class="fw-bold"><?= $dt["mapel"] ?></td>
                        <td><?= $dt["namaguru"] ?></td>
                        <td><?= $dt["bataswaktu"]; ?></td>
                        <td><a href="/guru/quiz/download/<?= $dt['file']; ?>" class="badge bg-primary">File Quiz</a></td>
                        <td><span class=" badge bg-primary"><?= $dt["status"]; ?></span></td>
                        <td><a href="/siswa/quiz/kerjaquiz/<?= $dt["id"]; ?>" class="btn btn-sm btn-outline-primary">Selsaikan</a></td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>

    </div>
</div>
<?= $this->endSection(); ?>