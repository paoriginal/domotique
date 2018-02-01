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
						<h1 class="float-left text-center text-md-left">Dashboard</h1>
					</div>
					
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="Vue/images/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						
						<div class="username mt-1">
							<h4 class="mb-1"><?php echo $info->getNom() . " " . $info->getPrenom(); ?></h4>
							
							<h6 class="text-muted">Super Admin</h6>
						</div>
						</a>
						
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="profil"><em class="fa fa-user-circle mr-1"></em> Modifier vos informations</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Ajouter équipement</a>
						     <a class="dropdown-item" href="seDeconnecter"><em class="fa fa-power-off mr-1"></em> Déconnexion</a></div>
					</div>
					
					<div class="clear"></div>
				</header>
				
				<section class="row">
					<div class="col-sm-12">
						<section class="row">

								<div id="drag7" class="camera">
									<div class="contain" id="came" style="height: inherit; width: 342px">
										<div class="top-left"><h6>Cam #1</h6></div>
									</div>
									<div class="contain" style="height: inherit; width: 342px">
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
									</div>
								</div>

								<div id="drag8">
									<table class="table table-striped" style="margin-bottom: 0px;">
										<tbody>
											<tr>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button style="background-color: #4CAF50;"><h6>Prise 1</h6></button></div></td>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button style="background-color: #f44336;"><h6>Prise 2</h6></button></div></td>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button style="background-color: #4CAF50;"><h6>Prise 3</h6></button></div></td>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button style="background-color: #f44336;"><h6>Prise 4</h6></button></div></td>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button style="background-color: #4CAF50;"><h6>Prise 5</h6></button></div></td>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button style="background-color: #f44336;"><h6>Prise 6</h6></button></div></td>
											</tr>
											<tr>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button style="background-color: #f44336;"><h6>Prise 7</h6></button></div></td>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button style="background-color: #4CAF50;"><h6>Prise 8</h6></button></div></td>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button style="background-color: #f44336;"><h6>Prise 9</h6></button></div></td>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button style="background-color: #4CAF50;"><h6>Prise 10</h6></button></div></td>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button style="background-color: #f44336;"><h6>Prise 11</h6></button></div></td>
												<td style="text-align: -webkit-center; vertical-align: middle;"><div class="prise-table"><button style="background-color: #4CAF50;"><h6>Prise 12</h6></button></div></td>
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
										
										<div class="canvas-wrapper">
											<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
										</div>
									</div>
								</div>
								
								
						</section>
						<section class="row">
							<div class="col-12 mt-1 mb-4">Template by <a href="https://www.medialoot.com">Medialoot</a></div>
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
    <script>
	    window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
	};
	</script>

	<script>
	$.cookie("example", "foo", { expires: 10 * 365 * 24 * 60 * 60 , path: '/'});
	$(function(){
		var nb = $('#drag7 > div').length;
		var taille = nb * 342;
		//样式
		$("#drag1").css({"position":"absolute","width":"auto","height":"auto","top":"0px","left":"0px","cursor":"move","z-index":"100","max-width": "1021.200px"})
		$("#drag7").css({"position":"absolute","width":"auto","height":"191.475px","top":"122px","left":"660px","cursor":"move","z-index":"100","max-width": "1021.200px","display":"inline-flex","overflow-x":"scroll","white-space": "nowrap","overflow-y":"hidden"})
		$("#drag8").css({"position":"absolute","width":"auto","height":"auto","top":"0px","left":"660px","cursor":"move","z-index":"100","max-width": "1021.200px"})
		
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
		</script>
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
	        window.onload = function() {
                var canvas = document.createElement("canvas");
                document.getElementById("came").appendChild(canvas);

                canvas.style.width="342px";
                canvas.style.height="191.47px";

                var wsavc = new WSAvcPlayer(canvas, "webgl");

                var protocol = window.location.protocol === "https:" ? "wss:" : "ws:"
                wsavc.connect(protocol + '//paoriginal.hopto.org:3000/video-stream');
            }
	   	</script>
    
	  </body>
</html>
