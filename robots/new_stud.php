<?php
if (!isset($_SERVER['HTTP_REFERER']))
{
	header ('HTTP/1.0 403 Forbidden'. TRUE, 403);
	die(header('location:error.php'));
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

  <title>New Student</title>

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
  <link href="../style/css/style.css" rel="stylesheet">
  <link href="../style/css/style-responsive.css" rel="stylesheet" />
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

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
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
          <li class="active">
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
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" >
						<div class="row">
						  <div class="column">
								PERSONAL INFORMATION <br><br>
								Identification Number:
								<input type="text" name="idnum" id="cc" class="form-control" onkeypress="return isNumberKey(event)">
								Card Number:
						
								<input type="text" name="cardnum" id="scanInput" class="form-control" onkeypress="return isNumberKey(event)">
							<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
								<script src="../style/js/jquery-3.3.1.min.js"></script>

				<script>

				var inputStart, inputStop, firstKey, lastKey, timing, userFinishedEntering;
				var minChars = 3;

				// handle a key value being entered by either keyboard or scanner
				$("#scanInput").keypress(function (e) {
					// restart the timer
					if (timing) {
						clearTimeout(timing);
					}
					
					// handle the key event
					if (e.which == 13) {
						// Enter key was entered
						
						// don't submit the form
						e.preventDefault();
						
						// has the user finished entering manually?
						if ($("#scanInput").val().length >= minChars){
							userFinishedEntering = true; // incase the user pressed the enter key
							inputComplete();
						}
					}
					else {
						// some other key value was entered
						
						// could be the last character
						inputStop = performance.now();
						lastKey = e.which;
						
						// don't assume it's finished just yet
						userFinishedEntering = false;
						
						// is this the first character?
						if (!inputStart) {
							firstKey = e.which;
							inputStart = inputStop;
							
							// watch for a loss of focus
							$("body").on("blur", "#scanInput", inputBlur);
						}
						
						// start the timer again
						timing = setTimeout(inputTimeoutHandler, 500);
					}
				});

				// Assume that a loss of focus means the value has finished being entered
				function inputBlur(){
					clearTimeout(timing);
					if ($("#scanInput").val().length >= minChars){
						userFinishedEntering = true;
						inputComplete();
					}
				};


				// reset the page
				$("#reset").click(function (e) {
					e.preventDefault();
					resetValues();
				});

				function resetValues() {
					// clear the variables
					inputStart = null;
					inputStop = null;
					firstKey = null;
					lastKey = null;
					// clear the results
					inputComplete();
				}

				// Assume that it is from the scanner if it was entered really fast
				function isScannerInput() {
					return (((inputStop - inputStart) / $("#scanInput").val().length) < 15);
				}

				// Determine if the user is just typing slowly
				function isUserFinishedEntering(){
					return !isScannerInput() && userFinishedEntering;
				}

				function inputTimeoutHandler(){
					// stop listening for a timer event
					clearTimeout(timing);
					// if the value is being entered manually and hasn't finished being entered
					if (!isUserFinishedEntering() || $("#scanInput").val().length < 3) {
						// keep waiting for input
						return;
					}
					else{
						reportValues();
					}
				}

				// here we decide what to do now that we know a value has been completely entered
				function inputComplete(){
					// stop listening for the input to lose focus
					$("body").off("blur", "#scanInput", inputBlur);
					// report the results
					reportValues();
				}

				function reportValues() {
					// update the metrics
				   
					if (!inputStart) {
						// clear the results
						$("#resultsList").html("");
						$("#scanInput").focus().select();
					} else {
						
						
						
						
						$("#scanInput").focus().select();
						inputStart = null;
					}
				}

				$("#cc").focus();
							</script>

						
								Last name:
								<input type="text" name="lname" class="form-control" >
								First name:
								<input type="text" name="fname" class="form-control">
								Middle name:
								<input type="text" name="mname" class="form-control">
								Address:									   							
								<input type="text" name="add" class="form-control"> 
								Birthday
									 <script src="bootstrap-datepicker.js"></script>                        
								<input id="dp1" name="bday" type="text" value="28-10-2013" size="16" class="form-control">
						
           
								Gender
							
									<select name="gender" class="form-control">
										<option value="Female">Female</option>
										<option value="Male">Male</option>
								</select>
												
						  </div>
						  <div class="column">
								
								COURSE DETAILS<br>
								<br>Track/Strand
								<select name="track" class="form-control">
										<option value="ABM">ABM</option>
										<option value="GAS">GAS</option>
										<option value="STEM">STEM</option>
										<option value="TVL-Animation">TVL-Animation</option>
										<option value="TVL-ICT">TVL-ICT</option>
								</select>
								Year Level
								<select name="yrlvl" class="form-control">
										<option value=11>11</option>
										<option value=12>12</option>
								</select>
								Section
								<input type="text" name="section" class="form-control">
								<br><br><br>
								CONTACT DETAILS <br>
								<br> Contact Person
								<input type="text" name="conper" class="form-control"> 
								Contact Number
								<input type="text" name="connum" class="form-control" onkeypress="return isNumberKey(event)"> 
								
								<br>
								<button name="save_p" type="submit" class="btn btn-success  btn-lg">Save</button>
						  </div>
						  
						  <div  class="column"><center>
						   

						  
						  
								<img src="../style/images/stu_icon.jpg" id="output_image" height="300" width="300" />
								<br><br>
								<input type="file" id="profile-img" name="ifile" accept = ".jpeg, .jpg, .png" onchange="preview_image(event)" > 
								</center><br>
						  </div>
						  
						 
						  
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
<?php
if (isset($_POST['save_p']))
{
	
      
	require 'add_stud.php';	
	
}
?>
