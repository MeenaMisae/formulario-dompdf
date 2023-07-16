<?php 

require_once('vendor/autoload.php');

use Dompdf\Dompdf;

$nome = $_POST["nome"];
$dataDeNascimento = $_POST["data"];

$html = "<h1>Resultados</h1>";
$html .= "<h3>Olá, $nome. Seus dados são: </h3>";
$html .= "Nome: $nome." . "<br>";
$html .= "Data de Nascimento: $dataDeNascimento.";


$dompdf = new Dompdf;

$dompdf->setPaper("A4","landscape");

$dompdf->loadHtml($html);

$dompdf->render();

$dompdf->stream("resultados.pdf");