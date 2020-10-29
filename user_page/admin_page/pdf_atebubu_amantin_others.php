<?php 
session_start();
include('FPDF/fpdf.php');



$connection = mysqli_connect("localhost","root","","atebubu_amantin");
$query = "SELECT * FROM others";
$query_run = mysqli_query($connection, $query);





if (isset($_POST['btn_pdf']))
 {
     
     $pdf = new FPDF('p', 'mm', 'a4');
     $pdf->SetFont('arial', 'b', '12');
     $pdf->AddPage();
     $pdf->cell('10', '10', 'S/N', '1', '0', 'C');
     $pdf->cell('35', '10', 'USERNAME', '1', '0', 'C');
     $pdf->cell('25', '10', 'VOTERS ID', '1', '0', 'C');
     $pdf->cell('25', '10', 'PHONE', '1', '0', 'C');
     $pdf->cell('35', '10', 'DATE OF BIRTH', '1', '0', 'C');
     $pdf->cell('70', '10', 'POLLING STATIONS', '1', '1', 'C');



    $pdf->SetFont('arial', '', '9');

    while ($row = mysqli_fetch_assoc($query_run)) 
    {
        $pdf->cell('10', '10', $row['id'], '1', '0', 'C');
        $pdf->cell('35', '10', $row['username'], '1', '0', 'C');
        $pdf->cell('25', '10', $row['voters'], '1', '0', 'C');
        $pdf->cell('25', '10', $row['phone'], '1', '0', 'C');
        $pdf->cell('35', '10', $row['dob'], '1', '0', 'C');
        $pdf->cell('70', '10', $row['polling_stations'], '1', '1', 'C');
    }



     $pdf->Output();

 }








?>










