<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>


<div class="card">
    <div class="card-header">
        <?= $siswa["nama"]; ?>
    </div>


    <div class="card-body">
        <div class="row mt-2">
            <div class="col-lg">Nama</div>
            <div class="col-lg"><?= ucwords($siswa["nama"]); ?></div>
        </div>

        <div class="row mt-2">
            <div class="col-lg">Ruangan Kelas</div>
            <div class="col-lg"><?= $ruangan["nama_ruangan"]; ?></div>
        </div>

        <div class="row mt-2">
            <div class="col-lg">Jenis Kelamin</div>
            <div class="col-lg"><?= ucwords($siswa["jenis_kelamin"]); ?></div>
        </div>

        <hr>
        <h5>Tabel Nilai</h5>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mata Pelajaran</th>
                    <th>KKM</th>
                    <th>R. Tugas</th>
                    <th>R. Quiz</th>
                    <th>R. Ujian</th>
                    <th>Rata-rata</th>
                    <!-- <th>Huruf</th> -->
                    <th>Keterangan</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1;
                foreach ($mapel as $dt) :       ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $dt["nama_mapel"]; ?></td>
                        <td>
                            <?php
                            helper("Guru/Walikelas");
                            helper("Guru/Nilai");

                            echo getKkm($dt["mapel"])["kkm"];
                            ?>
                        </td>
                        <td>
                            <?php $totalNilaiTugas = totalTugas($siswa['id'], $dt["mapel"], $ruangan["id"]);
                            $jumlahTugas = getJumlahTugas($ruangan["id"], $dt["mapel"]);
                            if ($totalNilaiTugas == 0) {
                                echo 0;
                                $rataTugas = 0;
                            } else {
                                echo $rataTugas = $totalNilaiTugas / $jumlahTugas;
                            }
                            ?>
                        </td>

                        <td>
                            <?php $totalNilaiQuiz = totalQuiz($siswa['id'], $dt["mapel"], $ruangan["id"]);
                            $jumlahQuiz = getJumlahQuiz($ruangan["id"], $dt["mapel"]);
                            if ($totalNilaiQuiz == 0) {
                                echo 0;
                                $rataQuiz = 0;
                            } else {
                                echo $rataQuiz = $totalNilaiQuiz / $jumlahQuiz;
                            }
                            ?>
                        </td>

                        <td>
                            <?php $totalNilaiUjian = totalUjian($siswa['id'], $dt["mapel"], $ruangan["id"]);
                            $jumlahUjian = getJumlahUjian($ruangan["id"], $dt["mapel"]);
                            if ($totalNilaiUjian == 0) {
                                echo 0;
                                $rataUjian = 0;
                            } else {
                                echo $rataUjian = $totalNilaiUjian / $jumlahUjian;
                            }
                            ?>
                        </td>

                        <td>
                            <?php
                            $rataTotal = ($rataTugas + $rataQuiz + $rataUjian) / 3;


                            if ($rataTotal == 0) {
                                echo "Belum Ada Nilai.";
                            } else {
                                echo number_format($rataTotal, 2);
                            }
                            ?>
                        <td>
                            <?= $rataTotal > getKkm($dt["mapel"])["kkm"] ? "<span class='badge bg-success'>Terlampaui</span>" : "<span class='badge bg-danger'>Tidak Terlampaui</span>" ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?= $this->endSection(); ?>