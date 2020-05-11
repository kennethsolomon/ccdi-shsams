<?php
if (!isset($_SERVER['HTTP_REFERER']))
{
	header ('HTTP/1.0 403 Forbidden'. TRUE, 403);
	die(header('location:error.php'));
}
?>

<?php

if (isset($_POST['updatebtn']))
{
			include "dbase.php";
			$idnumber = $_POST['userid'];
			$user = $_POST['username'];
			$cpass = $_POST['cpass'];
			$npass = $_POST['npass'];
			$vpass = $_POST['vpass'];
			$sql = "SELECT * FROM account where usrid = '$idnumber' and usr_pass = '$cpass' ";
			$result = $con->query($sql);
			
			if ($result->num_rows > 0) 
			{
							
				if ($user <> "" and $npass <> "") 
				{
						if ($vpass <> "")
						{
							if ($vpass === $npass) $sql="update account set usr_name ='$user', usr_pass = '$npass' where usrid = '$idnumber'";
							else 
								{
									$message = "Password mismatch!";
									$type = "error";
								}
						}
						else 
							{
							$message = "Please fill up verify password box!";
							$type = "error";
							}
				}
				else if ($user <> '' and $npass == '') $sql="update account set usr_name ='$user' where usrid = '$idnumber'";
				else if ($user == '' and $npass <> '') 
				{
					if ($vpass <> "")
						{
							if ($vpass === $npass) $sql="update account set usr_pass = '$npass' where usrid = '$idnumber'";
							else
								{
									$message = "Password mismatch!";
									$type = "error";
								}
						}
						else 
						{
							$message = "Please fill up verify password box!";
							$type = "error";
						}
				}
					
				if ($con->query($sql)) 
				{
									$message = "Changes save successfully!";
									$type = "success";
				}
			}

			else 
			{
				$message = "Account not found!";
				$type = "error";
			}
			
			
			
			$con->close();
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

  <title>My Account</title>

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
          <li>
            <a class="" href="announce.php">
                          <i class=""></i>
                          <span>Announcement</span>

                      </a>

          </li>
          <li class="active">
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
      <section class="wrapper"><br><br>
	  <form enctype="multipart/form-data" method="post" action="">
        <div class="row">
          <div class="col-lg-12">
          
			
		</div>
		</div>
		
		 <div class="row">
          <div class="col-lg-12">
          
			<section class="panel">
            	 <div class="panel panel-info">
                <div class="panel-heading">Update Account</div>
              <div class="panel-body">
             
                  <div class="form-group">
                    <label class="col-sm-2 control-label">ID Number</label>
                    <div class="col-sm-10">
                      <input name="userid" type="text" class="form-control">
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">New Username</label>
                    <div class="col-sm-10">
                      <input name="username" type="text" class="form-control">
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">New Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="npass" class="form-control">
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">Verify New Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="vpass" class="form-control">
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">Current Password</label>
                    <div class="col-sm-10">
                      <input type="password" name="cpass" class="form-control">
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label" style="color:white;">Contact Number</label>
					<div class="col-sm-10">
                      <button type="submit" name="updatebtn" class="btn btn-primary">Update Account</button>
                    </div>
					
					
                  </div>
                  
               
              </div>
            </section>
		</div>
		</div>


</form>
 <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
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
