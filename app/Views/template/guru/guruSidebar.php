<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Menu</div>

            <a class="nav-link" href="<?= base_url("/guru"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-house-fill"></i></div>
                Beranda
            </a>

            <a class="nav-link" href="<?= base_url("/guru/profil"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-person-circle"></i></div>
                Profil
            </a>

            <?php

            use App\Models\Admin\AdminGuruModel;

            $dataguru = new AdminGuruModel();


            $kelas = $dataguru->find($this->session->get("id"));

            if ($kelas["status"] != "Pengajar") : ?>
                <div class="sb-sidenav-menu-heading">Wali Kelas</div>
                <a class="nav-link" href="<?= base_url("/guru/walikelas"); ?>">
                    <div class="text-white sb-nav-link-icon"><i class="bi bi-book-half"></i></div>
                    Menu Wali Kelas
                </a>

                <!-- <a class="nav-link" href="<?= base_url("/guru/walikelas/setkkm"); ?>">
                    <div class="text-white sb-nav-link-icon"><i class="bi bi-book-half"></i></div>
                    Set KKM Mapel
                </a> -->

                <a class="nav-link" href="<?= base_url("/guru/raportsiswa"); ?>">
                    <div class="text-white sb-nav-link-icon"><i class="bi bi-book-half"></i></div>
                    Raport Siswa
                </a>

                <a class="nav-link" href="<?= base_url("/guru/absensi"); ?>">
                    <div class="text-white sb-nav-link-icon"><i class="bi bi-book-half"></i></div>
                    Absensi
                </a>
            <?php endif; ?>

            <div class="sb-sidenav-menu-heading">Kelas</div>
            <a class="nav-link" href="<?= base_url("/guru/kelas"); ?>">
                <div class="text-white  sb-nav-link-icon"><i class="bi bi-clipboard-fill"></i></div>
                Kelas
            </a>
            <a class="nav-link" href="<?= base_url("/guru/informasi"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-book-half"></i></div>
                Informasi
            </a>

            <a class="nav-link" href="<?= base_url("/guru/materi"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-book-half"></i></div>
                Materi
            </a>



            <a class="nav-link" href="<?= base_url("/guru/tugas"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-list-task"></i></div>
                Tugas
            </a>

            <a class="nav-link" href="<?= base_url("/guru/quiz"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-clipboard2-fill"></i></i></div>
                Quiz
            </a>

            <a class="nav-link" href="<?= base_url("/guru/ujian"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-layout-text-sidebar"></i></div>
                Ujian
            </a>
            <div class="sb-sidenav-menu-heading">Nilai</div>
            <a class="nav-link" href="<?= base_url("/guru/nilai"); ?>">
                <div class="text-white sb-nav-link-icon"><i class="bi bi-sort-numeric-up-alt"></i></div>
                Nilai Siswa
            </a>


        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Login Sebagai</div>
        <?= $this->session->get("nama"); ?>
    </div>
</nav>