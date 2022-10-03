<?= $this->extend('template/admin/adminTemplate'); ?>
<?= $this->section('content'); ?>

<div>


    <div class="card mb-4 border border-primary">
        <div class="bg-primary text-white card-header">
            <i class="fas fa-table me-1"></i>
            <?= $title; ?>
            <br>

            <a data-bs-toggle="modal" data-bs-target="#exampleModal" id="tambah" class="m-2 btn btn-primary"> <i class="mx-2 bi bi-plus-square"></i>Tambah <?= $title; ?></a>
        </div>
        <div class="card-body">

            <table class="table  " id="datainformasi">

                <thead class="bg-dark text-white">
                    <tr>
                        <th class="col-1">No</th>
                        <th>Judul</th>
                        <th>Isi Pesan</th>
                        <th>Role</th>
                        <th>Waktu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $no = 1;
                    foreach ($dataInformasi as $data) : ?>
                        <tr>
                            <td><?= $no++; ?> </td>
                            <td><?= $data['judul']; ?></td>
                            <td><?= $data['isi']; ?></td>
                            <td>
                                <?php if ($data['role'] == 1) {
                                    echo "Guru";
                                } else if ($data['role'] == 2) {
                                    echo "Siswa";
                                } else {
                                    echo "Guru dan Siswa";
                                } ?>
                            </td>
                            <td><?= $data['created_at']; ?></td>

                            <td>
                                <button @click="edit('/admin/informasi/edit/',<?= $data['id']; ?>)" class="m-2 btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></button>
                                <button @click="hapus('/admin/informasi/hapus/<?= $data['id']; ?>')" class="btn btn-sm btn-danger"><i class="bi bi-x-square"></i></button>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->include("admin/informasi/tambah") ?>

<?php
$this->session = \Config\Services::session();

if ($dataInformasi = $this->session->getFlashdata("edit")) {
    echo $this->include("admin/informasi/edit");
} ?>

<?= $this->endSection(); ?>

<?= $this->section("script"); ?>

<script>
    $(document).ready(function() {
        $('#datainformasi').DataTable();
    });
</script>
<?= $this->endSection(); ?>