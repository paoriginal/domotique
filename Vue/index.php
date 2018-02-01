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
						
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
						     <a class="dropdown-item" href="seDeconnecter"><em class="fa fa-power-off mr-1"></em> Logout</a></div>
					</div>
					
					<div class="clear"></div>
				</header>
				
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<!--<div class="col-md-12 col-lg-8">-->
								<div id="drag3" class="jumbotron">
									<h1 class="mb-4">Hello, world!</h1>
									
									<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
									
									<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
									
									<p class="lead"><a class="btn btn-primary btn-lg mt-2" href="#" role="button">Learn more</a></p>
								</div>

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
									<table class="table table-striped">
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
								
								<div id="drag2" class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Recent Orders</h3>
										
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
											
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										
										<div class="table-responsive">
											<table class="table table-striped">
												<thead>
													<tr>
														<th>Order #</th>
														
														<th>Product</th>
														
														<th>Customer</th>
														
														<th>Status</th>
													</tr>
												</thead>
												
												<tbody>
													<tr>
														<td>0001</td>
														
														<td>Product Name 1</td>
														
														<td>Customer 1</td>
														
														<td>Complete</td>
													</tr>
													
													<tr>
														<td>0002</td>
														
														<td>Product Name 2</td>
														
														<td>Customer 2</td>
														
														<td>Complete</td>
													</tr>
													
													<tr>
														<td>0003</td>
														
														<td>Product Name 3</td>
														
														<td>Customer 3</td>
														
														<td>Processing</td>
													</tr>
													
													<tr>
														<td>0004</td>
														
														<td>Product Name 4</td>
														
														<td>Customer 4</td>
														
														<td>Pending</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								
								<div id="drag4" class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Articles</h3>
										
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle" type="button"><em class="fa fa-list-ul"></em> View All</button>
											
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
											    <a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										
										<h6 class="card-subtitle mb-2 text-muted">Latest news</h6>
										
										<div class="divider" style="margin-top: 1rem;"></div>
										
										<div class="articles-container">
											<div class="article border-bottom">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-2 date">
															<div class="large">30</div>
															
															<div class="text-muted">Jun</div>
														</div>
														
														<div class="col-10">
															<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
															
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
														</div>
													</div>
												</div>
												
												<div class="clear"></div>
											</div><!--End .article-->
											
											<div class="article">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-2 date">
															<div class="large">30</div>
															
															<div class="text-muted">Jun</div>
														</div>
														
														<div class="col-10">
															<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
															
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
														</div>
													</div>
												</div>
												
												<div class="clear"></div>
											</div><!--End .article-->
											
											<div class="article">
												<div class="col-xs-12">
													<div class="row">
														<div class="col-2 date">
															<div class="large">30</div>
															
															<div class="text-muted">Jun</div>
														</div>
														
														<div class="col-10">
															<h4><a href="#">Lorem ipsum dolor sit amet</a></h4>
															
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
														</div>
													</div>
												</div>
												
												<div class="clear"></div>
											</div><!--End .article-->
										</div>
									</div>
								</div>
							<!--</div>
							
							<div class="col-md-12 col-lg-4">-->
								<div id="drag5" class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Top Users</h3>
										
										<h6 class="card-subtitle mb-2 text-muted">Most active this week</h6>
										
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2" style="padding: 0;">
												<img src="Vue/images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
											</div>
											
											<div class="col-sm-6 col-md-8">
												<h6 class="pt-1">Username 1</h6>
												
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											
											<div class="col-sm-3 col-md-2">
												<div class="progress-label">75%</div>
											</div>
										</div>
										
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2" style="padding: 0;">
												<img src="Vue/images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
											</div>
											
											<div class="col-sm-6 col-md-8">
												<h6 class="pt-1">Username 2</h6>
												
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											
											<div class="col-sm-3 col-md-2">
												<div class="progress-label">50%</div>
											</div>
										</div>
										
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2" style="padding: 0;">
												<img src="Vue/images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
											</div>
											
											<div class="col-sm-6 col-md-8">
												<h6 class="pt-1">Username 3</h6>
												
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											
											<div class="col-sm-3 col-md-2">
												<div class="progress-label">25%</div>
											</div>
										</div>
										
										<div class="divider"></div>
										
										<div id="calendar"></div>
										
										<div class="divider"></div>
										
										<h3 class="card-title">Timeline</h3>
										
										<h6 class="card-subtitle mb-2 text-muted">What's coming up</h6>
										
										<ul class="timeline">
											<li>
												<div class="timeline-badge"><em class="fa fa-camera"></em></div>
												
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h5 class="timeline-title mt-2">Lorem ipsum</h5>
													</div>
													
													<div class="timeline-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-badge primary"><em class="fa fa-link"></em></div>
												
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h5 class="timeline-title mt-2">Dolor</h5>
													</div>
													
													<div class="timeline-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-badge"><em class="fa fa-paperclip"></em></div>
												
												<div class="timeline-panel">
													<div class="timeline-heading">
														<h5 class="timeline-title mt-2">Sit amet</h5>
													</div>
													
													<div class="timeline-body">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								
								<div class="card mb-4">
									<div class="card-block">
										<div id="drag6">
										<h3 class="card-title">Todo List</h3>
										
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
												<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
												<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										
										<h6 class="card-subtitle mb-2 text-muted">A simple checklist</h6>
										
										<ul class="todo-list mt-2">
											<li class="todo-list-item">
												<div class="form-check">
													<input type="checkbox" id="checkbox-1" />
													
													<label for="checkbox-1">Make coffee</label>
													
													<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
											</li>
											<li class="todo-list-item">
												<div class="form-check">
													<input type="checkbox" id="checkbox-2" />
													
													<label for="checkbox-2">Check emails</label>
													
													<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
											</li>
											<li class="todo-list-item">
												<div class="form-check">
													<input type="checkbox" id="checkbox-3" />
													
													<label for="checkbox-3">Reply to Jane</label>
													
													<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
											</li>
											<li class="todo-list-item">
												<div class="form-check">
													<input type="checkbox" id="checkbox-4" />
													
													<label for="checkbox-4">Work on the new design</label>
													
													<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
											</li>
											<li class="todo-list-item">
												<div class="form-check">
													<input type="checkbox" id="checkbox-5" />
													
													<label for="checkbox-5">Get feedback</label>
													
													<div class="float-right action-buttons"><a href="#" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
											</li>
										</ul>
										</div>
										
										<div class="card-footer todo-list-footer">
											<div class="input-group">
												<input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" /><span class="input-group-btn">
													<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
											</span></div>
										</div>
									</div>
								</div>
							<!--</div>-->
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
		$("#drag1").css({"position":"absolute","width":"auto","height":"auto","top":"888px","left":"0px","cursor":"move","z-index":"100","max-width": "1021.200px"})
		$("#drag2").css({"position":"absolute","width":"auto","height":"auto","top":"0px","left":"1030px","cursor":"move","z-index":"100","max-width": "1021.200px"})
		$("#drag3").css({"position":"absolute","width":"auto","height":"auto","top":"0px","left":"0px","cursor":"move","z-index":"100","max-width": "1021.200px"})
		$("#drag4").css({"position":"absolute","width":"auto","height":"auto","top":"379px","left":"0px","cursor":"move","z-index":"100","max-width": "1021.200px"})
		$("#drag5").css({"position":"absolute","width":"auto","height":"auto","top":"357px","left":"1030px","cursor":"move","z-index":"100","max-width": "1021.200px"})
		$("#drag6").parent().parent().css({"position":"absolute","width":"auto","height":"auto","top":"888px","left":"685px","cursor":"move","z-index":"100","max-width": "1021.200px"})
		$("#drag7").css({"position":"absolute","width":"auto","height":"191.475px","top":"1340px","left":"0px","cursor":"move","z-index":"100","max-width": "1021.200px","display":"inline-flex","overflow-x":"scroll","white-space": "nowrap","overflow-y":"hidden"})
		$("#drag8").css({"position":"absolute","width":"auto","height":"auto","top":"1212px","left":"0px","cursor":"move","z-index":"100","max-width": "1021.200px"})
		/*+++++ 拖曳效果 ++++++
		*原理：标记拖曳状态dragging，坐标位置iX、iY
		*   mousedown:fn(){dragging = true：记录起始坐标位置，设置鼠标捕获}
		*   mouseover:fn(){判断如果dragging = true，则当前坐标位置 - 记录起始坐标位置，绝对定位的元素获得差值}
		*   mouseup:fn(){dragging = false：释放鼠标捕获，防止冒泡}
		*/
		var dragging1 = false;
		var dragging2 = false;
		var dragging3 = false;
		var dragging4 = false;
		var dragging5 = false;
		var dragging6 = false;
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

		$("#drag2").mousedown(function(e) {
			dragging2 = true;
			iX = e.clientX - this.offsetLeft;
			iY = e.clientY - this.offsetTop;
			this.setCapture && this.setCapture();
			return false;
		});

		$("#drag3").mousedown(function(e) {
			dragging3 = true;
			iX = e.clientX - this.offsetLeft;
			iY = e.clientY - this.offsetTop;
			this.setCapture && this.setCapture();
			return false;
		});

		$("#drag4").mousedown(function(e) {
			dragging4 = true;
			iX = e.clientX - this.offsetLeft;
			iY = e.clientY - this.offsetTop;
			this.setCapture && this.setCapture();
			return false;
		});

		$("#drag5").mousedown(function(e) {
			dragging5 = true;
			iX = e.clientX - this.offsetLeft;
			iY = e.clientY - this.offsetTop;
			this.setCapture && this.setCapture();
			return false;
		});

		$("#drag6").mousedown(function(e) {
			dragging6 = true;
			iX = e.clientX - $(this).parent().parent().position().left;
			iY = e.clientY - $(this).parent().parent().position().top;
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
			if (dragging2) {
				var e = e || window.event;
				var oX = e.clientX - iX;
				var oY = e.clientY - iY;
				$("#drag2").css({"left":oX + "px", "top":oY + "px"});
				return false;
			}
			if (dragging3) {
				var e = e || window.event;
				var oX = e.clientX - iX;
				var oY = e.clientY - iY;
				$("#drag3").css({"left":oX + "px", "top":oY + "px"});
				return false;
			}
			if (dragging4) {
				var e = e || window.event;
				var oX = e.clientX - iX;
				var oY = e.clientY - iY;
				$("#drag4").css({"left":oX + "px", "top":oY + "px"});
				return false;
			}
			if (dragging5) {
				var e = e || window.event;
				var oX = e.clientX - iX;
				var oY = e.clientY - iY;
				$("#drag5").css({"left":oX + "px", "top":oY + "px"});
				return false;
			}
			if (dragging6) {
				var e = e || window.event;
				var oX = e.clientX - iX;
				var oY = e.clientY - iY;
				$("#drag6").parent().parent().css({"left":oX + "px", "top":oY + "px"});
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
			if (dragging2) {
				dragging2 = false;
				$("#drag2")[0].releaseCapture;
				e.cancelBubble = true;
			}
			if (dragging3) {
				dragging3 = false;
				$("#drag3")[0].releaseCapture;
				e.cancelBubble = true;
			}
			if (dragging4) {
				dragging4 = false;
				$("#drag4")[0].releaseCapture;
				e.cancelBubble = true;
			}
			if (dragging5) {
				dragging5 = false;
				$("#drag5")[0].releaseCapture;
				e.cancelBubble = true;
			}
			if (dragging6) {
				dragging6 = false;
				$("#drag6")[0].releaseCapture;
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
