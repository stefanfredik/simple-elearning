<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Menu</div>

            <a class="nav-link" href="<?= base_url("/admin"); ?>">
                <div class="text-white sb-nav-link-icon text-white"><i class="bi bi-house-fill"></i></div>
                Beranda
            </a>

            <div class="sb-sidenav-menu-heading">Data</div>



            <a class="nav-link" href="/admin/informasi">
                <div class="sb-nav-link-icon text-white"><i class="bi bi-info-circle"></i></div>
                Informasi
            </a>





            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon text-white"><i class="fas fa-columns"></i></div>
                Data Master
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="/admin/datajurusan">
                        <div class="sb-nav-link-icon text-white"><i class="fas fa-table"></i></div>
                        Data Jurusan
                    </a>

                    <a class="nav-link" href="/admin/dataadmin">
                        <div class="sb-nav-link-icon text-white"><i class="fas fa-table"></i></div>
                        Data Admin
                    </a>

                    <a class="nav-link" href="/admin/dataguru">
                        <div class="sb-nav-link-icon text-white"><i class="fas fa-table"></i></div>
                        Data Guru
                    </a>

                    <a class="nav-link" href="/admin/datasiswa">
                        <div class="sb-nav-link-icon text-white"><i class="fas fa-table"></i></div>
                        Data Siswa
                    </a>

                    <a class="nav-link" href="/admin/datakelas">
                        <div class="sb-nav-link-icon text-white"><i class="fas fa-table"></i></div>
                        Data Kelas
                    </a>

                    <a class="nav-link" href="/admin/datamapel">
                        <div class="sb-nav-link-icon text-white"><i class="fas fa-table"></i></div>
                        Data Mata Pelajaran
                    </a>
                </nav>
            </div>

            <a class="nav-link" href="/admin/datajadwal">
                <div class="sb-nav-link-icon text-white"><i class="fas fa-table"></i></div>
                Data Jadwal
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Login Sebagai : </div>
        <?= ucwords($this->session->get("nama")); ?>
    </div>
</nav>