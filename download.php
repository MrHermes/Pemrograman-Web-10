<?php
require('fpdf/fpdf.php');

$pdf = new FPDF('L','mm','A4');

$pdf->AddPage();

$pdf->SetFont('Arial','B',16);

$pdf->Cell(275,7,'INSTITUT TEKNOLOGI SEPULUH NOPEMBER SURABAYA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(275,7,'DAFTAR SISWA KELAS PEMROGRAMAN WEB (A)',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,7,'FOTO',1,0,'C');
$pdf->Cell(35,7,'Nama',1,0,'C');
$pdf->Cell(35,7,'Alamat',1,0,'C');
$pdf->Cell(40,7,'Jenis Kelamin',1,0,'C');
$pdf->Cell(55,7,'Agama',1,0,'C');
$pdf->Cell(60,7,'Sekolah Asal',1,1,'C');

$pdf->SetFont('Arial','',10);

include 'config.php';
$siswa = $pdo->query("SELECT * FROM calon_siswa");
while ($row = $siswa->fetch()){
    $imagePath = "images/" . $row['foto'];
    if(file_exists($imagePath)){
        $pdf->Cell(50,50,"",1,0); 
        $pdf->Image($imagePath, $pdf->GetX() - 45, $pdf->GetY() + 5, 40, 40);
    }
    else{
        $pdf->Cell(50, 50, 'Tidak Ada Gambar', 1, 0, 'C');
    }
    $pdf->Cell(35,50,$row['nama'],1,0,'C');
    $pdf->Cell(35,50,$row['alamat'],1,0,'C');
    $pdf->Cell(40,50,$row['jenis_kelamin'],1,0,'C'); 
    $pdf->Cell(55,50,$row['agama'],1,0,'C'); 
    $pdf->Cell(60,50,$row['sekolah_asal'],1,1,'C'); 
}

$pdf->Output();
?>