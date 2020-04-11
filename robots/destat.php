<?php
//including the database connection file
include "dbase.php";
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table

$sql = "Select * from account where account_id = '$id'";
$result = $con->query($sql);
if ($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		$stat = $row['usr_status'];
	}
}
if ($stat === 'activated') $result = mysqli_query($con, "UPDATE account SET usr_status='deactivate' where account_id = '$id'");

	

 
 
header("Location:account.php");

?>