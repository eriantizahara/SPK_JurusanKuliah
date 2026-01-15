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
          <!-- <li><a href="#services">Services</a></li> -->
          <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <li><a href="#team">Team</a></li>
          <!-- <li><a href="#pricing">Pricing</a></li> -->
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contact</a></li>
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
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/clients/clients-1.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/clients/clients-2.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/clients/clients-3.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/clients/clients-4.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/clients/clients-5.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/clients/clients-6.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/clients/clients-7.webp" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?= base_url() ?>/assets/img/clients/clients-8.webp" class="img-fluid" alt=""></div>
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
                <h3>Analisis & Perhitungan SPK</h3>
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
                <img src="<?= base_url() ?>/assets/img/person/person-f-4.webp" class="img-fluid" alt="Programmer">
              </div>
              <div class="member-info">
                <h4>Erianti Zahara</h4>
                <span>Programmer</span>
                <p>
                  Bertanggung jawab dalam pengembangan sistem penunjang keputusan,
                  implementasi logika rekomendasi jurusan, serta integrasi frontend
                  dan backend agar sistem berjalan optimal.
                </p>
                <!-- <div class="social">
                  <a href="#"><i class="bi bi-github"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div> -->
              </div>
            </div>
          </div><!-- End Team Member -->

          <!-- Programmer 2 -->
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member d-flex align-items-start">
              <div class="pic">
                <img src="<?= base_url() ?>/assets/img/person/person-f-8.webp" class="img-fluid" alt="Programmer">
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
                <img src="<?= base_url() ?>/assets/img/person/person-f-12.webp" class="img-fluid" alt="UI Designer">
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
                <img src="<?= base_url() ?>/assets/img/person/person-m-7.webp" class="img-fluid" alt="System Analyst">
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

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p> Hubungi kami untuk mendapatkan informasi lebih lanjut, menyampaikan pertanyaan,
          atau memberikan masukan terkait sistem rekomendasi jurusan kuliah yang kami kembangkan</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>Jl. Damar No.69 E Padang, Sumatera Barat</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>081234567890</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>jurusanku@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

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

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">JurusanKu</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Damar No.69 E</p>
            <p>Padang, Sumatera Barat</p>
            <p class="mt-3"><strong>Phone:</strong> <span>081234567890</span></p>
            <p><strong>Email:</strong> <span>jurusanku@gmail.com</span></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#about">About</a></li>
            <!-- <li><i class="bi bi-chevron-right"></i> <a href="#portfolio">Portfolio</a></li> -->
            <li><i class="bi bi-chevron-right"></i> <a href="#team">Team</a></li>
          </ul>
        </div>

        <!-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
          </ul>
        </div> -->

        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p> Dapatkan informasi dan pembaruan terbaru seputar sistem rekomendasi
            jurusan kuliah melalui media sosial kami</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
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