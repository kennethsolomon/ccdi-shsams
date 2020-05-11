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
 <script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var strcount
var x = new Date()
var x1=(x.getMonth() + 1) + "/" + x.getDate() + "/" + x.getFullYear() ; 
x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
document.getElementById('ct').innerHTML = x1;

tt=display_c();
 }
</script>
  
  </head>

<body onload=display_ct();  >
<div style="background-image: url('backround.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
  <!-- container section start -->
  <section id="container" class="">


    <header class="header white-bg">
      <div class="toggle-nav">
			<img src="../style/images/ccdilogo.png" height="80" weight="80"  />
      </div>
     
    
         
            <h2 style="color:darkblue; font-size: 15px; font-family: verdana;"><b>COMPUTER COMMUNICATION<br>
			DEVELOPMENT INSTITUTE<br>
			SENIOR HIGH SCHOOL
			</b>
			<p style="font-size:13px;">RFID and SMS Based Student Attendance Monitoring System<p></h2>
         
  
      

   
    </header>
    <!--header end-->

    
    <section id="main-content">
      <section class="wrapper">
        <!--overview start--><br>
       <form>
			  <h1 style="color:darkblue;">
					
									<b><span style="color:red; font-size:20px; padding-left:33em" id='ct' ></span></b> </h1> 
										<div id="resultsList"></div>
				<h3 style="color:red; font-size:20px; padding-left:30em;">RFID NO: 
				<input style="font-size:15px; width:200px; " id="scanInput" /></h3>
					</form>

             
            
							
                   
                      <!-- <input name="idnumber" type="text" class="form-control" onkeyup="showUser(this.value)" > -->
				
					
					


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
						// prepend another result item
						var inputMethod = isScannerInput() ? "Scanner" : "Keyboard";
						if (inputMethod == 'Keyboard')
						{
									
									//$("#resultsList").html("ako ay keybor");
									var idnum = document.getElementById("scanInput").value;
									var xhr;
									if (window.XMLHttpRequest) { // Mozilla, Safari, ...
										xhr = new XMLHttpRequest();
									} else if (window.ActiveXObject) { // IE 8 and older
										xhr = new ActiveXObject("Microsoft.XMLHTTP");
									}
									var data = "idnum=" + idnum;
										 xhr.open("POST", "keeprec.php", true); 
										 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
										 xhr.send(data);
										 xhr.onreadystatechange = display_data;
										function display_data() {
										 if (xhr.readyState == 4) {
										  if (xhr.status == 200) {
										   //alert(xhr.responseText);	   
										  document.getElementById("resultsList").innerHTML = xhr.responseText;
										  } else {
											alert('There was a problem with the request.');
										  }
										 }
										}
									
									//ends here									
									
						}
						else
						{
							//$("#resultsList").html("ako ay scan");
							var idnum = document.getElementById("scanInput").value;
									var xhr;
									if (window.XMLHttpRequest) { // Mozilla, Safari, ...
										xhr = new XMLHttpRequest();
									} else if (window.ActiveXObject) { // IE 8 and older
										xhr = new ActiveXObject("Microsoft.XMLHTTP");
									}
									var data = "idnum=" + idnum;
										 xhr.open("POST", "keep.php", true); 
										 xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
										 xhr.send(data);
										 xhr.onreadystatechange = display_data;
										function display_data() {
										 if (xhr.readyState == 4) {
										  if (xhr.status == 200) {
										   //alert(xhr.responseText);	   
										  document.getElementById("resultsList").innerHTML = xhr.responseText;
										  } else {
											alert('There was a problem with the request.');
										  }
										 }
										}
									
									//ends here
									
						}
						
						
						
						$("#scanInput").focus().select();
						inputStart = null;
					}
				}

				$("#scanInput").focus();
				</script>

 
  
                 
            </section>
	
		   	 </section>
    </section>
 
</div>

 <div style="background-color:red" >

                <center>
             <b>   <p style="font-size:23px; color:white;font-family:times new roman;"> We empower  the lives with touch!</p></b></center>
			
				
              
  </div>
</body>

</html>
