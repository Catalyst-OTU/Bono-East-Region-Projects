<?php 
session_start();
include('FPDF/fpdf.php');



$connection = mysqli_connect("localhost","root","","bonoeast_region");
$query = "SELECT * FROM nkoranza_north";
$query_run = mysqli_query($connection, $query);




if (isset($_POST['btn_pdf']))
 {
     
     $pdf = new FPDF('p', 'mm', 'a4');
     $pdf->SetFont('arial', 'b', '12');
     $pdf->AddPage();
     $pdf->cell('10', '10', 'S/N', '1', '0', 'C');
     $pdf->cell('20', '10', 'PS CODE', '1', '0', 'C');
     $pdf->cell('80', '10', 'POLLING STATION NAME', '1', '0', 'C');
     $pdf->cell('35', '10', 'REGISTER 2019', '1', '0', 'C');
     $pdf->cell('40', '10', 'REGISTER TOTAL', '1', '0', 'C');
     $pdf->cell('15', '10', '%', '1', '1', 'C');



    $pdf->SetFont('arial', '', '9');

    while ($row = mysqli_fetch_assoc($query_run)) 
    {
        $pdf->cell('10', '10', $row['id'], '1', '0', 'C');
        $pdf->cell('20', '10', $row['polling_station_code'], '1', '0', 'C');
        $pdf->cell('80', '10', $row['polling_station_name'], '1', '0', 'C');
        $pdf->cell('35', '10', $row['register_2019'], '1', '0', 'C');
        $pdf->cell('40', '10', $row['registered_total'], '1', '0', 'C');
        $pdf->cell('15', '10', $row['percentage_change'], '1', '1', 'C');
    }



     $pdf->Output();

 }







?>










