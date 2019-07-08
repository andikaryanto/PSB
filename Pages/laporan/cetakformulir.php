<?php
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', '14');
    $pdf->Cell(0,20, 'PENERIMAAN SISWA BARU SMP MUH 1 MLATI', '0', 1, 'L');
    $pdf->Cell(0,10, 'jalan Magelang km 7.5, Sendangadi Mlati ', '0', 1, 'L');
    $pdf->Output();
?>