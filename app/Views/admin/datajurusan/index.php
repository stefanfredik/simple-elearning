<?= $this->extend('template/admin/adminTemplate'); ?>
<?= $this->section('content'); ?>

<div>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <?= $title; ?>
            <br>

            <a data-bs-toggle="modal" data-bs-target="#exampleModal" id="tambah" class="m-2 btn btn-primary"> <i class="mx-2 bi bi-plus-square"></i>Tambah <?= $title; ?></a>
        </div>
        <div class="card-body">

            <table class="table border" id="datajurusan">

                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Kode Jurusan</th>
                        <th>Nama Jurusan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $no = 1;
                    foreach ($dataJurusan as $data) : ?>
                        <tr>
                            <td><?= $no++; ?> </td>
                            <td><?= $data['kode_jurusan']; ?></td>
                            <td><?= $data['nama_jurusan']; ?></td>
                            <td>
                                <button @click="edit('/admin/datajurusan/edit/','<?= $data['id_jurusan']; ?>')" class="m-2 btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-sm btn-danger" @click="hapus('/admin/datajurusan/hapus/<?= $data['id_jurusan']; ?>')"><i class="bi bi-x-square"></i></button>
                            </td>
                        </tr>

                    <?php endforeach; ?>



                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- Modal Tambah Data -->

<?= $this->include('admin/datajurusan/tambah'); ?>

<?php
$this->session = \Config\Services::session();

if ($data = $this->session->getFlashdata("edit")) {
    echo $this->include("admin/datajurusan/edit");
} ?>




<?= $this->endSection(); ?>


<?= $this->section("script"); ?>

<script>
    $(document).ready(function() {
        $('#datajurusan').DataTable();
    });
</script>
<?= $this->endSection(); ?>