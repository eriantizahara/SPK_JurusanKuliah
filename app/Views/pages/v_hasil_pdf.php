<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rekomendasi Jurusan - Hasil</title>
    <style>
        body{font-family: Arial, Helvetica, sans-serif; color:#222; padding:20px}
        .container{max-width:800px; margin:0 auto}
        .header{display:flex;align-items:center;gap:12px}
        .logo{background:#0d6efd;color:#fff;padding:10px 14px;border-radius:6px;font-weight:700}
        h1{font-size:20px;margin:0}
        .meta{margin-top:10px}
        .card{border:1px solid #e1e1e1;padding:14px;border-radius:8px;margin-top:12px}
        .cta{margin-top:18px;background:#f8f9fa;padding:12px;border-radius:6px}
        .small{font-size:0.95rem;color:#555}
        .badge{display:inline-block;padding:6px 10px;border-radius:12px;background:#0d6efd;color:#fff;font-size:0.9rem}
        .hasil{margin-top:12px;font-size:1.05rem}
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">JurusanKu</div>
            <div>
                <h1>Rekomendasi Jurusan Kuliah</h1>
                <div class="small">Ringkasan hasil yang bisa Anda simpan atau cetak sebagai PDF</div>
            </div>
        </div>

        <div class="card">
            <strong>Data Input:</strong>
            <div class="meta small">
                <div>Minat Akademik: <span class="badge"><?= esc($input['minat']) ?></span></div>
                <div>Kepribadian: <span class="badge" style="background:#6c757d"><?= esc($input['kepribadian']) ?></span></div>
                <div>Tujuan Karir: <span class="badge" style="background:#0dcaf0;color:#000"><?= esc($input['karir']) ?></span></div>
                <div>Kemampuan Dominan: <span class="badge" style="background:#198754"><?= esc($input['kemampuan']) ?></span></div>
                <div>Minat Industri: <span class="badge" style="background:#ffc107;color:#000"><?= esc($input['industri']) ?></span></div>
            </div>

            <div class="hasil">
                <strong>Rekomendasi Jurusan:</strong>
                <p style="margin-top:6px"><?= nl2br(esc(is_array($hasil) ? implode(', ', $hasil) : (string) $hasil)) ?></p>
            </div>
        </div>

        <div class="cta">
            <strong>Langkah Selanjutnya:</strong>
            <ul>
                <li>Pelajari program studi yang direkomendasikan untuk menemukan yang paling sesuai.</li>
                <li>Diskusikan hasil ini dengan guru atau konselor untuk pertimbangan lebih lanjut.</li>
                <li>Simpan PDF ini sebagai bukti hasil tes dan referensi saat memilih jurusan.</li>
            </ul>
            <p class="small">Semangat! Ambil keputusan yang tepat untuk masa depan Anda — mulailah eksplorasi jurusan hari ini.</p>
        </div>

        <div style="margin-top:14px" class="small">Dicetak pada: <?= date('Y-m-d H:i') ?></div>
    </div>
</body>
</html>