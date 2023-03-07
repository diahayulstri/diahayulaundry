<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'include-css.php'; ?>
    <title><?= $title; ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>vendor/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>vendor/adminlte/dist/css/adminlte.min.css">

    <!-- libraries sweetalert -->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/dist/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/dist/sweetalert2.min.css">

    <script src="<?= base_url() ?>assets/dist/sweetalert2.all.js"></script>
    <script src="<?= base_url() ?>assets/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>assets/dist/sweetalert2.js"></script>
    <script src="<?= base_url() ?>assets/dist/sweetalert2.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <p class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></p>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar bg-info elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link text-center">
                <span class="brand-text font-weight text-"><strong> 😛Ayu Laundry</strong></span>
            </a>

            <hr>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-2 pb-2 mb-2 d-flex">
                    <div class="info">
                        <h5>
                            <a href="#" class="d-block text-dark "><?= $this->session->userdata('username') . '' . $this->session->userdata('role') ?></a>
                        </h5>
                    </div>
                </div>
                <hr>

                <!-- Sidebar Menu -->
                <nav class="mt-2">

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <p> <i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</p>
                        <li>
                            <p>
                                <a href="<?= base_url('dashboard') ?>" class="nav-link text-dark">
                                    Home</a>
                            <p>
                        </li>

                        <?php if ($this->session->userdata('role') !== 'admin') : ?>
                            <?php if ($this->session->userdata('role') !== 'owner') : ?>

                                <p><i class="fas fa-fw fa-users"></i> Member</p>
                                <li>
                                    <p>
                                        <a href="<?= base_url('member/tambah'); ?>" class="nav-link text-dark"><sup><i class="fas fa-fw fa-plus"></i></sup> Tambah Pelanggan</a>
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <a href="<?= base_url('member'); ?>" class="nav-link text-dark"></i> Data pelanggan </a>
                                    </p>
                                </li>


                                <p> <i class="fas fa-fw fa-handshake"></i> Transaksi</p>
                                <li>
                                    <p>
                                        <a href="<?= base_url('transaksi/tambah'); ?>" class="nav-link text-dark"><sup><i class="fas fa-1x fa-plus"></i></sup> Tambah Transaksi</a>
                                    </p>
                                </li>

                                <li>

                                    <p>
                                        <a href="<?= base_url('transaksi'); ?>" class="nav-link text-dark"><i class="fas fa-fw fa-handshake"></i> Data Transaksi</a>
                                    </p>
                                </li>

                            <?php endif ?>
                        <?php endif ?>
                        <!-- untuk memberi hak ases -->
                        <?php if ($this->session->userdata('role') != 'kasir') : ?>
                            <?php if ($this->session->userdata('role') != 'owner') : ?>
                                <p> <i class="fas fa-fw fa-align-justify"></i>Manajemen Data</p>

                                <li class="nav-item">
                                    <a href="#" class="nav-link text-dark">

                                        <p>
                                            Data Master
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="<?= base_url('outlet') ?>" class="nav-link text-dark ">
                                                <i class="fas fa-store"></i>
                                                <p>Data Outlet</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('paket') ?>" class="nav-link text-dark">
                                                <i class="fas fa-box"></i>
                                                <p>Data Paket</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('member') ?>" class="nav-link text-dark ">
                                                <i class="fas fa-users"></i>
                                                <p>Data Pelanggan</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?= base_url('user') ?>" class="nav-link text-dark">
                                                <i class="fas fa-user"></i>
                                                <p>Data User</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if ($this->session->userdata('role') != 'owner') : ?>
                            <?php if ($this->session->userdata('role') != 'kasir') : ?>
                                <li class="nav-item">
                                    <p> <i class="fas fa-file-invoice-dollar"></i> Transaksi</p>

                                <li class="nav-item">
                                    <a href="<?= base_url('transaksi/tambah') ?>" class="nav-link text-dark">
                                        <p>Transaksi Baru</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="<?= base_url('transaksi') ?>" class="nav-link text-dark">
                                        <p>Riwayat Transaksi</p>
                                    </a>
                                </li>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if ($this->session->userdata('role') != 'kasir') : ?>
                            <p> <i class="fas fa-file-alt"></i> Generate Laporan </p>
                            <li class="nav-item ">
                                <a href="<?= base_url('laporan') ?>" class="nav-link text-dark">

                                    <p>Laporan</p>
                                </a>
                            </li>
                        <?php endif; ?>
                        <li class="nav-item">
                            <a href="<?= base_url('auth/logout') ?>" class="nav-link text-dark">
                                <p>
                                    <i class="fas fa-sign-out-alt"></i>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->


            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <?php if ($title != 'Tambah Transaksi') : ?>
                                <h1 class="m-0"><?= $title; ?></h1>
                            <?php endif ?>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">