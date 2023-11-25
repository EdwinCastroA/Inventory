<?php

require "conexion.php";
require "plantilla.php";



$sql = "SELECT id, nombre, descripcion, color, precio, cantidad, cantidad_min, categorias FROM productos ";
$resultado = $mysqli->query($sql);

$pdf = new PDF("P", "mm", "letter");
$pdf->Addpage();


$pdf->Ln(2);

$pdf->SetFont("Arial", "B", 9);

$pdf->Cell(10, 5, "Id", 1, 0, "C");
$pdf->Cell(35, 5, "Nombre", 1, 0, "C");
$pdf->Cell(30, 5, "Descripcion", 1, 0, "C");
$pdf->Cell(20, 5, "color", 1, 0, "C");
$pdf->Cell(20, 5, "precio", 1, 0, "C");
$pdf->Cell(20, 5, "Cantidad", 1, 0, "C");
$pdf->Cell(40, 5, "Cantidad_Minima", 1, 0, "C");
$pdf->Cell(20, 5, "Categorias", 1, 1, "C");



$pdf->SetFont("Arial", "", 9);



while ($fila = $resultado->fetch_assoc()) {

    $pdf->Cell(10, 5, $fila['id'], 1, 0, "C");
    $pdf->Cell(35, 5, $fila['nombre'], 1, 0, "C");
    $pdf->Cell(30, 5, $fila['descripcion'], 1, 0, "C");
    $pdf->Cell(20, 5, $fila['color'], 1, 0, "C");
    $pdf->Cell(20, 5, $fila['precio'], 1, 0, "C");
    $pdf->Cell(20, 5, $fila['cantidad'], 1, 0, "C");
    $pdf->Cell(40, 5, $fila['cantidad_min'], 1, 0, "C");
    $pdf->Cell(20, 5, $fila['categorias'], 1, 1, "C");


}

$pdf->Output();



// $pdf->Output();


    // $pdf->SetTitle($tituloReporte);
    // $pdf->SetAuthor('Marco Robles');
    // $pdf->AliasNbPages();
    // $pdf->SetMargins(10, 10, 10);
//     $pdf->AddPage();

//     $pdf->SetFont("Arial", "B", 9);

//     $pdf->Cell(10, 5, "Id", 1, 0, "C");
//     $pdf->Cell(40, 5, "Nombre", 1, 0, "C");
//     $pdf->Cell(20, 5, "Edad", 1, 0, "C");
//     $pdf->Cell(40, 5, "Matricula", 1, 0, "C");
//     $pdf->Cell(30, 5, "Grado", 1, 0, "C");
//     $pdf->Cell(50, 5, "Correo", 1, 1, "C");

//     $pdf->SetFont("Arial", "", 9);

//     while ($fila = $resultado->fetch_assoc()) {
//         $pdf->Cell(10, 5, $fila['id'], 1, 0, "C");
//         $pdf->Cell(40, 5, mb_convert_encoding($fila['nombre'], 'ISO-8859-1', 'UTF-8'), 1, 0, "C");
//         $pdf->Cell(20, 5, $fila['edad'], 1, 0, "C");
//         $pdf->Cell(40, 5, $fila['matricula'], 1, 0, "C");
//         $pdf->Cell(30, 5, $nombreGrado, 1, 0, "C");
//         $pdf->Cell(50, 5, $fila['correo'], 1, 1, "C");
//     }

//     $pdf->Output('I', $tituloReporte . '.pdf');
// }
