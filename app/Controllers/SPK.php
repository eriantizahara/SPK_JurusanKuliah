<?php

namespace App\Controllers;

use App\Services\DecisionTreeService;

class SPK extends BaseController
{

    public function proses()
    {
        // Ambil data dari form
        $data = [
            'minat'       => $this->request->getPost('minat'),
            'kepribadian' => $this->request->getPost('kepribadian'),
            'karir'       => $this->request->getPost('karir'),
            'kemampuan'   => $this->request->getPost('kemampuan'),
            'industri'    => $this->request->getPost('industri'),
        ];

        // Validasi wajib
        $required = ['minat', 'kepribadian', 'karir', 'kemampuan'];

        // industri hanya wajib untuk Saintek & SosHum
        if (in_array($data['minat'], ['Saintek', 'SosHum'])) {
            $required[] = 'industri';
        }

        foreach ($required as $field) {
            if (empty($data[$field])) {
                return redirect()->to('/mulai')
                    ->with('error', 'Semua field wajib diisi!');
            }
        }


        // Proses SPK
        $service = new DecisionTreeService();
        $hasil = $service->proses($data);

        // Kirim ke view result
        return view('pages/v_hasil', [
            'hasil' => $hasil,
            'input' => $data
        ]);
    }

    /**
     * Generate PDF result (uses Dompdf if available, otherwise returns printable HTML)
     */
    public function pdf()
    {
        // Ambil data dari form (sama validasi seperti proses)
        $data = [
            'minat'       => $this->request->getPost('minat'),
            'kepribadian' => $this->request->getPost('kepribadian'),
            'karir'       => $this->request->getPost('karir'),
            'kemampuan'   => $this->request->getPost('kemampuan'),
            'industri'    => $this->request->getPost('industri'),
        ];

        // Validasi wajib
        $required = ['minat', 'kepribadian', 'karir', 'kemampuan'];

        // industri hanya wajib untuk Saintek & SosHum
        if (in_array($data['minat'], ['Saintek', 'SosHum'])) {
            $required[] = 'industri';
        }

        foreach ($required as $field) {
            if (empty($data[$field])) {
                return redirect()->to('/mulai')
                    ->with('error', 'Semua field wajib diisi sebelum mengunduh PDF!');
            }
        }


        $service = new DecisionTreeService();
        $hasil = $service->proses($data);

        $html = view('pages/v_hasil_pdf', [
            'hasil' => $hasil,
            'input' => $data
        ]);

        // 🔴 WAJIB: bersihkan output buffer
        if (ob_get_length()) {
            ob_end_clean();
        }

        $dompdf = new \Dompdf\Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // 🔥 PENTING: gunakan stream(), BUKAN setBody()
        $dompdf->stream(
            'Rekomendasi Jurusan Kuliah.pdf',
            ['Attachment' => false] // false = preview, true = langsung download
        );

        exit;
    }
}
