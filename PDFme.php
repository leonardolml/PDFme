<?php
require('fpdf.php');

$nome = $_POST["nome"];
$nome = "Nome: ".$nome;

$email = $_POST["email"];
$email = "Email: ".$email;

$telefone = $_POST["telefone"];
$telefone = "Telefone: ".$telefone;

date_default_timezone_set('America/Sao_Paulo');
$fileNameByDateTime = date('Y-m-d H-i-s');
$fileNameByDateTime = $fileNameByDateTime.".pdf";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,$nome);
$pdf->Cell(40,20,$email);
$pdf->Cell(40,80,$telefone);
$pdf->Output('d',$fileNameByDateTime);


?>
