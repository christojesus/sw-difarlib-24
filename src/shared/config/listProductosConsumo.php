<?php
function getProductos($linea)
{
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 8);

    session_start();
    require 'database.php';
    $sql = "SELECT MatV_Codigo, MatV_Desc, MatV_UMB, MatF_Precio FROM pro_tbmaterial
        WHERE MatI_Stock > 0 AND linea LIKE '$linea'
        AND MatV_Codigo IN (SELECT articulo FROM pro_tbsublinea)
        AND MatV_Desc NOT LIKE ('%(B)%') AND MatV_Desc NOT LIKE ('%PROMOCIONAL%')
        ORDER BY MatV_Desc ASC";
    $productos = $conn->query($sql);

    while ($row = $productos->fetch_assoc()) {
        $pdf->Cell(20, 4, utf8_decode($row["MatV_Codigo"]), 1, 0, 'C');
        $pdf->Cell(90, 4, utf8_decode($row['MatV_Desc']), 1, 0, 'L');
        $pdf->Cell(30, 4, utf8_decode($row['MatV_UMB']), 1, 0, 'L');
        $pdf->Cell(20, 4, $row['MatF_Precio'], 1, 0, 'R');
        $pdf->Cell(20, 4, number_format($row['MatF_Precio'] * 1.18, 2), 1, 0, 'R');
        $pdf->Ln();
    }
    $pdf->Output();
}
