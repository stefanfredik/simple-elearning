<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/x-icon" href="/img/logo.png">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title . " | " . APPNAME; ?></title>
    <link href="/sb/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: url('/img/bg.jpeg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
    </style>
</head>

<body class="bg-secondary">
    <div id="layoutAuthentication">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark d-flex justify-content-center">

            <h3 class="text-white"><?= LOGO; ?></h3>
        </nav>

        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4">
                            <form method="POST" action="/login">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header d-flex justify-content-center">
                                        <img height="100px" class="img" src="/img/logo.png" alt="">

                                    </div>
                                    <div class="card-body">
                                        <div class="form-floating mb-3">
                                            <input name="email" class="form-control" id="inputEmail" type="email" placeholder="Masukan Email" />
                                            <label for="inputEmail">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input name="password" class="form-control" id="inputPassword" type="password" placeholder="Masukan Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <input class="btn btn-outline-primary form-control" type="submit" value="Masuk">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-dark mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-white">Copyright &copy; <?= APPNAME; ?></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="sb/js/scripts.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
    $this->session = \Config\Services::session();
    if ($notif = $this->session->getFlashdata('pesan')) { ?>
        <script>
            Swal.fire(
                '<?= $notif['judul'] ?>',
                '<?= $notif['pesan'] ?>',
                '<?= $notif['type'] ?>'
            )
        </script>
    <?php } ?>
</body>

</html>