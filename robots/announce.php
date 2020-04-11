
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Announcement</title>

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
  <style>
{
  box-sizing: border-box;
}


.column {
  float: left;
  width: 50%;
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
          <li >
            <a class="" href="request.php">
                          <i class=""></i>
                          <span>Student</span>

                      </a>

          </li>
		  <li>
            <a class="" href="personnel.php">
                          <i class=""></i>
                          <span>Personnel</span>

                      </a>

          </li>
		  
          <li>
            <a class="" href="attendance.php">
                          <i class=""></i>
                          <span>Monitor</span>

                      </a>

          </li>
         <li class="active">
            <a class="" href="announce.php">
                          <i class=""></i>
                          <span>Announcement</span>

                      </a>

          </li>
          <li>
            <a class="" href="account.php">
                          <i class=""></i>
                          <span>Account</span>

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
		     
             <section class="panel">
              <header class="panel-heading">
                <center>
                <p><h3>Broadcast Announcement(s)</h3></p></center>
				
				
              </header>
					
				
				<div class="panel-body">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" >
						<div class="row">
						  <div class="column">
								Announcement Details <br><br>
								Title
								<input type="text" name="title" class="form-control" >
								
								Content SMS:
								<textarea rows="10" name="smscon" class="form-control">
								Content here....
								 </textarea>
								<br><br>
								<button name="sase" type="submit" class="btn btn-success  btn-sm">Send & Save</button>
												
						  </div>
						  <div class="column">
								 Involve Party<br>
								<br> 
								Party
								<select  name='party' class='form-control'>
									<option value="SHS">SHS</option>
									<option value="11">Grade 11</option>
									<option value="12">Grade 12</option>
								</select>
								<br>
								
						  </div>
						  
						  
						  
						
						  
						  
						</div>	
						<div class="row">
						  <table class="table">
							<tbody>
							  <tr>
								<th><i class="icon_profile"></i> ID</th>
								<th><i ></i> Title</th>
								<th><i ></i> Description</th>
								<th><i ></i> Involve Party</th>
								<th><i ></i> Date Encoded</th>
								<th><i ></i> Status</th>
								
							
							  </tr>
							  
							  <?php
								include "dbase.php";
								$sql = "select * from annoucement";
								$result = $con->query($sql);
								$x = 0;
								if ($result->num_rows > 0) 
								{
									while($row = $result->fetch_assoc())
									{
										$tr = $row['tr_no'];
										$title = $row['annouce_title'];
										$smscon = $row['an_des'];
										$party = $row['party'];
										$dateenc = $row['dateenc'];
										$sta= $row['an_stat'];
									
									
										
										echo "<tr>";
										echo "<td>".$tr."</td>";
											echo "<td>".$title."</td>";
											echo "<td>".$smscon."</td>";
											echo "<td>".$party."</td>";
											echo "<td>".$dateenc."</td>";
											echo "<td>".$sta."</td>";
											
											
											$x = $x + 1;
									}
								}
							  ?>
							  
							  
							  
							</tbody>
						  </table>
						</div>
					</form>		
               
				</div>
            </section>
		</div>
		</div>



    
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
if (isset($_POST['sase']))
{
	include 'dbase.php';
	
      $today = date('F j, Y');
	  $title = $_POST['title'];
	  $consms = $_POST['smscon']; 
	  $party = $_POST['party'];
	 $sql = "insert into annoucement values(0,'$title','$consms','$party','$today','')";
				if($con->query($sql)){
					echo "<script>alert('Succesfully save!')</script>";
					header("Refresh:0");
					
				}
				else
				{
					echo "<script>alert('Unable to save!')</script>";
					header("Refresh:0");
					
				}	
	include "broadcast.php";
}
?>
