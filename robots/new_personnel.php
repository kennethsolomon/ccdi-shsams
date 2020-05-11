<?php
if (!isset($_SERVER['HTTP_REFERER']))
{
	header ('HTTP/1.0 403 Forbidden'. TRUE, 403);
	die(header('location:error.php'));
}
?>



<?php
if (isset($_POST['save_p']))
{
		require 'add_fc.php';	
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

  <title>New Faculty</title>

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
  <script>
  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
  </script>
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
          <li class="">
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
		     
             <section class="panel">
              			 <div class="panel panel-info">
                <div class="panel-heading">Student Details</div>
               
					
				
				<div class="panel-body">
					<form action="" method="post" enctype="multipart/form-data" >
						<input type="text" name="lname" class="form-control" placeholder="Lastname">
						<br>			 
						<input type="text" name="fname" class="form-control" placeholder="Firstname">
						<br>									  
						<input type="text" name="mname" class="form-control" placeholder="Middlename">
						<br>									   							
						<input type="text" name="add" class="form-control" placeholder="Address"> 
						<br>
						<script src="bootstrap-datepicker.js"></script>                        
						<input id="dp1" name="bday" type="text" value="28-10-2013" size="16" class="form-control">
						<br>
						<select id='gender' name='gender' class='form-control' >
							<option value="Female">Female</option>
							<option value="Male">Male</option>
					  </select>
					
						
						<br>
						<input type="text" name="connum" onkeypress="return isNumberKey(event)" class="form-control" placeholder="Contact Number"> 
						<br>
						<select id='role' name='role' class='form-control'>
							<option value="Security Guard">Security Guard</option>
							<option value="Administrator">Administrator</option>
					  </select> <br>
						<button name="save_p" type="submit" class="btn btn-success  btn-sm">Save</button>	 
				
    
						</form>		
				
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
	  
	  	  $('#dp1').datepicker();
    </script>

</body>

</html>

