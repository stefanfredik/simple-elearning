<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>
<div class="card">
    <div class="card-header">
        quiz
    </div>

    <div class="card-body">
        <table id="detailquiz" class="table table-strip">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>File</th>
                    <th>Keterangan</th>
                    <th>Diupload</th>
                    <th>Nilai</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($quiz as $dt) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $dt['nama']; ?></td>

                        <td><a class="badge bg-primary" href="/guru/quiz/file/<?= $dt["filequiz"]; ?>">Lihat FIle</a></td>

                        <td><?= $dt['keterangan']; ?></td>
                        <td><?= $dt["waktuupload"]; ?></td>
                        <td><?= $dt["nilai"] == "0" ? "<label class='badge bg-dark'>Belum ada Nilai</label>" : $dt["nilai"]; ?></td>
                        <td>
                            <button onclick="getData(<?= $dt['id']; ?>,<?= $dt['siswa']; ?>)" href="/guru/quiz/nilai/<?= $dt["siswa"]; ?>" type="button" class="btn btn-primary">
                                Beri Nilai
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="nilai" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Masukan Nilai quiz</label>
                    <input id="nilaiquiz" class="form-control" type="text" name="nilai" class="text">
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button onclick="simpanNilai()" type="button" class="btn btn-primary">Simpan</button>
                </div>
        </form>
    </div>
</div>
</div>


<?= $this->endSection(); ?>

<?= $this->section("script"); ?>


<script>
    const modalNilai = new bootstrap.Modal(document.getElementById("nilai"), {
        keybord: false
    });
    let siswa, idquiz;

    function getData(t, s) {
        siswa = s;
        idquiz = t;

        modalNilai.show();


    }

    function simpanNilai() {
        let nilai = document.getElementById("nilaiquiz").value;

        console.log(siswa)
        console.log(idquiz)
        console.log(nilai)

        axios.post('/guru/quiz/nilai', {
            idquiz: idquiz,
            siswa: siswa,
            nilai: nilai
        }).then((data) => {
            // console.log(data);
            location.reload();
        });



        // location.href = `/guru/quiz/nilai/${nilai}`
    }
</script>

<script>
    $(document).ready(function() {
        $('#detailquiz').DataTable({
            // "bLengthChange": false,
        });
    });
</script>

<?= $this->endSection(); ?>