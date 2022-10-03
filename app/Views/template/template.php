<!DOCTYPE html>
<html lang="en">

<?= $this->include('template/parsial/head'); ?>

<body class="sb-nav-fixed">

    <?= $this->include('template/parsial/nav'); ?>

    <div id="layoutSidenav">

        <div id="layoutSidenav_nav">
            <?= $this->include('template/parsial/sidebar'); ?>
        </div>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <?= $this->include('template/parsial/breadcrumb'); ?>

                    <?= $this->renderSection('content'); ?>
                </div>
            </main>

            <?= $this->include('template/parsial/footer'); ?>
        </div>
    </div>

    <?= $this->include('template/parsial/script'); ?>
</body>

</html>