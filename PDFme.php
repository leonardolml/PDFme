<?php
require('fpdf.php');

// Recupera nome
$nome = $_POST["nome"];
$nome = "Nome: ".$nome;

// Recupera email
$email = $_POST["email"];
$email = "Email: ".$email;

// Recupera telefone
$telefone = $_POST["telefone"];
$telefone = "Telefone: ".$telefone;

// Recupera data
$date = $_POST["date"];
$date = "Data: ".$date;

// Gera data e hora para o nome do arquivo
date_default_timezone_set('America/Sao_Paulo');
$fileNameByDateTime = date('Y-m-d H-i-s');
$fileNameByDateTime = $fileNameByDateTime.".pdf";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(10,10,$nome);
$pdf->Cell(20,20,$email);
$pdf->Cell(30,30,$telefone);
$pdf->Cell(40,40,$date);
$pdf->Output('d',$fileNameByDateTime);


?>
