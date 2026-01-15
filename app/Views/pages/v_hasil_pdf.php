<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Hasil Rekomendasi Jurusan Kuliah</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            color: #000;
            padding: 36px;
            line-height: 1.7;
        }

        .container {
            max-width: 820px;
            margin: 0 auto;
        }

        .kop {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
            margin-bottom: 22px;
        }

        .kop h1 {
            font-size: 17px;
            margin: 0;
            text-transform: uppercase;
        }

        .kop p {
            margin: 4px 0;
            font-size: 13px;
        }

        .judul {
            text-align: center;
            margin: 26px 0;
        }

        .judul h2 {
            font-size: 15px;
            text-transform: uppercase;
            text-decoration: underline;
            margin-bottom: 6px;
        }

        .nomor {
            font-size: 13px;
        }

        .isi {
            font-size: 14px;
            text-align: justify;
        }

        .data {
            margin: 14px 0 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 4px 0;
            vertical-align: top;
        }

        .hasil {
            margin: 12px 0;
            padding: 10px;
            border: 1px solid #000;
            font-weight: 600;
        }

        .lanjut {
            margin-top: 14px;
        }

        .lanjut ul {
            margin: 6px 0 0 18px;
        }

        .penutup {
            margin-top: 16px;
        }

        .footer {
            margin-top: 24px;
            font-size: 12.5px;
            color: #444;
            text-align: right;
        }
    </style>
</head>

<body>

    <div class="container">

        <!-- KOP -->
        <div class="kop">
            <h1>Sistem Penunjang Keputusan Penentuan Jurusan Kuliah</h1>
            <p>Website Rekomendasi Jurusan Kuliah – JurusanKu</p>
        </div>

        <!-- JUDUL -->
        <div class="judul">
            <h2>Hasil Rekomendasi Jurusan Kuliah</h2>
            <div class="nomor">Nomor Dokumen: SPK-JN-<?= date('Ymd-His') ?></div>
        </div>

        <!-- ISI -->
        <div class="isi">
            <p>
                Berdasarkan data yang telah Anda inputkan ke dalam sistem, kami menyampaikan
                hasil rekomendasi jurusan kuliah yang diperoleh melalui proses analisis
                menggunakan Sistem Penunjang Keputusan. Rekomendasi ini disusun dengan
                mempertimbangkan minat, kemampuan, kepribadian, tujuan karier, serta minat industri.
            </p>

            <!-- DATA -->
            <div class="data">
                <table>
                    <tr>
                        <td width="32%">Minat Akademik</td>
                        <td width="3%">:</td>
                        <td><?= esc($input['minat']) ?></td>
                    </tr>
                    <tr>
                        <td>Kepribadian</td>
                        <td>:</td>
                        <td><?= esc($input['kepribadian']) ?></td>
                    </tr>
                    <tr>
                        <td>Tujuan Karier</td>
                        <td>:</td>
                        <td><?= esc($input['karir']) ?></td>
                    </tr>
                    <tr>
                        <td>Kemampuan Dominan</td>
                        <td>:</td>
                        <td><?= esc($input['kemampuan']) ?></td>
                    </tr>

                    <?php if (!empty($input['industri'])): ?>
                        <tr>
                            <td>Minat Industri</td>
                            <td>:</td>
                            <td><?= esc($input['industri']) ?></td>
                        </tr>
                    <?php endif; ?>
                </table>
            </div>


            <p><strong>Hasil rekomendasi jurusan kuliah yang diperoleh adalah sebagai berikut:</strong></p>

            <div class="hasil">
                <?= nl2br(esc(is_array($hasil) ? implode(', ', $hasil) : (string) $hasil)) ?>
            </div>

            <!-- LANGKAH -->
            <div class="lanjut">
                <p><strong>Langkah Selanjutnya:</strong></p>
                <ul>
                    <li>Pelajari program studi yang direkomendasikan untuk menemukan pilihan yang paling sesuai.</li>
                    <li>Diskusikan hasil ini dengan guru, orang tua, atau konselor pendidikan.</li>
                    <li>Simpan hasil rekomendasi ini sebagai referensi dalam menentukan jurusan kuliah.</li>
                </ul>
            </div>

            <div class="penutup">
                <p>
                    Rekomendasi ini diharapkan dapat membantu Anda dalam mengambil keputusan
                    pendidikan yang tepat. Keputusan akhir tetap berada pada Anda dengan
                    mempertimbangkan berbagai masukan yang relevan.
                </p>
                <p>
                    Semangat! Ambil keputusan terbaik untuk masa depan Anda dan
                    mulailah langkah menuju jenjang pendidikan yang sesuai dengan potensi diri.
                </p>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            Dokumen ini dihasilkan secara otomatis pada <?= date('d F Y, H:i') ?>
        </div>

    </div>

</body>

</html>