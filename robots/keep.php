<html>
<head>
<style>
p {
	text-decoration:none;
	border-bottom:2px solid white;
}
</style>
</head>
<body>
<?php

$objGsmOut = new COM ("ActiveXperts.GsmOut");
$nDevices = $objGsmOut->GetDeviceCount();
$device = $objGsmOut->GetDevice(0);
$objGsmOut->Device     = $objGsmOut->GetDevice(0);
$objGsmOut->DeviceSpeed      = 10; 
$today = date('F j, Y');
include "dbase.php";
$query = "Select * from announcement where announce_subj = '$today'";
$res = mysqli_query($con,$query);
$cnthol = 0;
if ($res->num_rows > 0)
{
			while($rw = mysqli_fetch_array($res)) {
				$cnthol = $cnthol + 1;
				$party = $rw['dateencode'];
				$ann = $rw['announce_desc'];
			}
}
mysqli_close($con);
$q = $_POST['idnum'];
$count = 0;
include "dbase.php";
$sql="SELECT * FROM per_files WHERE card_number = '$q'";
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
				$gender = $row['trck_str']."-".$row['year_level']." ".$row['section'];
				$img = $row['st_picture'];
				$lvl = $row['year_level'];
				
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
					<col width='30%'>
					<col width='20%'>
					
					
							
							<tr>
								<td>
								<center>
								<span style='color:yellow; font:cambria; font-size:19px'>ID NO.</span>
									<p style='font-size:40px; font:times new roman; color:white;'><b>".$stu_id."</b></p></center>
								<center>
								<span style='color:yellow; font:cambria; font-size:19px'>FULLNAME</span>
									<p style='font-size:40px; font:times new roman; color:white;'><b>".$name."</b></p></center>
									
									<center><span style='color:yellow; font:cambria; font-size:19px'>TRACK/STRAND</span>
									<p style='font-size:40px; font:times new roman;  color:white;'><b>".$gender."</b></p></center>
									 
									 <center><span style='color:yellow; font:cambria; font-size:19px'>TIME OUT</span>
									 <p style='font-size:40px; font:times new roman;  color:white;'><b>".$timein."</b></p><center>
								</td>
								<td></td>
								<td style='padding:0 0;'>
								<img  src='data:image/jpeg;base64,".base64_encode($img)."' style = 'height:350px; weight:350px; object-fit:cover;'/>

								</td>
					
						</tr>
							
						</table>
						";
						
						
						
						$sql = "update attendance set timeout = '$timein' where  attendance_id = '$att'";
						$con->query($sql);
					
						if ($cnthol === 1)
						{
							if ($party == "$lvl" or $party == "SHS")
							{
									$objGsmOut->MessageRecipient = $cono;
									$objGsmOut->MessageData      = 'Mr/Ms '.$name." is out at ".$timein." Today is ".$ann;
						  
									if($objGsmOut->LastError == 0)
										{
											$objGsmOut->Send;
										}
							}
							else
							{
								$objGsmOut->MessageRecipient = $cono;
								$objGsmOut->MessageData      = 'Mr/Ms '.$name." is out at ".$timein;
					  
								if($objGsmOut->LastError == 0)
									{
										$objGsmOut->Send;
									}
									}
						}
						else if ($cnthol > 1) 
						{
							$objGsmOut->MessageRecipient = $cono;
							$objGsmOut->MessageData      = 'Mr/Ms '.$name." is out at ".$timein." Today is ".$ann;
				  
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
				$tme_stat = 'in';
				echo
					"<table style='width:100%; color:black; border:1px;'>
					<col width='30%'>
					<col width='20%'>
										
						<tr>
								<td>
								<center>
								<span style='color:yellow; font:cambria; font-size:19px'>ID NO.</span>
								<p style='font-size:40px; color:white;'><b>".$stu_id."</b></p></center>
								<center>
								<span style='color:yellow; font:cambria; font-size:19px'>FULLNAME</span>
									<p style='font-size:40px; color:white;'><b>".$name."</b></p></center>
									
									<center><span style='color:yellow; font:cambria; font-size:19px'>TRACK/STRAND</span>
									 <p style='font-size:40px; color:white;'><b>".$gender."</b></p></center>
									 
									 <center><span style='color:yellow; font:cambria; font-size:19px'>TIME IN</span>
									 <p style='font-size:40px; color:white;'><b>".$timein."</b></p><center>
								</td>
								<td></td>
								<td style='padding:0 0;'><img  src='data:image/jpeg;base64,".base64_encode($img)."' style = 'height:350px; weight:350px; object-fit:cover;'/>

								</td>
					
						</tr>
									
							
						
					</table>
					";
					
					
					$sql2 = "insert into attendance values(0,'$stu_id','$today','$timein','none','')";
					$con->query($sql2);
					if ($cnthol === 1)
						{
							if ($party == "$lvl" or $party == "SHS")
							{
								$objGsmOut->MessageRecipient = $cono;
								$objGsmOut->MessageData      = 'Mr/Ms '.$name." is in at ".$timein." Today is ".$ann;
				  
								if($objGsmOut->LastError == 0)
									{
										$objGsmOut->Send;
									}
							}
							else
							{
								$objGsmOut->MessageRecipient = $cono;
								$objGsmOut->MessageData      = 'Mr/Ms '.$name." is in at ".$timein;
				  
								if($objGsmOut->LastError == 0)
									{
										$objGsmOut->Send;
									}
							}
						}
						else if ($cnthol > 1) 
						{
							$objGsmOut->MessageRecipient = $cono;
							$objGsmOut->MessageData      = 'Mr/Ms '.$name." is in at ".$timein." Today is ".$ann;
				  
							if($objGsmOut->LastError == 0)
								{
									$objGsmOut->Send;
								}
						}
						else{
							$objGsmOut->MessageRecipient = $cono;
							$objGsmOut->MessageData      = 'Mr/Ms '.$name." is in at ".$timein;
				  
							if($objGsmOut->LastError == 0)
								{
									$objGsmOut->Send;
								}
						}
			
			}
			if ($tme_stat = 'in')
			{
						
			}
			else{
						
						
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