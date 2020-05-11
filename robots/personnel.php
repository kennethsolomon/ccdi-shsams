<?php
if (!isset($_SERVER['HTTP_REFERER']))
{
	header ('HTTP/1.0 403 Forbidden'. TRUE, 403);
	die(header('location:error.php'));
}
?>


<?php
if (isset($_POST['bnsearch']))
{
	$val = $_POST['valtolook'];
	$qry = "Select * from account_det where concat(card_number,last_name,first_name) like '%".$val."%'";
	$search_result = filterTbl($qry);
}
else{
	$qry = "Select * from account_det";
	$search_result = filterTbl($qry);
}
function filterTbl($qry)
{
	$con = mysqli_connect("localhost", "root", "", "amsdb");
	$fltr_res = mysqli_query($con, $qry);
	return $fltr_res;
}
?>


<?php
session_start();

if(isset($_GET['statu']))
{
	$stat = $_GET['statu'];
	$err = $_GET['err'];
	$type = $err;
	$message = $stat;
	
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

  <title>Personnel</title>

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
  <style>    


.outer-container {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 40px 20px;
	border-radius: 2px;
}

.btn-submit {
	background: #333;
	border: #1d1d1d 1px solid;
    border-radius: 2px;
	color: #f0f0f0;
	cursor: pointer;
    padding: 5px 20px;
    font-size:0.9em;
}

.tutorial-table {
    margin-top: 40px;
    font-size: 0.8em;
	border-collapse: collapse;
	width: 100%;
}

.tutorial-table th {
    background: #f0f0f0;
    border-bottom: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

.tutorial-table td {
    background: #FFF;
	border-bottom: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

#response {
    padding: 10px;
    margin-top: 10px;
    border-radius: 2px;
    display:none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
</style>
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
         
             <h1>COMPUTER COMMUNICATION DEVELOPMENT INSTITUTE<br>RFID and SMS Based Attendance Monitoring System       </h1>           
         
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        
      </div>
    </header>
    <!--header end-->
<br><br>
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
		    <li class="active">
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

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start--><br><BR>
        <div class="row">
          <div class="col-lg-12">
		  <form method="post" action="">
             <section class="panel">
            <div class="panel panel-info">
                <div class="panel-heading">Personnel Record</div>
			
					
				
				<div class="panel-body">
				 <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
  			
			
			<div class="nav search-row" id="top_menu">
											<!--  search form start -->
												<br>
											<ul class="nav top-menu">
											  <li>
												<form class="navbar-form" action="" method="post">
												  <input style="font-size:16px;" placeholder="Search" type="text" name="valtolook">
				
											  </li>
											  <li> <button class="btn btn-default" type="submit" name="bnsearch" >
											  <span class="icon_search"></span>
											  </button></form> </li> &emsp;
												<a href="new_personnel.php" class="btn btn-primary btn-sm" title="Bootstrap 3 themes generator">Add Personnel</a>
         
											</ul>
											<!--  search form end -->
											
											 <br><br>
										  </div>
		      
				
				<div>
				<br>
				</div>
                  <div class="form-group">
				  
						  <table class="table" style="font-size:80%">
							<tbody>
							   <tr>
								<th><i class="icon_profile"></i> ID</th>
								<th><i ></i> Fullname</th>
								<th><i ></i> Address</th>
								
								
								<th><i ></i> Contact Number</th>
								<th><i ></i> Role</th>
								<th><i ></i> Status</th>
							
								<th><i class="icon_cogs"></i> Action</th>
							  </tr>
						
							
								
					
							  <?php
													while ($row = mysqli_fetch_array($search_result))
													{
															$idnum = $row['usrid'];
										$role = $row['per_status'];
										$fname = $row['last_name'].', '.$row['first_name'].' '.$row['middle_name'];
										$address = $row['address'];
									
										$bday = $row['usr_status'];
										$contact = $row['contact_number'];
										
											echo "<tr>";
											echo "<td>".$idnum."</td>";
											echo "<td>".$fname."</td>";
											echo "<td>".$address."</td>";
										
											echo "<td>".$contact."</td>";
											echo "<td>".$role."</td>";
											echo "<td>".$bday."</td>";
											echo "<td>
										
											
											<a  href=\"reaccount.php?id=$idnum\" >Restore</a>
											<a style='color:red;' href=\"updatestatus.php?id=$idnum\" >Activate</a>
											<a style='color:green;' href=\"destat.php?id=$idnum\" >Deactivate</a>
											<a style='color:orange;' href=\"upd_fc.php?id=$idnum\" >Update</a></td>";
													}
												  ?>
						
							  
							</tbody>
						  </table>
						</div>
						</div>
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