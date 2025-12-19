<?php
require __DIR__ . '/../vendor/autoload.php';
$html = '<h1>Test PDF</h1><p>OK</p>';
$dom = new \Dompdf\Dompdf();
$dom->loadHtml($html);
$dom->setPaper('A4', 'portrait');
$dom->render();
file_put_contents(__DIR__ . '/out.pdf', $dom->output());
echo 'Wrote ' . filesize(__DIR__ . '/out.pdf') . " bytes\n";
