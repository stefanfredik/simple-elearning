<?= $this->extend('template/admin/adminTemplate'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            <?= $title; ?>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="col-1">No</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($dataUser as $user) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $user['username']; ?></td>
                            <td><?= $user['nama']; ?></td>
                            <td><?= $user['email']; ?></td>
                            <td><?= $user['role']; ?></td>

                            <td><a class="btn btn-sm btn-warning" href=""><i class="bi bi-pencil-square"></i></a> <a class="btn btn-sm btn-danger" href=""><i class="bi bi-x-square"></i></a></td>
                        <tr>
                        <?php endforeach;  ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>