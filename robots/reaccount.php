<?php
//including the database connection file
include "dbase.php";
 
//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table

$sql = "Select * from account_det where usrid = '$id'";
$result = $con->query($sql);
if ($result->num_rows > 0)
{
	while ($row = $result->fetch_assoc())
	{
		$stat = $row['usr_status'];
		
		$lname = $row['last_name'];
	}
}
				if ($stat === "activated") 
				{
					$sql="UPDATE account SET usr_name='$lname', usr_pass='$lname' where usrid = '$id'";
						if($con->query($sql)){
							header("Location:personnel.php?statu=Account is restore succesfully!&err=success");
						}
						else
						{
							header("Location:personnel.php?statu=Unable to save changes!&err=error");
						}
				}
				else
				{
							header("Location:personnel.php?statu=Account is not active. Unable to restore!&err=error");
				}

	







?>