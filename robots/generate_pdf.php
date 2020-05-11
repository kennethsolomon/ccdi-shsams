<?php
//include connection file
include_once("dbase.php");
include_once('libs/fpdf.php');
 $fdate = $_POST['fdate'];
	$udate = $_POST['udate'];
	$track = $_POST['track'];
	$yearlevel = $_POST['yearlevel'];
	$sect = $_POST['section'];
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Attendance Summary' ,0,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$fdate = strtotime($fdate);
$udate = strtotime($udate);
 $cdate = date("F j, Y",$fdate);
 $cdate2 = date("F j, Y",$udate);
$sql =  "SELECT * FROM grd_attendance where datein >= '$cdate' and datein <= '$cdate2' and trck_str = '$track' and year_level = $yearlevel and section = '$sect' group by usr_id, datein";

$result = $con->query($sql);
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);

$pdf->Cell(30,12,"ID Number",1,0,'C');
$pdf->Cell(40,12,"Lastname",1,0,'C');
$pdf->Cell(40,12,"Firstname",1,0,'C');
$pdf->Cell(40,12,"Middlename",1,0,'C');
$pdf->Cell(30,12,"Date",1,0,'C');


$pdf->Ln();
		
	while($rw = $result->fetch_assoc())
	{
		
		$pdf->Cell(30,12,$rw['identification_number'],1);
		$pdf->Cell(40,12,$rw['last_name'],1);
		$pdf->Cell(40,12,$rw['first_name'],1);
		$pdf->Cell(40,12,$rw['middle_name'],1);
		$pdf->Cell(30,12,$rw['datein'],1);
		$pdf->Ln();
		}
	
$pdf->Output();
?>
