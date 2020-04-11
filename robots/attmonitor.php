<?php
include 'dbase.php';
if ($fnd != '') {

			$sql = "Select * from monitor_att where last_name like % '$fnd'%";
			$result = $con->query($sql);
			if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) {
						echo "<tr><td>".$row['last_name'].", ".$row['first_name']."</td>
						<td>".$row['date']."</td>
						<td>".$row['timein']."</td>
						<td>".$row['timeout']."</td></tr>";
					}
			$con->close();
					}
		}
else
{
	
}
?>