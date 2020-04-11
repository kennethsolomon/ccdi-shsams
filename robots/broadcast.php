<?php
$objGsmOut = new COM ("ActiveXperts.GsmOut");
$nDevices = $objGsmOut->GetDeviceCount();
$device = $objGsmOut->GetDevice(0);
$objGsmOut->Device     = $objGsmOut->GetDevice(0);
$objGsmOut->DeviceSpeed      = 10; 
include "dbase.php";

	$sql = "select * from enrolled_en";


								
								$result = $con->query($sql);
								
								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc())
									{
										$contactno = $row['contact_number'];
										$cono = '+63'.substr($contactno,1,10);
										$objGsmOut->MessageRecipient = $cono;
										$objGsmOut->MessageData      = $consms;
							  
										if($objGsmOut->LastError == 0)
											{
												$objGsmOut->Send;
											}
									}
								}
?>