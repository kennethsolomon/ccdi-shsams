
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Update Student</title>

  <link href="../style/css/bootstrap.min.css" rel="stylesheet">
  <link href="../style/css/bootstrap-theme.css" rel="stylesheet">
  <link href="../style/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../style/css/font-awesome.min.css" rel="stylesheet" />
  <link href="../style/style/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="../style/style/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <link href="../style/style/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
 
  <link rel="stylesheet" href="../style/css/owl.carousel.css" type="text/css">
  <link href="../style/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <link rel="stylesheet" href="../style/css/fullcalendar.css">
  <link href="../style/css/widgets.css" rel="stylesheet">
  <link href="../style/css/style.css" rel="stylesheet">
  <link href="../style/css/style-responsive.css" rel="stylesheet" />
  <link href="../style/css/xcharts.min.css" rel=" stylesheet">
  <link href="../style/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <script src="../style/js/jquery.js"></script>
  <script type='text/javascript'>

  function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
  </script>
   <style>
{
  box-sizing: border-box;
}


.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 500px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>

<body>
<?php
ob_start();
?>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
			<img src="../style/images/ccdilogo.png" />
      </div>
      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
         
           <h1>COMPUTER COMMUNICATION DEVELOPMENT INSTITUTE<br>Attendance Monitoring System with <br>Radio Frequency Identification Card</h1>
         
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        
      </div>
    </header>
    <!--header end-->
<br><br><br>
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
       <!-- sidebar menu start--><br><BR>
        <ul class="sidebar-menu">
          <li >
            <a class="" href="admin.php">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="request.php">
                          <i class=""></i>
                          <span>Student</span>

                      </a>

          </li>
		  <li>
            <a class="" href="faculty.php">
                          <i class=""></i>
                          <span>Faculty</span>

                      </a>

          </li>
		  <li>
            <a class="" href="fclass.php">
                          <i class=""></i>
                          <span>Class</span>

                      </a>

          </li>
          <li>
            <a class="" href="attendance.php">
                          <i class=""></i>
                          <span>Monitor</span>

                      </a>

          </li>
          <li>
            <a class="" href="account.php">
                          <i class=""></i>
                          <span>My Account</span>

                      </a>

          </li>
		   
		   <li>
            <a class="" href="logout.php">
                          <i class=""></i>
                          <span>Log out</span>

                      </a>
          </li>
        </ul>
      </div>
    </aside>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start--><br><BR>
        <div class="row">
          <div class="col-lg-12">
		  <form method="post" action="" enctype="multipart/form-data">
             <section class="panel">
              <header class="panel-heading">
                <center>
                <p><h3>UPDATE STUDENT DETAILS</h3></p></center>
				
				
              </header>
				<?php
				
				$id = $_GET['id'];
								include "dbase.php";
								$sql = "select * from per_files where identification_number = '$id'";
								$result = $con->query($sql);
								$x = 0;
								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc())
									{
										$idnum = $row['identification_number'];
										$cardnum = $row['card_number'];
										$lname = $row['last_name'];
										$fname = $row['first_name'];
										$mname = $row['middle_name'];
										$address = $row['address'];
										$gender= $row['gender'];
										$bday = $row['birthday'];
										$tcstr = $row['trck_str'];
										$yrlvl = $row['year_level'];
										$sect = $row['section'];
										$conper = $row['contact_person'];
										$connum = $row['contact_number'];
										$img = $row['st_picture'];
										
									}
								}
				echo '<div class="panel-body">
					
				
						<form enctype="multipart/form-data" method="post" action="'. $_SERVER["PHP_SELF"] .'">	
					
						<div class="row">
						  <div class="column">
								PERSONAL INFORMATION <br><br>
								Identification Number:
								<input type="text" name="idnum" class="form-control" value="'.$idnum.'" >
								Card Number:
								<input type="text" name="cardnum" class="form-control"  value="'.$cardnum.'">
								Last name:
								<input type="text" name="lname" class="form-control" value="'.$lname.'" >
								First name:
								<input type="text" name="fname" class="form-control" value="'.$fname.'">
								Middle name:
								<input type="text" name="mname" class="form-control" value="'.$mname.'">
								Address:									   							
								<input type="text" name="add" class="form-control" value="'.$address.'"> 
								Birthday
								<input type="text" name="bday" class="form-control" value="'.$bday.'" >
								Gender
								<input type="text" name="gender" class="form-control" value="'.$gender.'"> 
								
												
						  </div>
						  <div class="column">
						  COURSE DETAILS<br>
								<br>Track/Strand
								<input type="text" name="trck" class="form-control" value="'.$tcstr.'">
								Year Level
								<select name="yrlv" class="form-control">
									<option value="'.$yrlvl.'">'.$yrlvl.'<option>
										<option value=11>11</option>
										<option value=12>12</option>
								</select>
								Section
								<input type="text" name="sec" class="form-control" value="'.$sect.'">
								<br><br><br>
								CONTACT DETAILS <br>
								<br> Contact Person
								<input type="text" name="conper" class="form-control" value="'.$conper.'"> 
								Contact Number
								<input type="text" name="connum" class="form-control" value="'.$connum.'"> 
								<br>
								<br>
								<button name="update" type="submit" class="btn btn-success  btn-lg">Save Changes</button>
								
							
						  </div>
						  
						  <div class="column"><center>
								<img id="output_image"  src="data:image/jpeg;base64,'.base64_encode($img).'" style = "height:300px; weight:300px; object-fit:cover;"/><br>
								<br>
								<input type="file" id = "profile-img" name="ifile" accept = ".jpeg, .jpg, .png"  onchange="preview_image(event)" > 
								</center><br>
						  </div>
						</div>
					
						</form>
               
				</div>';
				?>
            </section>
		</div>
		</div>
</form>
	

    
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/jquery-ui-1.10.4.min.js"></script>
  <script src="../assets/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="../assets/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../assets/js/jquery.scrollTo.min.js"></script>
  <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="../assets/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="../assets/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="../assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="../assets/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="../assets/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="../assets/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../assets/js/calendar-custom.js"></script>
    <script src="../assets/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../assets/js/jquery.customSelect.min.js"></script>
    <script src="../assets/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="../assets/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../assets/js/sparkline-chart.js"></script>
    <script src="../assets/js/easy-pie-chart.js"></script>
    <script src="../assets/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/js/xcharts.min.js"></script>
    <script src="../assets/js/jquery.autosize.min.js"></script>
    <script src="../assets/js/jquery.placeholder.min.js"></script>
    <script src="../assets/js/gdp-data.js"></script>
    <script src="../assets/js/morris.min.js"></script>
    <script src="../assets/js/sparklines.js"></script>
    <script src="../assets/js/charts.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script>
    //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
<?php

if (isset($_POST['update']))
{
	$sc_id = $_POST['idnum'];
	$cnum = $_POST['cardnum'];
		$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$add = $_POST['add'];
	$gender = $_POST['gender'];
	$bday = $_POST['bday'];
	$tr = $_POST['trck'];
	$yr = $_POST['yrlv'];
	$se = $_POST['sec'];
	$conper = $_POST['conper'];
	$connum = $_POST['connum'];
	include 'dbase.php';
	$filename = $_FILES['ifile']['name'];
	$check = getimagesize($_FILES["ifile"]["tmp_name"]);
	if($check !== false){
			$imgs =  addslashes(file_get_contents($_FILES['ifile']['tmp_name']));
			$sql = "update per_files set identification_number ='$idnum', card_number='$cnum', trck_str = '$tr',year_level='$yr', section='$se', last_name = '$lname', first_name = '$fname', middle_name = '$mname', address = '$add', birthday = '$bday', contact_person = '$conper', contact_number='$connum', gender = '$gender', st_picture='$imgs' where identification_number = '$idnum'";
			if($con->query($sql)){
			
			
			header("location:request.php");
			echo "<script>alert('Succesfully save!')</script>";
			}
			else
			{
				echo "<script>alert('Cannot save. Please recheck the data file!')</script>";
				
			}
		}
		else{
			$sql = "update per_files set identification_number ='$sc_id', card_number='$cnum', trck_str = '$tr',year_level='$yr', section='$se',last_name = '$lname', first_name = '$fname', middle_name = '$mname',  address = '$add', birthday = '$bday', contact_person = '$conper', contact_number='$connum', gender = '$gender' where identification_number = '$idnum'";
			if($con->query($sql)){
			
			echo "<script>alert('Succesfully save!')</script>";
			header("location:request.php");
			}
			else
			{
				echo "<script>alert('Cannot save. Please recheck your filled data!')</script>";
				
			}
		}
		
	
}
?>

