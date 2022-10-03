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

            <table class="table" id="datamapel">

                <thead class="bg-dark text-white">
                    <tr>
                        <th class="col-1">No</th>
                        <th>Kode Mata Pelajaran</th>
                        <th>Nama Mata Pelajaran</th>
                        <th>Nilai KKM</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $no = 1;
                    foreach ($dataMapel as $data) : ?>
                        <tr>
                            <td><?= $no++; ?> </td>
                            <td><?= $data['kode_mapel']; ?></td>
                            <td><?= $data['nama_mapel']; ?></td>
                            <td><?= $data['kkm']; ?></td>

                            <td>
                                <button @click="edit('/admin/datamapel/edit/',<?= $data['id']; ?>)" class="m-2 btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></button>
                                <button @click="hapus('/admin/datamapel/hapus/<?= $data['id']; ?>')" class="btn btn-sm btn-danger"><i class="bi bi-x-square"></i></button>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->include("admin/datamapel/tambah") ?>

<?php
$this->session = \Config\Services::session();

if ($data = $this->session->getFlashdata("edit")) {
    echo $this->include("admin/datamapel/edit");
} ?>

<?= $this->endSection(); ?>

<?= $this->section("script"); ?>

<script>
    $(document).ready(function() {
        $('#datamapel').DataTable();
    });
</script>
<?= $this->endSection(); ?>