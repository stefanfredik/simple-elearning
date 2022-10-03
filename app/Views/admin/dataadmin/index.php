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
            <table class="table border" id="datadmin">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $no = 1;
                    foreach ($dataAdmin as $data) : ?>
                        <tr>
                            <td><?= $no++; ?> </td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['email']; ?></td>
                            <td><?= $data['jenis_kelamin']; ?></td>

                            <td>
                                <button @click="edit('/admin/dataadmin/edit/','<?= $data['id']; ?>')" class="m-2 btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></button>
                                <button @click="hapus('/admin/dataadmin/hapus/<?= $data['id']; ?>')" class="btn btn-sm btn-danger" href="/admin/datadmin/hapus/<?= $data['id']; ?>"><i class="bi bi-x-square"></i></button>

                                <button @click="edit('/admin/dataadmin/ubahpassword/','<?= $data['id']; ?>')" class="mx-4 m-2 btn btn-sm btn-primary"><i class="bi bi-key"></i></i></button>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->include("admin/dataadmin/tambah") ?>

<?php
$this->session = \Config\Services::session();

if ($data = $this->session->getFlashdata("edit")) {
    echo $this->include("admin/dataadmin/edit");
}

if ($data = $this->session->getFlashdata("ubahpassword")) {
    echo $this->include("admin/dataadmin/editpassword");
} ?>




<?= $this->endSection(); ?>


<!-- -------------------------- Script Triger Modal : kalau ada error------------------------------- -->
<?= $this->section("script"); ?>
<?php $val = \Config\Services::validation(); ?>
<script>
    <?php if ($this->session->getFlashdata("tambah")) { ?>
        var tambahModal = document.getElementById('exampleModal')
        var modal = new bootstrap.Modal(tambahModal);
        modal.show();
    <?php } ?>

    <?php if ($this->session->getFlashdata("password")) { ?>
        var editModal = document.getElementById('editModal')
        var modal = new bootstrap.Modal(editModal);
        modal.show();
    <?php } ?>

    $(document).ready(function() {
        $('#datadmin').DataTable();
    });
</script>

<?= $this->endSection(); ?>