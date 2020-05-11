<?php
include 'dbase.php';

	
	
			$sc_id = $_POST['idnum'];
			$cardnum = $_POST['cardnum'];
			$lname = $_POST['lname'];
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$add = $_POST['add']; 
			$gender = $_POST['gender'];
			$bday = $_POST['bday'];
			
			$trck = $_POST['track'];
			$yrlvl = $_POST['yrlvl'];
			$sect = $_POST['section'];
			
			$conper = $_POST['conper'];
			$connum = $_POST['connum'];
			$filename = $_FILES['ifile']['name'];
			$check = getimagesize($_FILES["ifile"]["tmp_name"]);
			if($check !== false) {
			  
			  $imgs =  addslashes(file_get_contents($_FILES['ifile']['tmp_name']));
			  
			  $sql = "insert into per_files values('$sc_id','$cardnum','$lname','$fname','$mname','$add','$gender','$bday','$trck','$yrlvl','$sect','$conper','$connum','student','$imgs')";
				if($con->query($sql)){
					header("Location:request.php?statu=Record save successfully!&err=success");
				}
				else
				{
					header("Location:request.php?statu=Unable to save record!&err=error");
					
				}
			}
			else
			{
				
			header("Location:request.php?statu=Unable to save record!&err=error");
			
			}
		
	





?>

