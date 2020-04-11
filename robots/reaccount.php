<?php
//including the database connection file
include "dbase.php";
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table

$sql = "Select * from account_det where account_id = '$id'";
$result = $con->query($sql);
if ($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		$stat = $row['usr_status'];
		$fname = $row['last_name'];
		$lname = $row['last_name'];
	}
}
if ($stat === 'activated') $result = mysqli_query($con, "UPDATE account SET usr_name='$fname', usr_pass='$lname' where account_id = '$id'");

	

 
 
header("Location:account.php");

?>