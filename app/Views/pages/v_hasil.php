<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>JurusanKu</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="<?= base_url() ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?= base_url() ?>/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Updated: Feb 22 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index.html" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="<?= base_url() ?>/assets/img/logo.webp" alt=""> -->
                <h1 class="sitename">JurusanKu</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->

        <!-- Faq 2 Section -->
        <section id="faq-2" class="faq-2 section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Hasil Rekomendasi Jurusan Kuliah</h2>
                <p>
                    Halaman ini menampilkan ringkasan data yang telah Anda masukkan serta hasil analisis sistem
                    dalam menentukan jurusan kuliah yang paling sesuai dengan minat, kepribadian, tujuan karier, kemampuan, serta minat industri Anda.
                </p>
            </div>
            <!-- End Section Title -->


            <div class="container">
                <div class="card shadow">
                    <div class="card-body">

                        <h4 class="card-title text-center mb-5 mt-3">
                            Hasil Akhir Rekomendasi Jurusan
                        </h4>

                        <?php
                        // friendly labels for industri
                        $industriLabels = [
                            'BahasaMedia' => 'Bahasa & Media',
                            'IT' => 'Teknologi Informasi',
                            'Bisnis' => 'Bisnis',
                            'Industri' => 'Industri',
                            'Kesehatan' => 'Kesehatan',
                            'Desain' => 'Desain',
                            'Komunikasi' => 'Komunikasi'
                        ];
                        $industriDisplay = $industriLabels[$input['industri']] ?? $input['industri'];
                        ?>

                        <!-- RINGKASAN INPUT -->
                        <h6 class="mb-3">Ringkasan Input</h6>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span><strong>Minat Akademik</strong></span>
                                        <span class="badge bg-primary rounded-pill"><?= esc($input['minat']) ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span><strong>Kepribadian</strong></span>
                                        <span class="badge bg-secondary rounded-pill"><?= esc($input['kepribadian']) ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span><strong>Tujuan Karir</strong></span>
                                        <span class="badge bg-info text-dark rounded-pill"><?= esc($input['karir']) ?></span>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span><strong>Kemampuan Dominan</strong></span>
                                        <span class="badge bg-success rounded-pill"><?= esc($input['kemampuan']) ?></span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span><strong>Minat Industri</strong></span>
                                        <span class="badge bg-warning text-dark rounded-pill"><?= esc($industriDisplay) ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- HASIL -->
                        <div class="p-3 mb-3 rounded-3" style="background: linear-gradient(90deg,#e6ffed,#f0fff4); border:1px solid #cbecca;">
                            <h5 class="mb-2">Rekomendasi Jurusan</h5>
                            <?php
                            // Ensure $hasil is a string (handles arrays or other types safely)
                            $hasilText = is_array($hasil) ? implode(', ', $hasil) : (string) $hasil;
                            $hasilEsc = esc($hasilText);
                            ?>
                            <p class="mb-0" style="font-size:1.05rem;"><?= nl2br($hasilEsc) ?></p>
                        </div>

                        <div class="d-flex gap-2 align-items-center mb-3">
                            <a href="/form" class="btn btn-outline-secondary">
                                Ulangi Tes
                            </a>

                            <form action="/proses/pdf" method="post" target="_blank" class="d-inline">
                                <input type="hidden" name="minat" value="<?= esc($input['minat']) ?>">
                                <input type="hidden" name="kepribadian" value="<?= esc($input['kepribadian']) ?>">
                                <input type="hidden" name="karir" value="<?= esc($input['karir']) ?>">
                                <input type="hidden" name="kemampuan" value="<?= esc($input['kemampuan']) ?>">
                                <input type="hidden" name="industri" value="<?= esc($input['industri']) ?>">
                                <button type="submit" class="btn btn-success" id="btn-pdf">Unduh PDF</button>
                            </form>

                            <a href="/" class="btn btn-primary ms-auto">
                                Kembali ke Beranda
                            </a>
                        </div>

                        <p class="small text-muted">Catatan: Tombol "Unduh PDF" menghasilkan file PDF otomatis jika <strong>Dompdf</strong> sudah terpasang pada server (composer package <code>dompdf/dompdf</code>). Jika belum terpasang, klik tombol akan membuka versi yang dapat dicetak — Anda bisa menyimpannya menggunakan "Save as PDF" di dialog cetak browser.</p>

                    </div>
                </div>

            </div>

        </section><!-- /Faq 2 Section -->

    </main>


    <footer id="footer" class="footer">

        <!-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">Arsha</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>A108 Adam Street</p>
                        <p>New York, NY 535022</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                        <p><strong>Email:</strong> <span>info@example.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div> -->

        <div class="container text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">JurusanKu</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">JurusanKu</a> Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="<?= base_url() ?>/assets/js/main.js"></script>

</body>

</html>