<?php

if (isset($_POST['savebtn']))
{
	$pwd = $_POST['pass'];
	$repwd = $_POST['repass'];
	if ($pwd == $repwd)
	{
			include "dbase.php";
			$idnumber = date('yMdHms');
			$lname = $_POST['lastname'];
			$fname = $_POST['firstname'];
			$mname = $_POST['middlename'];
			$address = $_POST['add'];
			$bdy = $_POST['bday'];
			$gender = $_POST['gender'];
			$connum = $_POST['cnum'];
			$role = $_POST['role'];
			$user = $_POST['uname'];
			$pass = $_POST['pass'];
			if ($lname == '' or $fname == '' or $mname == '' or $gender == '' or $connum == '' or $user == '' or $pass == '')
			{
					$type = "error";
					$message = "Unable to save data! Complete the boxes!";
			}
			else {
				
						$qry = "SELECT * FROM  account";
						$result = $con->query($qry);
						
						if ($result->num_rows > 0) 
						{
							$sql = "SELECT * FROM  per_files where (last_name like '$lname' and first_name like '$fname' and middle_name = '$mname')";
							$result = $con->query($sql);
							
							if ($result->num_rows > 0) 
									{
										$type = "error";
										$message = "Name already exist!";
									}

							else{
										$sql = "insert into per_files values ('$idnumber','none','$lname','$fname','$mname','$address','$gender','$bdy','none',0,'none','none','$connum','$role','')";
										$con->query($sql);
										
										$pas="insert into account values (0,'$idnumber','$user','$pass','','pending request')";
										if($con->query($pas))
									{
										$type = "success";
										$message = "Save successfully! <a href='..\index.php'>proceed to LOGIN</a>";
									}
									else
									{
										$type = "error";
										$message = "Unable to save data!";
									}
									}			
						}
						else{
									$sql = "insert into per_files values ('$idnumber','none','$lname','$fname','$mname','$address','$gender','$bdy','none',0,'none','none','$connum','Administrator','')";
									$con->query($sql);			
									$pas="insert into account values (0,'$idnumber','$user','$pass','','activated')";
									if($con->query($pas))
									{
										$type = "success";
										$message = "New administrator is save successfully! <a href='..\index.php'>proceed to LOGIN</a>";
									}
									else
									{
										$type = "error";
										$message = "Unable to save data!";
									}
									
								}
							$con->close();	 
				}
	}
	else
	{
		$type = "error";
        $message = "Mismatch password!";
	}
	
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
 <link href="../style/css/bootstrap-datepicker.css" rel="stylesheet" />
     <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <script src="../style/js/jquery.js"></script>
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
            <form class="form-horizontal " method="post" action="">
		
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
                      <script src="bootstrap-datepicker.js"></script>                        
								<input id="dp1" name="bday" type="text" value="28-10-2013" size="16" class="form-control">
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
                    </div><br><br>
					 <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    <br><br><br><br><br>
            
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
	   $('#dp1').datepicker();
    </script>

</body>

</html>
