<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="description" content="">
	
	<meta name="author" content="">
	
	<link rel="icon" href="Vue/images/favicon.ico">
	
	<title>Medialoot Bootstrap 4 Dashboard Template</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="Vue/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Icons -->
    <link href="Vue/css/font-awesome.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="Vue/css/style.css" rel="stylesheet">

    <style type="text/css">
    	::-webkit-scrollbar {
		width: 10px;  /* for vertical scrollbars */
		height: 10px; /* for horizontal scrollbars */
	}

	::-webkit-scrollbar-track {
		background: rgba(0, 0, 0, 1);
		/*visibility:hidden;*/
	}

	::-webkit-scrollbar-thumb {
		background: rgba(127, 127, 127, 1);
		-webkit-border-radius:40px;
	    border-radius:10px;
	    -webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0.5); 
	}

	.contain {
	    position: relative;
	    text-align: center;
	    color: white;
	}

	.top-left {
	    position: absolute;
	    top: 8px;
	    left: 16px;
	}
	.prise-table {
		display: inline-flex;
	}

    </style>
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			
			<main class="col-xs-12 col-sm-1 col-lg-1 col-xl-12">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						
						<h1 class="float-left text-center text-md-left"><img src="https://upload.wikimedia.org/wikipedia/fr/thumb/3/3b/Raspberry_Pi_logo.svg/810px-Raspberry_Pi_logo.svg.png" style="width: 5%; height: auto;">PiHome</h1>
					</div>
					
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="Vue/images/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						
						<div class="username mt-1">
							<h4 class="mb-1"><?php echo $info->getNom() . " " . $info->getPrenom(); ?></h4>
							
							<h6 class="text-muted">Super Admin</h6>
						</div>
						</a>
						
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink">
							<!--<a class="dropdown-item" href="profil"><em class="fa fa-user-circle mr-1"></em> Modifier vos informations</a>
						    <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Ajouter équipement</a>-->
						    <a class="dropdown-item" href="seDeconnecter"><em class="fa fa-power-off mr-1"></em> Déconnexion</a></div>
					</div>
					
					<div class="clear"></div>
				</header>
				
				<section class="row">
					<div class="col-sm-12">
						<section class="row">

								<div id="drag7" class="camera">
									<div class="contain" id="came" style="height: 607.5px;">
										<div class="top-left"><h6>Cam #1</h6></div>
									</div>
									<!--<div class="contain" style="height: inherit; width: 342px">
										<div class="top-left"><h6>Cam #2</h6></div>
										<img style="width: inherit; height: inherit;" src="https://vignette2.wikia.nocookie.net/thedescendants/images/6/64/If_Only-Dove_Cameron16.png/revision/latest?cb=20150808153606">
									</div>
									<div class="contain" style="height: inherit; width: 342px">
										<div class="top-left"><h6>Cam #3</h6></div>
										<img style="width: inherit; height: inherit;" src="https://vignette2.wikia.nocookie.net/thedescendants/images/6/64/If_Only-Dove_Cameron16.png/revision/latest?cb=20150808153606">
									</div>
									<div class="contain" style="height: inherit; width: 342px">
										<div class="top-left"><h6>Cam #4</h6></div>
										<img style="width: inherit; height: inherit;" src="https://vignette2.wikia.nocookie.net/thedescendants/images/6/64/If_Only-Dove_Cameron16.png/revision/latest?cb=20150808153606">
									</div>
									<div class="contain" style="height: inherit; width: 342px">
										<div class="top-left"><h6>Cam #4</h6></div>
										<img style="width: inherit; height: inherit;" src="https://vignette2.wikia.nocookie.net/thedescendants/images/6/64/If_Only-Dove_Cameron16.png/revision/latest?cb=20150808153606">
									</div>-->
								</div>

								<div id="drag8">
									<table class="table table-striped" style="margin-bottom: 0px;">
										<tbody>
											<tr>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button id="prise1"><h6>Prise 1</h6></button></div></td>
											</tr>
										</tbody>
									</table>
								</div>
								
								<div id="drag1" class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Overview</h3>
										
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
											
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										
										<h6 class="card-subtitle mb-2 text-muted">Latest traffic stats</h6>
										
										<div class="canvas-wrapper" id="chartdiv" style="width: 100%; height: 400px;"></div>
								        <div style="margin-left:35px;">
								            <input type="radio" name="group" id="rb1" onclick="setPanSelect()">Select
								            <input type="radio" checked="true" name="group" id="rb2" onclick="setPanSelect()">Pan
										</div>
									</div>
								</div>
								
								
						</section>
					</div>
				</section>
			</main>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Vue/js/jquery-3.2.1.min.js"></script>
    <script src="Vue/dist/js/bootstrap.min.js"></script>
    
    <script src="Vue/js/chart.min.js"></script>
    <script src="Vue/js/chart-data.js"></script>
    <script src="Vue/js/easypiechart.js"></script>
    <script src="Vue/js/easypiechart-data.js"></script>
    <script src="Vue/js/bootstrap-datepicker.js"></script>
    <script src="Vue/js/custom.js"></script>
    <script src="Vue/js/carhartl-jquery-cookie-92b7715/jquery.cookie.js"></script>

    <!--<link rel="stylesheet" href="./Vue/js/amcharts/style.css" type="text/css">-->
    <script src="./Vue/js/amcharts/amcharts.js" type="text/javascript"></script>
	<script src="./Vue/js/amcharts/serial.js" type="text/javascript"></script>

	<script>
            var chart;
            var chartData = [];
            var chartCursor;



            AmCharts.ready(function () {
                // generate some data first
                generateChartData();

                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();

                chart.dataProvider = chartData;
                chart.categoryField = "date";
                chart.balloon.bulletSize = 5;
                chart.dataDateFormat = "DD-MM-YYYY-HH-NN-SS";

                // listen for "dataUpdated" event (fired when chart is rendered) and call zoomChart method when it happens
                chart.addListener("dataUpdated", zoomChart);

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.parseDates = true; // as our data is date-based, we set parseDates to true
                categoryAxis.minPeriod = "ss"; // our data is every 10sec, so we set minPeriod to ss
                categoryAxis.dashLength = 1;
                categoryAxis.minorGridEnabled = true;
                categoryAxis.twoLineMode = true;
                categoryAxis.dateFormats = [{
                    period: 'fff',
                    format: 'JJ:NN:SS'
                }, {
                    period: 'ss',
                    format: 'JJ:NN:SS'
                }, {
                    period: 'mm',
                    format: 'JJ:NN'
                }, {
                    period: 'hh',
                    format: 'JJ:NN'
                }, {
                    period: 'DD',
                    format: 'DD'
                }, {
                    period: 'WW',
                    format: 'DD'
                }, {
                    period: 'MM',
                    format: 'MMM'
                }, {
                    period: 'YYYY',
                    format: 'YYYY'
                }];

                categoryAxis.axisColor = "#DADADA";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.axisAlpha = 0;
                valueAxis.dashLength = 1;
                chart.addValueAxis(valueAxis);

                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.title = "red line";
                graph.valueField = "temperature";
                graph.bullet = "round";
                graph.bulletBorderColor = "#FFFFFF";
                graph.bulletBorderThickness = 2;
                graph.bulletBorderAlpha = 1;
                graph.lineThickness = 2;
                graph.lineColor = "#5fb503";
                graph.negativeLineColor = "#efcc26";
                graph.hideBulletsCount = 50; // this makes the chart to hide bullets when there are more than 50 series in selection
                chart.addGraph(graph);

                // CURSOR
                chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorPosition = "mouse";
                chartCursor.pan = true; // set it to fals if you want the cursor to work in "select" mode
                chart.addChartCursor(chartCursor);

                // SCROLLBAR
                var chartScrollbar = new AmCharts.ChartScrollbar();
                chart.addChartScrollbar(chartScrollbar);

                chart.creditsPosition = "bottom-right";

                // WRITE
                chart.write("chartdiv");
            });

            // generate some random data, quite different range
            function generateChartData() {
                /*var firstDate = new Date();
                firstDate.setDate(firstDate.getDate() - 500);

                for (var i = 0; i < 500; i++) {
                    // we create date objects here. In your data, you can have date strings
                    // and then set format of your dates using chart.dataDateFormat property,
                    // however when possible, use date objects, as this will speed up chart rendering.
                    var newDate = new Date(firstDate);
                    newDate.setDate(newDate.getDate() + i);

                    var visits = Math.round(Math.random() * 40) - 20;

                    chartData.push({
                        date: newDate,
                        visits: visits
                    });
                }*/
                <?php
                	foreach ($data as $item){
                ?>
					   chartData.push({date: "<?php echo $item[0]?>", temperature: <?php echo round($item[1])?>});
				<?php 
					}
				?>
                console.log(chartData);
            }

            // this method is called when chart is first inited as we listen for "dataUpdated" event
            function zoomChart() {
                // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
                chart.zoomToIndexes(chartData.length - 40, chartData.length - 1);
            }

            // changes cursor mode from pan to select
            function setPanSelect() {
                if (document.getElementById("rb1").checked) {
                    chartCursor.pan = false;
                    chartCursor.zoomable = true;
                } else {
                    chartCursor.pan = true;
                }
                chart.validateNow();
            }

        </script>

    <!--<script>
    	var temperatureData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					label: "Temperature",
					fillColor : "rgba(128,130,228,0.6)",
					strokeColor : "rgba(128,130,228,1)",
					pointColor : "rgba(128,130,228,1)",
					pointStrokeColor : "#fff",
					pointHighlightFill : "#fff",
					pointHighlightStroke : "rgba(128,130,228,1)",
					data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				}
			]

		}

	    window.onload = function () {
			var chart1 = document.getElementById("myChart").getContext("2d");
			window.myLine = new Chart(chart1).Line(temperatureData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleFontColor: "#c5c7cc"
			});
		};
	</script>-->

	<!--<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var chart = new Chart(ctx, {
		    // The type of chart we want to create
		    type: 'line',

		    // The data for our dataset
		    data: {
		        labels: ["January", "February", "March", "April", "May", "June", "July"],
		        datasets: [{
		            label: "My First dataset",
		            backgroundColor: 'rgb(255, 99, 132)',
		            borderColor: 'rgb(255, 99, 132)',
		            data: [0, 10, 5, 2, 20, 30, 45],
		        }]
		    },

		    // Configuration options go here
		    options: {}
		});
	</script>-->

	<script>
		$("#drag1").css({"position":"absolute","width":"40%","height":"auto","top":"0px","left":"0px","cursor":"move","z-index":"100","max-width": "1021.200px"})
		$("#drag7").css({"position":"absolute","width":"auto","height":"auto","top":"0px","left":"41%","cursor":"move","z-index":"100","max-width": "1080px","display":"inline-flex","overflow-x":"scroll","white-space": "nowrap","overflow-y":"hidden"})
		$("#drag8").css({"position":"absolute","width":"auto","height":"auto","top":"550px","left":"0px","cursor":"move","z-index":"100","max-width": "1021.200px"})
	</script>

	<!--<script>
	$.cookie("example", "foo", { expires: 10 * 365 * 24 * 60 * 60 , path: '/'});
	$(function(){
		var nb = $('#drag7 > div').length;
		var taille = nb * 342;
		//样式
		$("#drag1").css({"position":"absolute","width":"48%","height":"auto","top":"0px","left":"0px","cursor":"move","z-index":"100","max-width": "1021.200px"})
		$("#drag7").css({"position":"absolute","width":"auto","height":"auto","top":"0px","left":"660px","cursor":"move","z-index":"100","max-width": "1080px","display":"inline-flex","overflow-x":"scroll","white-space": "nowrap","overflow-y":"hidden"})
		$("#drag8").css({"position":"absolute","width":"auto","height":"auto","top":"324px","left":"0px","cursor":"move","z-index":"100","max-width": "1021.200px"})
		
		var dragging1 = false;
		var dragging7 = false;
		var dragging8 = false;
		var iX, iY;
		$("#drag1").mousedown(function(e) {
			dragging1 = true;
			iX = e.clientX - this.offsetLeft;
			iY = e.clientY - this.offsetTop;
			this.setCapture && this.setCapture();
			return false;
		});

		$("#drag7").mousedown(function(e) {
			dragging7 = true;
			iX = e.clientX - this.offsetLeft;
			iY = e.clientY - this.offsetTop;
			this.setCapture && this.setCapture();
			return false;
		});

		$("#drag8").mousedown(function(e) {
			dragging8 = true;
			iX = e.clientX - this.offsetLeft;
			iY = e.clientY - this.offsetTop;
			this.setCapture && this.setCapture();
			return false;
		});

		document.onmousemove = function(e) {
			if (dragging1) {
				var e = e || window.event;
				var oX = e.clientX - iX;
				var oY = e.clientY - iY;
				$("#drag1").css({"left":oX + "px", "top":oY + "px"});
				return false;
			}
			if (dragging7) {
				var e = e || window.event;
				var oX = e.clientX - iX;
				var oY = e.clientY - iY;
				$("#drag7").css({"left":oX + "px", "top":oY + "px"});
				return false;
			}
			if (dragging8) {
				var e = e || window.event;
				var oX = e.clientX - iX;
				var oY = e.clientY - iY;
				$("#drag8").css({"left":oX + "px", "top":oY + "px"});
				return false;
			}
		};
		$(document).mouseup(function(e) {
			if (dragging1) {
				dragging1 = false;
				$("#drag1")[0].releaseCapture;
				e.cancelBubble = true;
			}
			if (dragging7) {
				dragging7 = false;
				$("#drag7")[0].releaseCapture;
				e.cancelBubble = true;
			}
			if (dragging8) {
				dragging8 = false;
				$("#drag8")[0].releaseCapture;
				e.cancelBubble = true;
			}
		})
	})
	</script>-->
    	<script type="text/javascript" src="https://css-tricks.com/examples/HorzScrolling/jquery.mousewheel.js"></script>
		<script>
			$(document).ready(function () {
			    $('.camera').mousewheel(function(e, delta) {
			        this.scrollLeft -= (delta * 20);
			        e.preventDefault();
			    });
			    
			});
		</script>

		<script type="text/javascript" src="Vue/js/http-live-player.js"></script>
	    <script>
	        $(document).ready(function() {
                var canvas = document.createElement("canvas");
                document.getElementById("came").appendChild(canvas);

                canvas.style.width="1080px";
                canvas.style.height="607.5px";

                var wsavc = new WSAvcPlayer(canvas, "webgl");

                var protocol = window.location.protocol === "https:" ? "wss:" : "ws:"
                wsavc.connect(protocol + '//paoriginal.hopto.org:3000/video-stream');
            })
	   	</script>

	   	<script>
	   		$(document).ready(function() {
	   			var wss=new WebSocket("wss://paoriginal.hopto.org:8081/arduino/relay");

		        wss.onopen = function() {
		        };

		        wss.onmessage = function (evt) {
		          var received_msg = evt.data;
		          console.log(received_msg);
		          /*if (received_msg == "success") {
		          	$.ajax({
				        type: "POST",
				        url: "/domotique/changePrise",
				        data: { idPrise: "1" },
				        dataType: "json",
				        success: function (success) {
				        	console.log(success);
				            if (success == "0") {
								//vert
								$('#prise1').css({"background-color": "#4CAF50"});
				        	}
				        	else{
				        		if (success == "1") {
				        			//rouge
									$('#prise1').css({"background-color": "#f44336"});
				        		}
				        		else{
				        			alert("Erreur...");
				        		}
				        	}
				        },
				        error: function (error) {
				            alert(error);
				        }
				    });
		          }*/
		          //alert("Message is received...");
		        };

		        wss.onclose = function() {
		          // websocket is closed.
		          alert("Connection is closed...");
		        };

		        $('#close').click(function () {
		            wss.close();
		        })


		        $('#prise1').click(function () {
				    $.ajax({
				        type: "POST",
				        url: "/domotique/etatBouton",
				        data: { idPrise: "1" },
				        dataType: "json",
				        success: function (success) {
				        	//console.log(success);
				            if (success == "0") {
								wss.send("ON");
								//vert
								$('#prise1').css({"background-color": "#4CAF50"});
				        	}
				        	else{
				        		if (success == "1") {
				        			wss.send("OFF");
				        			//rouge
									$('#prise1').css({"background-color": "#f44336"});
				        		}
				        		else{
				        			alert("Erreur...");
				        		}
				        	}
				        },
				        error: function (error) {
				            alert(error);
				        }
				    });
		        })
	   		})
	   		
	   	</script>
    
	  </body>
</html>
