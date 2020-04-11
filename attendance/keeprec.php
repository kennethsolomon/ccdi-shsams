
<html>
<head>

</head>
<body>

<?php
$q = $_POST['idnum'];
$count = 0;
include "dbase.php";
$sql="SELECT * FROM files WHERE identification_number = '".$q."'";
$result = mysqli_query($con,$sql);

$today = date('F j, Y');
//$timein = date('h:i:sa');
var x = new Date();
x1 = x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();

if ($result->num_rows > 0)
{
			while($row = mysqli_fetch_array($result)) {
				$name = $row['last_name'].', '.$row['first_name'];
			}
			echo "in";
}
else
{
	echo "<h1>Students not found! Please proceed to System Administrator!.</h1>";
}
			

mysqli_close($con);


?>

</body>
</html>