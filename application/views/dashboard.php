<style>
    .small-box {
        box-shadow: 0 30px 20px rgba(0, 0, 0, 0.5);

    }
</style>



<?php if ($this->session->userdata('role') == 'kasir') : ?>
    <div class="row">

    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 text-center">

            <div class="container">
                <div class="card">
                    <div class="card text-center">

                        <div class="card-header bg-primary text-white">

                            <marquee>
                                <h2><b>Selamat Anda Telah Bergabung Di Aplikasi Ayu Laundry 😜</b></h2>
                            </marquee>
                        </div>
                        <div class="card-body">
                            <h1><i class="fa fa-user-circle"></i></h1>
                            <h5 class="card-text"> Anda login sebagai Kasir</h5>
                        </div>

                        <link rel="stylesheet" href="css/font-awesome.min.css" />
                    </div>

                </div>

            </div>

            <!-- /.card -->
        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->
    </section>
<?php endif; ?>
<?php if ($this->session->userdata('role') == 'owner') : ?>
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 text-center">
            <div class="container">
                <div class="card">
                    <div class="card text-center">
                        <div class="card-header bg-primary text-white">
                            <marquee>
                                <h2><b>Selamat Anda Telah Bergabung Di Aplikasi Ayu Laundry 😜</b></h2>
                            </marquee>
                        </div>
                        <div class="card-body">
                            <h1><i class="fa fa-user-circle"></i></h1>
                            <h5 class="card-text"> Anda login sebagai Owner</h5>
                        </div>
                        <link rel="stylesheet" href="css/font-awesome.min.css" />
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php endif; ?>
<!-- /.content -->
<?php if ($this->session->userdata('role') == 'admin') : ?>

    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary text-drak">
                <div class="inner">
                    <h3><?= $this->db->get('tb_transaksi')->num_rows(); ?></h3>
                    <p>Data Transaksi</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="<?= base_url('transaksi') ?>" class="small-box-footer">info lebih<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success text-drak">
                <div class="inner">
                    <h3><?= $this->db->get('tb_member')->num_rows(); ?></h3>

                    <p>Data Member</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?= base_url('member') ?>" class="small-box-footer">info lebih<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info ">
                <div class="inner">
                    <h3><?= $this->db->get('tb_paket')->num_rows();  ?></h3>

                    <p>Data Paket</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="<?= base_url('paket') ?>" class="small-box-footer">info lebih<i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger text-drak">
                <div class="inner">
                    <h3><?= $this->db->get('tb_outlet')->num_rows();  ?></h3>

                    <p>Data Outlet</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?= base_url('outlet') ?>" class="small-box-footer">info lebih <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
<?php endif; ?>