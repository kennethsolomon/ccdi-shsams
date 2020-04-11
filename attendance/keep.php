
<html>
<head>

</head>
<body>

<?php

$objGsmOut = new COM ("ActiveXperts.GsmOut");
$nDevices = $objGsmOut->GetDeviceCount();
$device = $objGsmOut->GetDevice(0);
$objGsmOut->Device     = $objGsmOut->GetDevice(0);
$objGsmOut->DeviceSpeed      = 10; 



$q = $_POST['idnum'];
$count = 0;
include "dbase.php";
$sql="SELECT * FROM card_en WHERE cardnumber = '$q'";
$result = mysqli_query($con,$sql);
date_default_timezone_set('Asia/Manila');
$today = date('F j, Y');
$timein = date('h:i:sa');


if ($result->num_rows > 0)
{
			while($row = mysqli_fetch_array($result)) {
				$stu_id = $row['identification_number'];
				$name = $row['last_name'].', '.$row['first_name'];
				$contactno = $row['contact_number'];
				$gender = $row['track']."-".$row['yearlevel'].$row['section'];
				$img = $row['st_picture'];
				
			}
			$cono = '+63'.substr($contactno,1,10);
			$sql="SELECT * FROM attendance WHERE usr_id = '$stu_id' and datein = '$today' and timeout ='none'";
			$result = mysqli_query($con,$sql);

			if ($result->num_rows > 0)
			{
					$tme_stat = 'out';
					while($row = mysqli_fetch_array($result)) {
						$timeout = $row['timeout'];
						$att = $row['attendance_id'];
					}	
					
						echo
						"<table style='width:100%; color:black; border:1px;'>
					<col width='50%'>
					<col width='50%'>
					
					
							
							<tr>
								<td>
								<center>
								<h2 style='color:yellow;'>FULLNAME</h2>
									<u style='color:white;'><p style='font-size:30px; color:white;'><b>".$name."</b></p></u></center>
									
									<center><h2 style='color:yellow;'>TRACK/STRAND</h2>
									 <u style='color:white;'><p style='font-size:30px; color:white;'><b>".$gender."</b></p></u></center>
									 
									 <center><h2 style='color:yellow;'>TIME OUT</h2>
									 <u style='color:white;'><p style='font-size:30px; color:white;'><b>".$timein."</b></p></u><center>
								</td>
								<td></td>
								<td style='padding:0 0;'><img  src='data:image/jpeg;base64,".base64_encode($img)."' style = 'height:350px; weight:350px; object-fit:cover;'/>

								</td>
					
						</tr>
							
						</table>
						";
						
						
						
						$sql = "update attendance set timeout = '$timein' where  attendance_id = '$att'";
						$con->query($sql);
					
						
						
			}
			else
			{
				$tme_stat = 'in';
				echo
					"<table style='width:100%; color:black; border:1px;'>
					<col width='50%'>
					<col width='50%'>
										
						<tr>
								<td>
								<center>
								<h2 style='color:yellow;'>FULLNAME</h2>
									<u style='color:white;'><p style='font-size:30px; color:white;'><b>".$name."</b></p></u></center>
									
									<center><h2 style='color:yellow;'>TRACK/STRAND</h2>
									 <u style='color:white;'><p style='font-size:30px; color:white;'><b>".$gender."</b></p></u></center>
									 
									 <center><h2 style='color:yellow;'>TIME IN</h2>
									 <u style='color:white;'><p style='font-size:30px; color:white;'><b>".$timein."</b></p></u><center>
								</td>
								<td></td>
								<td style='padding:0 0;'><img  src='data:image/jpeg;base64,".base64_encode($img)."' style = 'height:350px; weight:350px; object-fit:cover;'/>

								</td>
					
						</tr>
									
							
						
					</table>
					";
					
					
					$sql2 = "insert into attendance values(0,'$stu_id','$today','$timein','none','')";
					$con->query($sql2);
			
			}
			if ($tme_stat = 'in')
			{
				$objGsmOut->MessageRecipient = $cono;
				$objGsmOut->MessageData      = 'Mr/Ms '.$name." is in at ".$timein;
      
				if($objGsmOut->LastError == 0)
					{
						$objGsmOut->Send;
					}
			}
			else{
				$objGsmOut->MessageRecipient = $cono;
				$objGsmOut->MessageData      = 'Mr/Ms '.$name." is out at ".$timein;
      
				if($objGsmOut->LastError == 0)
					{
						$objGsmOut->Send;
					}
			}
						
			
			
}
else
{
	echo "<h1>Students not found! Please proceed to System Administrator!.</h1>";
}
			

mysqli_close($con);


?>

</body>
</html>