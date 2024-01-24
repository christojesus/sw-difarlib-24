<?php
require('fpdf.php');
include_once('config/getFecha.php');
include_once('config/listProductos.php');

$linea = '10';

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $titulo = 'Laboratorio SAVAL - Productos Farma';
        // Logo
        $this->Image('config/logoDifarlib.png', 12, 12, 18);
        $this->SetFont('Arial', 'B', 11);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30, 20, $titulo, 0, 0, 'C');
        // Fecha
        $this->SetFont('Arial', '', 10);
        $this->Cell(70, 20, fechaEs(date('d-m-Y')), 0, 0, 'R');
        // Salto de línea
        $this->Ln(20);
        // Primera fila
        $this->SetXY(10, 30);
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(20, 7, utf8_decode("CÓDIGO"), 1, 0, 'C');
        $this->Cell(90, 7, "PRODUCTO", 1, 0, 'C');
        $this->Cell(30, 7, utf8_decode("PRESENTACIÓN"), 1, 0, 'C');
        $this->Cell(20, 7, "V.V.", 1, 0, 'C');
        $this->Cell(20, 7, "P.V.", 1, 0, 'C');
        $this->SetY(37);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, utf8_decode('Pág. ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Filas productos
getProductos($linea);
