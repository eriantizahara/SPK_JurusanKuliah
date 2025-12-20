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

        // Validasi sederhana (aman untuk dosen)
        foreach ($data as $key => $value) {
            if (empty($value)) {
                return redirect()->to('/form')
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

        foreach ($data as $key => $value) {
            if (empty($value)) {
                return redirect()->to('/form')
                    ->with('error', 'Semua field wajib diisi sebelum mengunduh PDF!');
            }
        }

        $service = new DecisionTreeService();
        $hasil = $service->proses($data);

        $viewData = [
            'hasil' => $hasil,
            'input' => $data
        ];

        // If Dompdf is installed, generate PDF
        if (class_exists('\Dompdf\Dompdf')) {
            $html = view('pages/v_hasil_pdf', $viewData);

            $dompdf = new \Dompdf\Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            $output = $dompdf->output();

            return $this->response->setHeader('Content-Type', 'application/pdf')
                ->setHeader('Content-Disposition', 'attachment; filename="Rekomendasi_Jurusan.pdf"')
                ->setBody($output);
        }

        // Fallback: render printable HTML view and instruct user to print to PDF
        $html = view('pages/v_hasil_pdf', $viewData);
        return $this->response->setBody($html);
    }
}