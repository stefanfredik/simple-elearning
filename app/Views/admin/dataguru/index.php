<?= $this->extend('template/admin/adminTemplate'); ?>
<?= $this->section('content'); ?>

<div>


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <?= $title; ?>
            <br>

            <a data-bs-toggle="modal" data-bs-target="#exampleModal" id="tambah" class="m-2 btn btn-primary"> <i class="mx-2 bi bi-plus-square"></i>Tambah Data Guru</a>
        </div>
        <div class="card-body">

            <table class="table border" id="dataguru">

                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Nama</th>
                        <th>Status</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    $no = 1;
                    foreach ($dataGuru as $data) : ?>
                        <tr>
                            <td><?= $no++; ?> </td>
                            <td><?= $data['nama']; ?></td>
                            <td><?= $data['status'] != "Pengajar" ? "<p class='badge bg-info'>Walikelas : " . $data["nama_ruangan"] . "</p>" : "<p class='badge bg-primary'>Pengajar</Pengajar>"; ?></td>
                            <td><?= $data['email']; ?></td>

                            <td><?= $data['jenis_kelamin']; ?></td>

                            <td>
                                <button @click="edit('/admin/dataguru/edit/','<?= $data['id']; ?>')" class="m-2 btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></button>
                                <button @click="hapus('/admin/dataguru/hapus/<?= $data['id']; ?>')" class="btn btn-sm btn-danger" href="/admin/dataguru/hapus/<?= $data['id']; ?>"><i class="bi bi-x-square"></i></button>

                                <button @click="edit('/admin/dataguru/ubahpassword/','<?= $data['id']; ?>')" class="mx-4 m-2 btn btn-sm btn-primary"><i class="bi bi-key"></i></i></button>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->include("admin/dataguru/tambah") ?>

<?php
$this->session = \Config\Services::session();

if ($data = $this->session->getFlashdata("edit")) {
    echo $this->include("admin/dataguru/edit");
}

if ($data = $this->session->getFlashdata("ubahpassword")) {
    echo $this->include("admin/dataguru/editpassword");
} ?>

<?= $this->endSection(); ?>


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
        $('#dataguru').DataTable();
    });



    // Wali Kelas

    const walikelas = document.getElementById("walikelas");
    const pengajar = document.getElementById("pengajar");
    const daftarkelas = document.getElementById("daftarkelas");

    walikelas.addEventListener("click", () => {
        daftarkelas.hidden = false;
    });

    pengajar.addEventListener("click", () => {
        daftarkelas.hidden = true;
    })


    const walikelas2 = document.getElementById("walikelas2");
    const pengajar2 = document.getElementById("pengajar2");
    const daftarkelas2 = document.getElementById("daftarkelas2");

    walikelas2.addEventListener("click", () => {
        daftarkelas2.hidden = false;
    });

    pengajar2.addEventListener("click", () => {
        daftarkelas2.hidden = true;
    })
</script>

<?= $this->endSection(); ?>