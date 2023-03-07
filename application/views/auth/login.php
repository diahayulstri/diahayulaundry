<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>vendor/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>vendor/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>vendor/adminlte/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url() ?>vendor/adminlte/index2.html"><b>Selamat Datang</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Masukkan Username dan Password anda</p>

                <!-- untuk memanggil flashdata -->
                <?php if ($error = $this->session->flashdata('error')) : ?>
                    <div class="alert alert-danger">
                        <strong>Perhatian</strong>
                        <p><?= $error ?></p>
                    </div>
                <?php endif ?>

                <form method="post">
                    <div class="form-group">
                        <label for="username"><i class="fas fa-fw fa-user"></i> Nama Pengguna</label>
                        <input required type="text" autocomplete="off" id="username" class="form-control rounded-pill" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fas fa-fw fa-lock"></i> Kata Sandi</label>
                        <input required type="password" id="password" class="form-control  rounded-pill" name="password">
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" name="login" class="btn btn-info rounded-pill"> <i class="fas fa-sign-out-alt"></i>Masuk</button>
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url() ?>vendor/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>vendor/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>vendor/adminlte/dist/js/adminlte.min.js"></script>
</body>

</html>