
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
</head>

<body>
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
          <li >
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
		  <li class="active">
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
		  <form method="post" action="">
             <section class="panel">
              <header class="panel-heading">
                <center>
                <p><h3>UPDATE STUDENT DETAILS</h3></p></center>
				
				
              </header>
				<?php
				$id = $_GET['id'];
								include "dbase.php";
								$sql = "select * from sum_of_class where class_code = '$id'";
								$result = $con->query($sql);
								$x = 0;
								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc())
									{
										$idnum = $row['class_code'];
										$lname = $row['last_name'].", ".$row['first_name'];
										$track = $row['tracks'];
										$sy = $row['sy'];
										$tr = $row['semester'];
										$st= $row['class_stat'];
										
										
										
									}
								}
				echo '<div class="panel-body">
					<form enctype="multipart/form-data" method="post" action="'. $_SERVER["PHP_SELF"] .'">
						<input type="text" name="lname" class="form-control" value="'.$lname.'" disabled>
						<br>			 
						<input type="text" name="fname" class="form-control" value="'.$track.'" disabled>
						<br>									  
						<input type="text" name="mname" class="form-control" value="'.$sy.'" disabled>
						<br>									   							
						<input type="text" name="add" class="form-control" value="'.$tr.'" disabled> 
						<br>
						<input type="text" name="stat" class="form-control" value="'.$st.'"> 
						<br>
					
						
						<button name="update" type="submit" class="btn btn-success  btn-sm">Save Changes</button>	 
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
		
	$sts= $_POST['stat'];
	include 'dbase.php';
	$sql = "update per_class set class_stat = '$sts' where class_code = '$id'";

		if($con->query($sql)){
			
			echo "<script>alert('Succesfully save!')</script>";
			
		}
		else
		{
			echo "<script>alert('Cannot save. Please recheck your filled data!')</script>";
			
		}
	
}
?>

