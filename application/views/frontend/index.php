<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Maturity Level Generator</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons
    <link href="assetsfile/assets/img/favicon.png" rel="icon" />
    <link href="assetsfile/assets/img/apple-touch-icon.png" rel="apple-touch-icon" /> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css');?>" rel="stylesheet" />
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/css/style.css');?>" rel="stylesheet" />


</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo"><img src="<?= base_url('assets/img/logo.png');?>" alt="" class="img-fluid" /></a>


            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Resources</a></li>
                    <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown">
                                <a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul> -->
                    </li>
                    <li><a class="nav-link scrollto" href="#services">Maturity Level</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Maturity Level Generator</h1>
                    <h2>Membantu dalam menghitung maturity level dan memberikan rekomendasi berdasarkan masalah perusahaan Anda.</h2>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="<?= base_url('assets/img/hero-img.png');?>" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Metode -->
    <section id="metode">
        <div class="container">
            <h3 class="text-center mb-5">Pilih metode sesuai dengan kebutuhan Anda</h3>
        </div>
        <div class="container">
            <div class="row justify-content-center row-cols-2 text-center">
                <div class="col-sm-2">
                    <a href="">
                        <img src="<?= base_url('assets/img/goals.jpg');?>" class="img-fluid" alt="" />
                        Business Goal
                    </a>
                </div>
                <div class="col-sm-2">
                    <a href="#about">
                        <img src="<?= base_url('assets/img/sdm.jpg');?>" class="img-fluid" alt="" />
                        Sumber Daya
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Metode -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch position-relative">
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3>Silahkan pilih sumber daya yang ingin anda cek tingkat kematangannya!</h3>
                        <p>
                            Dari sumber daya yang anda pilih, kami akan berikan kuesioner untuk membantu anda menghitung
                            tingkat kematangan dari suatu bagian dari sumber daya tersebut.
                        </p>

                        <ul>
                            <?php foreach ($kategori as $get) { ?>
                            <li><a href="<?= base_url('daftar_kuisioner/'.$get->slug);?>"><?= $get->nama;?></a></li>
                            <?php } ?>
                        </ul>



                        <!-- <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-atom"></i></div>
                            <h4 class="title"><a href="">Dine Pad</a></h4>
                            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <!-- <section id="counts" class="counts">
            <div class="container">
                <div class="text-center title">
                    <h3>What we have achieved so far</h3>
                    <p>Iusto et labore modi qui sapiente xpedita tempora et aut non ipsum consequatur illo.</p>
                </div>

                <div class="row counters position-relative">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Clients</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Projects</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hours Of Support</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Hard Workers</p>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Counts Section -->

        <!-- ======= Clients Section ======= -->
        <!-- <section id="clients" class="clients">
            <div class="container">
                <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assetsfile/assets/img/clients/client-1.png" class="img-fluid" alt="" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assetsfile/assets/img/clients/client-2.png" class="img-fluid" alt="" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assetsfile/assets/img/clients/client-3.png" class="img-fluid" alt="" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assetsfile/assets/img/clients/client-4.png" class="img-fluid" alt="" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assetsfile/assets/img/clients/client-6.png" class="img-fluid" alt="" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assetsfile/assets/img/clients/client-7.png" class="img-fluid" alt="" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="client-logo">
                            <img src="assetsfile/assets/img/clients/client-8.png" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- End Clients Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Maturity Level</h2>
                    <p>
                        Maturity Level merupakan tingkat kematangan. Maturity level dalam
                        konteks tata kelola adalah sebuah metode yang berpedoman dari
                        Cobit 4.1 untuk menghitung seberapa matang dan baik sebuah tata kelola dalam
                        perusahaan. Tata kelola yang dimaksud disini dapat dikategorikan dalam beberapa
                        bagian sumber daya yang terkait.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-cash-stack" style="color: #ff689b"></i></div>
                            <h4 class="title"><a href="">Level 0</a></h4>
                            <p class="description">Non Existent, perusahaan belum menyadari pentingnya TI dan proses pengelolaan TI belum diterapkan dalam perusahaan.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-calendar4-week" style="color: #e9bf06"></i></div>
                            <h4 class="title"><a href="">Level 1</a></h4>
                            <p class="description">Initial/Ad Hoc, perusahaan sudah menyadari pentingnya perencanaan strategis di bidang TI namun belum ada proses pengelolaan TI yang distandarisasi.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-chat-text" style="color: #3fcdc7"></i></div>
                            <h4 class="title"><a href="">Level 2</a></h4>
                            <p class="description">Repeatable, perusahaan sudah melakukan proses pengelolaan TI secara berulang-ulang namun belum dikomunikasikan dan didokumentasikan.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-credit-card-2-front" style="color: #41cf2e"></i></div>
                            <h4 class="title"><a href="">Level 3</a></h4>
                            <p class="description">Defined, perusahaan sudah menetapkan prosedur untuk dipatuhi karyawan atau yang sering disebut dengan SOP (Standar Operasional Prosedur). SOP tersebut sudah didokumentasikan secara resmi dan sudah ada pengesahan dari pihak manajemen namun proses pengawasan dan pelaporan tidak dilakukan secara berkala.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-globe" style="color: #d6ff22"></i></div>
                            <h4 class="title"><a href="">Level 4</a></h4>
                            <p class="description">Managed, proses dan pengelolaan TI sudah diawasi, dievaluasi dengan baik, dan lebih terorganisir.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-clock" style="color: #4680ff"></i></div>
                            <h4 class="title"><a href="">Level 5</a></h4>
                            <p class="description">Optimised, best practice telah diterapkan dengan sangat baik pada sistem berdasarkan proses yang telah terencana, terorganisir dan dengan menggunakan metodologi yang tepat</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->



        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
        <script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js');?>"></script>
        <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js');?>"></script>
        <script src="<?= base_url('assets/vendor/php-email-form/validate.js');?>"></script>
        <script src="<?= base_url('assets/vendor/purecounter/purecounter.js');?>"></script>
        <script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js');?>"></script>

        <!-- Template Main JS File -->
        <script src="<?= base_url('assets/js/main.js');?>"></script>
</body>

</html>