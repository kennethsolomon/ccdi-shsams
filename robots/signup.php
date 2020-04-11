
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Home</title>

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
</head><script>
function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }</script>
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
         
             <h1>COMPUTER COMMUNICATION <br>DEVELOPMENT INSTITUTE<br><h1><h3>Attendance Monitoring System with Radio Frequency Identification Card</h3>
         
         
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start--><br><br><br><br><br><br>
        <div class="row">
          <div class="col-lg-6">
            <form class="form-horizontal " method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		
			<section class="panel">
              <header class="panel-heading">
                Personal Information
              </header>
              <div class="panel-body">
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">Lastname</label>
                    <div class="col-sm-10">
                      <input name="lastname" type="text" class="form-control">
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">Firstname</label>
                    <div class="col-sm-10">
                      <input name="firstname" type="text" class="form-control">
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">Middlename</label>
                    <div class="col-sm-10">
                      <input name="middlename" type="text" class="form-control">
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">Gender</label>
                    <div class="col-sm-10">
                       <select id='gender' name='gender' class='form-control'>
							<option>Female</option>
							<option>Male</option>
					  </select>
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">Birthday</label>
                    <div class="col-sm-10">
                      <input name="bday" type="text" class="form-control">
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                      <input name="add" type="text" class="form-control">
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">Contact Number</label>
                    <div class="col-sm-10">
                      <input name="cnum" onkeypress="return isNumberKey(event)" type="text" class="form-control">
                    </div>
                
               
              </div>
            </section>  
           </div>  <div class="col-lg-6">

			<section class="panel">
              <header class="panel-heading">
                Account Details
              </header>
               <div class="panel-body">
						 <div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">Role</label>
                    <div class="col-sm-10">
                       <select id='role' name='role' class='form-control'>
							<option value="Security Guard">Security Guard</option>
							<option value="Administrator">Administrator</option>
					  </select>
                    </div>
					<div><p style="color:white;">a</p></div>
                
					<label class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                      <input name="uname" type="text" class="form-control">
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input name="pass" type="password" class="form-control">
                    </div>
					<div><p style="color:white;">a</p></div>
					<label class="col-sm-2 control-label">Re-type Password</label>
                    <div class="col-sm-10">
                      <input name="repass" type="password" class="form-control">
                    </div>
                 
                   <hr><br><br><br>
				   <label class="col-sm-2 control-label"style="color:white;">Re-type Password</label>
					<div class="col-sm-10">
                      <button name="savebtn" type="submit" class="btn btn-primary">Save</button>
                    </div><br><br><br><br><br><br><br>
            
              </div>
            </section>
			
		   	</form>
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
<?php

if (isset($_POST['savebtn']))
{
	$pwd = $_POST['pass'];
	$repwd = $_POST['repass'];
	if ($pwd == $repwd)
	{
		require 'signsave.php';
	}
	else
	{
		echo "<script>alert('Password mismatch!')</script>";
	}
	
}






?>
</body>

</html>
