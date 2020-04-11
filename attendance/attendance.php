
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
			<img src="../style/images/ccdilogo.png"  />
      </div>
      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
         
            <h2 style="color:darkblue; font-size: 30px; font-family: verdana;"><b>COMPUTER COMMUNICATION<br> DEVELOPMENT INSTITUTE<br>SENIOR HIGH SCHOOL
			</b><p style="font-size:20px;">Web Based Student Attendance Monitoring System<p></h2>
         
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    
    <section id="main-content">
      <section class="wrapper">
        <!--overview start--><br>
        <div class="" >
          <div class=""><br><br><br><br>
           
			
		   <section class="">
              <header class=""><form>
			  <h1 style="color:darkblue;">
								&nbsp 
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				<b><span style="color:white; font-size:35px;" id='ct' ></span></b> </h1> 
				 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
								&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp
							&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
				 RFID NO: 
				<input style="font-size:20px; width:300px;" id="scanInput" /></form>
              </header>
              <div class="panel-body" >
            
                
					
					<div id="resultsList"></div>
						
						
					 
					
					
					
                   
                    <div class="col-md-4">
                    	<div class="row">
                    		<div class ="col-md-12">
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
			
			
		
					
		
		</div>
		</div>
		
</div>


     	
    </section>
    <!--main content end-->
  </section>
  <header class="panel-heading" style="background-color:red;">
                <center>
             <b>   <p style="font-size:25px; color:white;font-family:times new roman;"> We empower  the lives with touch!</p></b></center>
				
				
              </header>
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
    </script>


</body>

</html>
