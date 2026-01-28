<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>JurusanKu</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?= base_url() ?>/assets/img/logo1.png" rel="icon">
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

      <a href="#" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="<?= base_url() ?>/assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">JurusanKu</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#team">Team</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- <a class="btn-getstarted" href="#about">Get Started</a> -->

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Masih Bingung Menentukan Jurusan Kuliah Apa?</h1>
            <p>Temukan minat kamu dengan test berikut</p>
            <div class="d-flex">
              <a href="<?= site_url('/mulai') ?>" class="btn-get-started">
                <i class="bi bi-play-circle me-1"></i>
                Mulai
              </a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="<?= base_url() ?>/assets/img/hero-img.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

      <div class="container" data-aos="zoom-in">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/SPK/1.png" class="img-fluid" alt="" style="width: 100%; height: 37px; object-fit: cover;"></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/SPK/2.png" class="img-fluid" alt="" style="width: 100%; height: 37px; object-fit: cover;"></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/SPK/3.png" class="img-fluid" alt="" style="width: 100%; height: 37px; object-fit: cover;"></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/SPK/4.png" class="img-fluid" alt="" style="width: 100%; height: 37px; object-fit: cover;"></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/SPK/5.png" class="img-fluid" alt="" style="width: 100%; height: 37px; object-fit: cover;"></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/SPK/6.png" class="img-fluid" alt="" style="width: 100%; height: 37px; object-fit: cover;"></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/SPK/7.png" class="img-fluid" alt="" style="width: 100%; height: 37px; object-fit: cover;"></div>
          </div>
        </div>

      </div>

    </section>
    <!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p style="text-align: justify;">
              Sistem ini dirancang untuk membantu siswa dalam menentukan jurusan kuliah yang paling sesuai
              berdasarkan minat akademik, kepribadian, tujuan karier, kemampuan, serta ketertarikan terhadap
              bidang industri tertentu.
            </p>

            <ul>
              <li style="text-align: justify;">
                <i class="bi bi-check2-circle"></i>
                <span>
                  Memberikan rekomendasi jurusan secara objektif berdasarkan data dan kriteria yang dipilih.
                </span>
              </li>
              <li style="text-align: justify;">
                <i class="bi bi-check2-circle"></i>
                <span>
                  Membantu siswa memahami potensi diri sebelum menentukan pilihan jurusan kuliah.
                </span>
              </li>
              <li style="text-align: justify;">
                <i class="bi bi-check2-circle"></i>
                <span>
                  Mengurangi risiko salah jurusan dengan proses analisis yang sistematis dan terstruktur.
                </span>
              </li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p style="text-align: justify;">
              Melalui sistem penunjang keputusan ini, pengguna dapat memperoleh hasil rekomendasi jurusan
              yang akurat dan mudah dipahami. Sistem bekerja dengan mengolah data input pengguna
              menggunakan metode perhitungan yang telah ditentukan sehingga hasil yang diperoleh
              dapat dijadikan sebagai bahan pertimbangan dalam pengambilan keputusan pendidikan.
            </p>

            <a href="#hero" class="read-more">
              <span>Mulai Tes Sekarang</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us light-background" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3>
                <span>Bingung menentukan jurusan kuliah?</span>
                <strong>Kami bantu Anda menemukan pilihan terbaik</strong>
              </h3>
              <p>
                Sistem penunjang keputusan ini dirancang untuk membantu siswa menentukan jurusan kuliah
                yang paling sesuai berdasarkan minat, kepribadian, kemampuan, tujuan karier, serta minat
                terhadap bidang industri tertentu secara objektif dan terstruktur.
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">
                <h3><span>01</span> Apa tujuan dari sistem rekomendasi jurusan kuliah ini?</h3>
                <div class="faq-content">
                  <p>
                    Sistem ini bertujuan untuk membantu siswa memperoleh rekomendasi jurusan kuliah
                    yang sesuai dengan potensi diri sehingga dapat mengurangi risiko salah jurusan
                    dan meningkatkan kesiapan dalam menentukan masa depan pendidikan.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>02</span> Data apa saja yang digunakan dalam proses rekomendasi?</h3>
                <div class="faq-content">
                  <p>
                    Data yang digunakan meliputi minat akademik, kepribadian, tujuan karier, kemampuan
                    dominan, serta ketertarikan terhadap bidang industri. Seluruh data tersebut dianalisis
                    untuk menghasilkan rekomendasi jurusan yang relevan.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>03</span> Apakah hasil rekomendasi dapat dijadikan acuan pemilihan jurusan?</h3>
                <div class="faq-content">
                  <p>
                    Hasil rekomendasi dapat dijadikan sebagai bahan pertimbangan awal dalam memilih
                    jurusan kuliah. Namun, keputusan akhir tetap berada pada siswa dan disarankan
                    untuk dikonsultasikan dengan guru atau konselor pendidikan.
                  </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>


          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="<?= base_url() ?>/assets/img/why-us.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Work Process Section -->
    <section id="work-process" class="work-process section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Alur Kerja Sistem</h2>
        <p>
          Tahapan proses sistem penunjang keputusan dalam menentukan jurusan kuliah
          berdasarkan minat, kemampuan, dan tujuan karier siswa.
        </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

          <!-- Step 1 -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="steps-item">
              <div class="steps-image">
                <img src="<?= base_url() ?>/assets/img/steps/steps-1.webp" alt="Input Parameter Siswa" class="img-fluid" loading="lazy">
              </div>
              <div class="steps-content">
                <div class="steps-number">01</div>
                <h3>Input Parameter Siswa</h3>
                <p>
                  Siswa mengisi parameter input yang digunakan sebagai dasar analisis,
                  meliputi minat akademik, tipe kepribadian, tujuan karier, kemampuan
                  dominan, serta minat industri.
                </p>
                <div class="steps-features">
                  <div class="feature-item">
                    <i class="bi bi-check-circle"></i>
                    <span>Minat Akademik</span>
                  </div>
                  <div class="feature-item">
                    <i class="bi bi-check-circle"></i>
                    <span>Tipe Kepribadian</span>
                  </div>
                  <div class="feature-item">
                    <i class="bi bi-check-circle"></i>
                    <span>Tujuan Karier</span>
                  </div>
                  <div class="feature-item">
                    <i class="bi bi-check-circle"></i>
                    <span>Kemampuan Dominan</span>
                  </div>
                  <div class="feature-item">
                    <i class="bi bi-check-circle"></i>
                    <span>Minat Industri</span>
                  </div>
                </div>
              </div>
            </div><!-- End Steps Item -->
          </div>

          <!-- Step 2 -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="steps-item">
              <div class="steps-image">
                <img src="<?= base_url() ?>/assets/img/steps/steps-2.webp" alt="Analisis dan Perhitungan SPK" class="img-fluid" loading="lazy">
              </div>
              <div class="steps-content">
                <div class="steps-number">02</div>
                <h3>Analisis & Perhitungan Sistem Penunjang Keputusan</h3>
                <p>
                  Sistem melakukan pengolahan data berdasarkan metode pohon keputusan yang
                  telah ditentukan untuk menghasilkan rekomendasi jurusan yang preferensi setiap jurusan
                  kuliah.
                </p>
                <div class="steps-features">
                  <div class="feature-item">
                    <i class="bi bi-check-circle"></i>
                    <span>Pembobotan Kriteria</span>
                  </div>
                  <div class="feature-item">
                    <i class="bi bi-check-circle"></i>
                    <span>Perhitungan Sistem</span>
                  </div>
                </div>
              </div>
            </div><!-- End Steps Item -->
          </div>

          <!-- Step 3 -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="steps-item">
              <div class="steps-image">
                <img src="<?= base_url() ?>/assets/img/steps/steps-3.webp" alt="Hasil Rekomendasi Jurusan" class="img-fluid" loading="lazy">
              </div>
              <div class="steps-content">
                <div class="steps-number">03</div>
                <h3>Hasil Rekomendasi Jurusan</h3>
                <p>
                  Sistem menampilkan hasil rekomendasi jurusan kuliah yang paling sesuai
                  dengan profil siswa sebagai bahan pertimbangan dalam pengambilan
                  keputusan.
                </p>
                <div class="steps-features">
                  <div class="feature-item">
                    <i class="bi bi-check-circle"></i>
                    <span>Rekomendasi Jurusan</span>
                  </div>
                  <div class="feature-item">
                    <i class="bi bi-check-circle"></i>
                    <span>Keputusan Objektif</span>
                  </div>
                </div>
              </div>
            </div><!-- End Steps Item -->
          </div>

        </div>

      </div>

    </section>
    <!-- /Work Process Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="<?= base_url() ?>/assets/img/bg/bg-8.webp" alt="Sistem Penunjang Keputusan Jurusan Kuliah">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Tentukan Jurusan Kuliah yang Tepat Sekarang</h3>
            <p>
              Bingung memilih jurusan kuliah yang sesuai dengan minat akademik, kepribadian, tujuan karier, kemampuan, serta bidang industri?
              Sistem ini membantu siswa mendapatkan rekomendasi jurusan
              berdasarkan analisis data dan kriteria yang objektif, sehingga keputusan
              yang diambil lebih tepat dan terarah.
            </p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#hero">
              <i class="bi bi-arrow-up-circle me-2"></i>
              Tertarik? Silahkan Lakukan Tes Sekarang
            </a>
          </div>
        </div>

      </div>

    </section>
    <!-- /Call To Action Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Tim yang berperan dalam perancangan sistem penunjang keputusan
          untuk membantu siswa menentukan jurusan kuliah yang sesuai dengan potensi dan minatnya</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <!-- Programmer 1 -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member d-flex align-items-start">
              <div class="pic">
                <img src="<?= base_url() ?>/assets/img/person/perempuan.png" class="img-fluid" alt="Programmer">
              </div>
              <div class="member-info">
                <h4>Erianti Zahara</h4>
                <span>Programmer</span>
                <p>
                  Bertanggung jawab dalam pengembangan sistem penunjang keputusan,
                  implementasi logika rekomendasi jurusan, serta integrasi frontend
                  dan backend agar sistem berjalan optimal.
                </p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <!-- Programmer 2 -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic">
                <img src="<?= base_url() ?>/assets/img/person/perempuan.png" class="img-fluid" alt="Programmer">
              </div>
              <div class="member-info">
                <h4>Zara Ayunda</h4>
                <span>Programmer</span>
                <p>
                  Mengelola pengolahan data input pengguna, pengembangan fitur sistem,
                  serta memastikan hasil rekomendasi jurusan sesuai dengan kriteria
                  dan kebutuhan pengguna.
                </p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <!-- UI Designer -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member d-flex align-items-start">
              <div class="pic">
                <img src="<?= base_url() ?>/assets/img/person/perempuan.png" class="img-fluid" alt="UI Designer">
              </div>
              <div class="member-info">
                <h4>Debora Septiani Daeli</h4>
                <span>UI Designer</span>
                <p>
                  Merancang tampilan antarmuka aplikasi agar mudah digunakan,
                  konsisten secara visual, serta memberikan pengalaman pengguna
                  yang nyaman dalam melakukan tes rekomendasi jurusan.
                </p>
              </div>
            </div>
          </div><!-- End Team Member -->

          <!-- System Analyst -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member d-flex align-items-start">
              <div class="pic">
                <img src="<?= base_url() ?>/assets/img/person/laki-laki.png" class="img-fluid" alt="System Analyst">
              </div>
              <div class="member-info">
                <h4>Muhammad Riski Illahi</h4>
                <span>System Analyst</span>
                <p>
                  Menganalisis kebutuhan sistem, menyusun alur proses rekomendasi jurusan,
                  serta memastikan sistem yang dikembangkan sesuai dengan tujuan
                  dan kebutuhan pengguna.
                </p>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">JurusanKu</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">JurusanKu</a>
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