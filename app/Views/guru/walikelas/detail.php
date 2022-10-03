<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>




<table class="table">
    <div class="thead">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>

                <!-- Tugas -->
                <?php
                helper("Guru/Nilai");
                $tugas = getJumlahTugas($kelaswali[0]["id"], $mapel);
                for ($i = 1; $i <= $tugas; $i++) : ?>
                    <th><?= "Tgs " . $i; ?></th>
                <?php endfor; ?>

                <!-- Quiz -->
                <?php
                helper("Guru/Nilai");
                $quiz = getJumlahQuiz($kelaswali[0]["id"], $mapel);
                for ($i = 1; $i <= $quiz; $i++) : ?>
                    <th><?= "Qz " . $i; ?></th>
                <?php endfor; ?>

                <?php
                $ujian = getJumlahUjian($kelaswali[0]["id"], $mapel);
                for ($i = 1; $i <= $ujian; $i++) : ?>
                    <th><?= "Ujn " . $i; ?></th>
                <?php endfor; ?>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;

            foreach ($datasiswa as $dt) :    ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $dt["nama"]; ?></td>
                    <?php
                    helper("Guru/Nilai");


                    $tugas = getNilaiTugas($dt["id"], $kelaswali[0]["id"], $mapel);
                    foreach ($tugas as $tg) : ?>
                        <td><?= $tg["nilai"]; ?></td>
                    <?php endforeach;

                    $quiz = getNilaiQuiz($dt["id"], $kelaswali[0]["id"], $mapel);
                    foreach ($quiz as $qz) : ?>
                        <td><?= $qz["nilai"]; ?></td>
                    <?php endforeach;

                    $ujian = getNilaiUjian($dt["id"], $kelaswali[0]["id"], $mapel);
                    foreach ($ujian as $uj) : ?>
                        <td><?= $uj["nilai"]; ?></td>
                    <?php endforeach;

                    ?>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </div>
</table>



<?= $this->endSection(); ?>