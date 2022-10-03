<?= $this->extend("template/guru/guruTemplate"); ?>

<?= $this->section("content"); ?>

<div class="card">
    <div class="card-header">
        Halaman quiz
    </div>

    <div class="card-body">
        <a data-bs-toggle="modal" data-bs-target="#tambahquiz" class="m-2 btn btn-primary"> <i class="mx-2 bi bi-plus-square"></i>Tambah quiz Baru</a>
        <!-- <button id="buatquiz" class="btn btn-primary">Buat quiz Baru</button> -->
        <hr>

        <table id="dataquiz" class="table">
            <thead>
                <th></th>
                <th>Keterangan</th>
                <th>Kelas</th>
                <th>Mata Pelajaran</th>
                <th>Dibuat</th>
                <th>Batas Waktu</th>
                <td>Status</td>
                <th>Action</th>
            </thead>


            <tbody>
                <?php $no = 1;
                foreach ($quiz as $dt) : ?>
                    <tr class="align-middle">
                        <td><i class="border p-2 border-primary rounded bi bi-list-task fa-lg text-primary h5"></i></td>
                        <td>
                            <?= $dt["keterangan"]; ?>
                        </td>

                        <td>
                            <?php foreach ($ruangan as $r) : ?>
                                <?= $dt["kelas"] == $r["id"] ? $r["nama_ruangan"] : ""; ?>
                            <?php endforeach; ?>
                        </td>

                        <td>
                            <?php foreach ($mapel as $m) : ?>
                                <?= $dt["mapel"] == $m["id"] ? $m["nama_mapel"] : ""; ?>
                            <?php endforeach; ?>
                        </td>

                        <td><?= $dt["dibuat"]; ?></td>
                        <td><?= $dt["bataswaktu"]; ?></td>

                        <td><span class="badge <?= $dt["status"] == "Tidak Aktif" ? "bg-secondary" : "bg-primary"; ?>"><?= $dt["status"]; ?></span></td>
                        <td> <a class="mx-2 btn btn-sm btn-outline-primary" href="/guru/quiz/download/<?= $dt["file"]; ?>">File</a></td>
                        <td>
                            <a href="/guru/quiz/detail/<?= $dt["id"]; ?>" class="btn btn-sm btn-outline-primary mx-2">Detail</a>
                            <button @click="hapus('/guru/quiz/hapus/<?= $dt['id']; ?>')" class="btn btn-sm btn-danger"><i class="bi bi-x-square"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?= $this->include("guru/quiz/tambah"); ?>

    <?= $this->endSection(); ?>

    <?= $this->section("script"); ?>
    <script>
        $(document).ready(function() {
            $('#dataquiz').DataTable({
                // "bLengthChange": false,
            });
        });
    </script>
    <?= $this->endSection(); ?>