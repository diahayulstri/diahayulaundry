<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Ayu Laundry</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#About">About</a>
                    <a href="<?= base_url('Cek_status') ?>" class=" btn btn-primary tombol"> <i class="fas fa-fw fa-chack"></i>Cek Status Pesanan</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar-->

    <!-- jumbotrom -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Selamat Datang<br> <span> Di Aplikasi</span><span> Laundry</span></h1>
        </div>
    </div>


    <!-- /akhir jumbotrom -->
    <!-- container -->
    <div class="container">

        <!-- info panel -->

        <div id="Testimoni" class="row justify-content-center">
            <div class="col-10 info-panel">
                <!-- <div data-aos="fade-up" data-aos-duration="2000"> -->
                <br>
                <div class="row">
                    <div class="col-lg">
                        <img src="<?= base_url('assets/css/employee.jpg'); ?>" alt="employee" class="float-left">
                        <h4>Cepat & Bersih</h4>
                        <p class="card-text">Waktu pencucian hanya 1 hari untuk pakaian 10 kg. Meskipun cepat, tetapi tetap bersih.</p>

                    </div>
                    <div class="col-lg">
                        <img src="assets/css/hires.jpg" alt="High Res" class="float-left">
                        <h4>Tepat waktu</h4>
                        <p class="card-text">Tanggal selesai dicuci sangat cepat dan konsisten dengan aplikasi.</p>
                    </div>
                    <div class="col-lg">
                        <img src="assets/css/security.jpg" alt="Security" class="float-left">
                        <h4>Pelayanan yang handal</h4>
                        <p class="card-text">Pakaian yang berbahan katun tidak rusak meskipun di cuci di Laundry</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <!-- Workingspace -->
    <div id="About" class="row workingspace">
        <div class="col-lg-4">
            <div data-aos="fade-up" data-aos-duration="2000">
                <img src="assets/css/laundry.png" alt="Workingspace" class="img-fluid">
            </div>
        </div>
        <div class="col-lg-8">
            <div data-aos="fade-up" data-aos-duration="3000">
                <p><span>Laundry</span> adalah aplikasi laundry untuk
                    membantu ibu rumah tangga agar <strong>meringankan</strong> pekerjaan rumahnya. Selain itu,
                    aplikasi ini dapat melihat <strong>timeline</strong> pakaian yang anda laundry menggunakan fitur
                    <strong>cek status pesanan</strong>. Sehingga, anda tidak perlu repot-repot datang ke tempat
                    laundry bila pakaian anda yang sedang dilaundry belum selesai (Belum bisa diambil).
                </p>
                <h4 class="text-center">Kami memiliki beberapa cabang yaitu:</h4>
                <div class="table-responsive text-dark p-3 rounded bg-white">
                    <table class="table table-hover table-bordered" style="font-size: .9rem">
                        <thead>
                            <tr class="bg-dark text-white">
                                <th>No</th>
                                <th>Nama Outlet</th>
                                <th>Alamat Outlet</th>
                                <th>Telepon Outlet</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $i = 1; ?>
                                <?php foreach ($outlet as $row) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td><?= $row['tlp']; ?></td>
                            </tr>
                        <?php endforeach ?>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- Akhir Workingspace -->
    </div>

    <!-- akhir container -->
    <!-- <footer class=" text-dark p-4">
        <div class="row">
            <div class="col-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126375.413375602!2d113.293355401174!3d-8.179401589656873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd68bc7fa450941%3A0xb48c9d117a0ef8d0!2sKec.%20Semboro%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1677335604203!5m2!1sid!2sid" height="300" frameborder="0" style="border:0; margin-top: 15px;width: 100%" allowfullscreen=""></iframe>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <span>Copyright &#169; <script type='text/javascript'>
                        var creditsyear = new Date();
                        document.write(creditsyear.getFullYear());
                    </script> <a expr:href='data:blog.homepageUrl'>
                        <data:blog.title />
                    </a></span>
            </div>
        </div>
    </footer> -->