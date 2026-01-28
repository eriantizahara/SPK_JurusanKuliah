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

            <!-- <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#team">Team</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav> -->

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->

        <!-- Faq 2 Section -->
        <section id="faq-2" class="faq-2 section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Tes Rekomendasi Jurusan Kuliah</h2>
                <p> Sistem ini membantu Anda menentukan jurusan kuliah yang sesuai
                    berdasarkan data dan preferensi yang Anda pilih.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="container mt-5">
                    <h3 class="mb-4 text-center">Form Tes Rekomendasi Jurusan Kuliah</h3>

                    <form action="/proses" method="post" id="form-rekomendasi">

                        <!-- MINAT AKADEMIK -->
                        <div class="mb-4 card p-3">
                            <label class="form-label fw-bold">Minat Akademik</label>
                            <div id="minat-group" class="d-flex gap-3 flex-wrap mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="minat" id="minat-saintek" value="Saintek" required>
                                    <label class="form-check-label" for="minat-saintek">Saintek</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="minat" id="minat-soshum" value="SosHum">
                                    <label class="form-check-label" for="minat-soshum">Sosial & Humaniora</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="minat" id="minat-bahasa" value="Bahasa">
                                    <label class="form-check-label" for="minat-bahasa">Bahasa</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="minat" id="minat-seni" value="Seni">
                                    <label class="form-check-label" for="minat-seni">Seni</label>
                                </div>
                            </div>
                        </div>

                        <!-- KEPRIBADIAN -->
                        <div class="mb-4 card p-3">
                            <label class="form-label fw-bold">Tipe Kepribadian</label>
                            <div class="d-flex gap-3 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kepribadian" id="kepribadian-introvert" value="Introvert" required>
                                    <label class="form-check-label" for="kepribadian-introvert">Introvert</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kepribadian" id="kepribadian-extrovert" value="Extrovert">
                                    <label class="form-check-label" for="kepribadian-extrovert">Extrovert</label>
                                </div>
                            </div>
                        </div>

                        <!-- TUJUAN KARIR -->
                        <div class="mb-4 card p-3">
                            <label class="form-label fw-bold">Tujuan Karir</label>
                            <div class="d-flex gap-3 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="karir" id="karir-kantor" value="Kantor" required>
                                    <label class="form-check-label" for="karir-kantor">Kantor</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="karir" id="karir-lapangan" value="Lapangan">
                                    <label class="form-check-label" for="karir-lapangan">Lapangan</label>
                                </div>
                            </div>
                        </div>

                        <!-- KEMAMPUAN DOMINAN (dynamic) -->
                        <div class="mb-4 card p-3">
                            <label class="form-label fw-bold">Kemampuan Dominan</label>
                            <div id="kemampuan-group" class="d-flex gap-3 flex-wrap mt-2">
                                <!-- opsi akan di-render oleh JavaScript -->
                            </div>
                        </div>

                        <!-- MINAT INDUSTRI (dynamic) -->
                        <div class="mb-4 card p-3">
                            <label class="form-label fw-bold">Minat Industri</label>
                            <div id="industri-group" class="d-flex gap-3 flex-wrap mt-2">
                                <!-- opsi akan di-render oleh JavaScript -->
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="bi bi-magic me-2"></i>
                                Proses Rekomendasi
                            </button>
                        </div>

                    </form>

                    <script>
                        (function() {
                            const industriesByMinat = {
                                'Saintek': [{
                                        value: 'IT',
                                        label: 'Teknologi Informasi'
                                    },
                                    {
                                        value: 'Bisnis',
                                        label: 'Bisnis'
                                    },
                                    {
                                        value: 'Industri',
                                        label: 'Industri'
                                    },
                                    {
                                        value: 'Kesehatan',
                                        label: 'Kesehatan'
                                    },
                                    {
                                        value: 'Desain',
                                        label: 'Desain'
                                    }
                                ],
                                'SosHum': [{
                                        value: 'Bisnis',
                                        label: 'Bisnis'
                                    },
                                    {
                                        value: 'Komunikasi',
                                        label: 'Komunikasi'
                                    }
                                ]
                            };

                            const kemampuanByMinat = {
                                'Saintek': ['Logika', 'Kreativitas', 'Komunikasi'],
                                'SosHum': ['Logika', 'Kreativitas', 'Komunikasi'],
                                'Bahasa': ['Menulis', 'Analisis', 'Komunikasi'],
                                'Seni': ['Kreativitas', 'Komunikasi']
                            };

                            function renderOptions(container, name, options) {
                                container.innerHTML = '';
                                if (!options || options.length === 0) return;
                                options.forEach((opt, idx) => {
                                    const id = `${name}-${idx}`;
                                    const div = document.createElement('div');
                                    div.className = 'form-check';

                                    const input = document.createElement('input');
                                    input.className = 'form-check-input';
                                    input.type = 'radio';
                                    input.name = name;
                                    input.id = id;
                                    input.value = (typeof opt === 'string') ? opt : opt.value;
                                    if (idx === 0) input.required = true;

                                    const label = document.createElement('label');
                                    label.className = 'form-check-label';
                                    label.htmlFor = id;
                                    label.innerText = (typeof opt === 'string') ? opt : opt.label;

                                    div.appendChild(input);
                                    div.appendChild(label);
                                    container.appendChild(div);
                                });
                            }

                            // Hooks
                            const minatGroup = document.getElementById('minat-group');
                            const industriGroup = document.getElementById('industri-group');
                            const kemampuanGroup = document.getElementById('kemampuan-group');

                            // when minat changes update industri + kemampuan
                            minatGroup.addEventListener('change', (e) => {
                                const selected = document.querySelector('input[name="minat"]:checked');
                                if (!selected) return;
                                const minat = selected.value;

                                renderOptions(industriGroup, 'industri', industriesByMinat[minat] || []);
                                renderOptions(kemampuanGroup, 'kemampuan', kemampuanByMinat[minat] || []);
                            });

                            // initialize on page load if any preselected
                            document.addEventListener('DOMContentLoaded', () => {
                                const pre = document.querySelector('input[name="minat"]:checked');
                                if (pre) {
                                    pre.dispatchEvent(new Event('change'));
                                }
                            });

                            // form validation for radio groups (ensure all groups have selection)
                            document.getElementById('form-rekomendasi').addEventListener('submit', (e) => {
                                const minat = document.querySelector('input[name="minat"]:checked')?.value;

                                const baseRequired = ['minat', 'kepribadian', 'karir', 'kemampuan'];

                                // industri hanya wajib untuk Saintek & SosHum
                                if (minat === 'Saintek' || minat === 'SosHum') {
                                    baseRequired.push('industri');
                                }

                                for (const g of baseRequired) {
                                    if (!document.querySelector(`input[name="${g}"]:checked`)) {
                                        e.preventDefault();
                                        alert('Mohon isi semua parameter sebelum melanjutkan.');
                                        return false;
                                    }
                                }

                                return true;
                            });

                        })();
                    </script>
                </div>

            </div>

        </section><!-- /Faq 2 Section -->

    </main>


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