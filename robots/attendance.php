<?php
if (!isset($_SERVER['HTTP_REFERER']))
{
	header ('HTTP/1.0 403 Forbidden'. TRUE, 403);
	die(header('location:error.php'));
}
?>


<?php
if (isset($_POST['print']))
{
	
	
	require('generate_pdf.php');
}
if (isset($_POST['bnsearch']))
{
	$sname = $_POST['valtolook'];
	$sdate = $_POST['valtolook2'];
	if ($sname !== "" and $sdate === "")
	{
				
				$qry = "Select * from grd_attendance where concat(card_number,last_name,first_name) like '%".$sname."%'";
				$search_result = filterTbl($qry);
	}
	else if ($sname === '' and $sdate !== '')
	{
		
		$qry = "Select * from grd_attendance where datein like '%".$sdate."%'";
		$search_result = filterTbl($qry);
	}
	else if ($sname !== '' and $sdate !== '')
	{
	
	$qry = "Select * from grd_attendance where (concat(card_number,last_name,first_name) like '%".$sname."%') and datein like '%".$sdate."%'";
	$search_result = filterTbl($qry);
	}
	
}
else{
	$qry = "Select * from grd_attendance limit 10";
	$search_result = filterTbl($qry);
}
function filterTbl($qry)
{
	$con = mysqli_connect("localhost", "root", "", "amsdb");
	$fltr_res = mysqli_query($con, $qry);
	return $fltr_res;
}
?>
<html lang="en">

<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Attendance</title>

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
 <link href="../style/css/bootstrap-datepicker.css" rel="stylesheet" />
     <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <script src="../style/js/jquery.js"></script>
	
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">

<div id = 'prnt2'>
    <header class="header dark-bg">
      <div class="toggle-nav">
			<img src="../style/images/ccdilogo.png" />
      </div>
      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
         
             <h1>COMPUTER COMMUNICATION DEVELOPMENT INSTITUTE<br>RFID and SMS Based Attendance Monitoring System       </h1>           
         
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        
      </div>
    </header>
    <!--header end--><br><br>
</div>
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
          <li>
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
		
          <li class="active">
            <a class="" href="attendance.php">
                          <i class=""></i>
                          <span>Monitor</span>

                      </a>

          </li>
         <li>
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
	<br><BR>
    <!--main content start-->

    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
           <div class="col-lg-12">
		  <form method="post" action="">
            <section class="panel">
              <div class="panel panel-info">
                <div class="panel-heading">Attendance Summary</div>
              <div class="panel-body">
             
                <div class="nav search-row" id="top_menu">
											<!--  search form start -->
												<br>
											<ul class="nav top-menu">
											  <li>
												<form class="navbar-form" action="" method="post">
												  <input style="font-size:16px;" placeholder="By Name" type="text" name="valtolook">
												  <input style="font-size:16px;" placeholder="By Date" type="text" name="valtolook2">
				
											  </li>
											  <li> <button class="btn btn-default" type="submit" name="bnsearch" >
											  <span class="icon_search"></span>
											  </button>
											     </li>
												
											  </ul>
											  							  </form><br>
					</div>
												  
						 <table class="table" style="font-size:80%">
              
					  <tr>
						<th>Fullname</th>
						<th>Date</th>
						<th>TimeIn</th>
						<th>TimeOut</th>
					  </tr>
				   <?php
													while ($row = mysqli_fetch_array($search_result))
													{
																	$lname = $row['last_name'];
										$fname = $row['first_name'];
										$mname = $row['middle_name'];
										$datein = $row['datein'];
										$timein= $row['timein'];
										$timeout= $row['timeout'];
										$fullname = $lname.', '.$fname.' '.$mname;
										
										echo "<tr>";
										echo "<td>".$fullname."</td>";
											echo "<td>".$datein."</td>";
											echo "<td>".$timein."</td>";
											echo "<td>".$timeout."</td>";
													}
												  ?>
              
				
           </tbody>
											  </table>
					
                    </div>
				  

                    
					
					<div><p style="color:white;">a</p></div>
					<div><p style="color:white;">a</p></div>
					
					
			
<div id ='prnt'>					
				
					
					
                  </div>
                  
				  
				  
				  
				  
				  
				  
              
              </div>
            </section>
			<section class="panel">
         		<form class="navbar-form" action="" method="post">
						<ul>
											
											  <li>
											   <script src="../style/js/jquery-3.3.1.min.js"></script>
												
										   <script src="bootstrap-datepicker.js"></script>                        
											<input id="dp1" name="fdate" type="text"  size="16"  placeholder="date from">
											<input id="dp2" name="udate" type="text"  size="16"  placeholder="date until">
											<select name ="track">
														<option value="ABM">ABM</option>
														<option value = "GAS">GAS</option>
														<option value="STEM">STEM</option>
														<option value="TVL-Animation">TVL-Animation</option>
														<option value = "TVL-ICT">TVL-ICT</option>
											</select>
											<select name ="yearlevel">
														<option value="11">11</option>
														<option value = "12">12</option>
											</select>
											<input  name="section" type="text"  size="16"  placeholder="section">
											 
											  <button class="btn btn-default" type="submit" name="print" >
											  <span class="icon_printer"></span>
											  </button>
											  </li>
											  </ul>
              </form>
            </section>
		</div>
		</div>


    
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->
</div>
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
	   $('#dp1').datepicker();
	    $('#dp2').datepicker();
    </script>

	
	
</body>

</html>
