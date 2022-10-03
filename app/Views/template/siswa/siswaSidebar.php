<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Menu</div>

            <a class="nav-link" href="<?= base_url("/siswa"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-house-fill"></i></div>
                Beranda
            </a>
            <a class="nav-link" href="<?= base_url("/siswa/profil"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-person-circle"></i></div>
                Profil
            </a>

            <div class="sb-sidenav-menu-heading">Kelas</div>

            <a class="nav-link" href="<?= base_url("/siswa/materi"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-book-half"></i></div>
                Materi
            </a>



            <a class="nav-link" href="<?= base_url("/siswa/tugas"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-list-task"></i></div>
                Tugas
            </a>

            <a class="nav-link" href="<?= base_url("/siswa/quiz"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-clipboard2-fill"></i></i></div>
                Quiz
            </a>

            <a class="nav-link" href="<?= base_url("/siswa/ujian"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-layout-text-sidebar"></i></div>
                Ujian
            </a>

            <div class="sb-sidenav-menu-heading">Nilai</div>
            <a class="nav-link" href="<?= base_url("/siswa/nilai"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-list-check"></i></div>
                Daftar Nilai
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Sedang Login</div>
        <?= strtoupper($this->session->get("nama")); ?>
    </div>
</nav>