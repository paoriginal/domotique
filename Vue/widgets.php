<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="description" content="">
	
	<meta name="author" content="">
	
	<link rel="icon" href="images/favicon.ico">
	
	<title>Medialoot Bootstrap 4 Dashboard Template</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1">
				<h1 class="site-title"><a href="index.html"><em class="fa fa-rocket"></em> Brand.name</a></h1>
								
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link" href="index.html"><em class="fa fa-dashboard"></em> Dashboard</a></li>
					<li class="nav-item"><a class="nav-link active" href="widgets.html"><em class="fa fa-calendar-o"></em> Widgets <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="charts.html"><em class="fa fa-bar-chart"></em> Charts</a></li>
					<li class="nav-item"><a class="nav-link" href="elements.html"><em class="fa fa-hand-o-up"></em> UI Elements</a></li>
					<li class="nav-item"><a class="nav-link" href="cards.html"><em class="fa fa-clone"></em> Cards</a></li>
				</ul>
				
				<a href="#" class="logout-button"><em class="fa fa-power-off"></em> Signout</a></nav>
			
			<main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Widgets</h1>
					</div>
					
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="images/profile-pic.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						
						<div class="username mt-1">
							<h4 class="mb-1">Username</h4>
							
							<h6 class="text-muted">Super Admin</h6>
						</div>
						</a>
						
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="#"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-sliders mr-1"></em> Preferences</a>
						     <a class="dropdown-item" href="#"><em class="fa fa-power-off mr-1"></em> Logout</a></div>
					</div>
					
					<div class="clear"></div>
				</header>
				
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-sm-12 col-md-6 ">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Top Users</h3>
										
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
												<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
												<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										
										<h6 class="card-subtitle mb-2 text-muted">Most active this week</h6>
										
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2 col-xl-1" style="padding: 0;">
												<img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
											</div>
											
											<div class="col-sm-6 col-md-8 col-xl-10">
												<h6 class="pt-1">Username 1</h6>
												
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											
											<div class="col-sm-3 col-md-2 col-xl-1">
												<div class="progress-label">75%</div>
											</div>
										</div>
										
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2 col-xl-1" style="padding: 0;">
												<img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
											</div>
											
											<div class="col-sm-6 col-md-8 col-xl-10">
												<h6 class="pt-1">Username 2</h6>
												
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 50%" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											
											<div class="col-sm-3 col-md-2 col-xl-1">
												<div class="progress-label">50%</div>
											</div>
										</div>
										
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2 col-xl-1" style="padding: 0;">
												<img src="images/profile-pic.jpg" alt="profile photo" class="circle profile-photo" style="width: 100%; max-width: 100px;">
											</div>
											
											<div class="col-sm-6 col-md-8 col-xl-10">
												<h6 class="pt-1">Username 3</h6>
												
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 25%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											
											<div class="col-sm-3 col-md-2 col-xl-1">
												<div class="progress-label">25%</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="card mb-4">
									<div class="card-block">
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
										
										<div class="card-footer todo-list-footer">
											<div class="input-group">
												<input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" /><span class="input-group-btn">
													<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
											</span></div>
										</div>
									</div>
								</div>
								
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Calendar</h3>
										
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
												<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
												<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										
										<h6 class="card-subtitle mb-2 text-muted">What's coming up</h6>
										
										<div id="calendar"></div>
									</div>
								</div>
							</div>
							
							<div class="col-sm-12 col-md-6">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Contact Form</h3>
										
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
												<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
												<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										
										<h6 class="card-subtitle mb-2 text-muted">Subtitle</h6>
										
										<form class="form-horizontal" action="" method="post">
											<fieldset>
												<!-- Name input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Name</label>
													
													<div class="col-12 no-padding">
														<input id="name" name="name" type="text" placeholder="Your name" class="form-control">
													</div>
												</div>
											
												<!-- Email input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="email">Your E-mail</label>
													
													<div class="col-12 no-padding">
														<input id="email" name="email" type="text" placeholder="Your email" class="form-control">
													</div>
												</div>
												
												<!-- Message body -->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="message">Your message</label>
													
													<div class="col-12 no-padding">
														<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
													</div>
												</div>
												
												<!-- Form actions -->
												<div class="form-group">
													<div class="col-12 widget-right no-padding">
														<button type="submit" class="btn btn-primary btn-md float-right">Submit</button>
													</div>
												</div>
											</fieldset>
										</form>
									</div>
								</div>
								
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Timeline</h3>
										
										<div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a>
												<a class="dropdown-item" href="#"><em class="fa fa-thumb-tack mr-1"></em> Pin Window</a>
												<a class="dropdown-item" href="#"><em class="fa fa-remove mr-1"></em> Close Window</a></div>
										</div>
										
										<h6 class="card-subtitle mb-2 text-muted">Vertical  Layout</h6>
										
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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
	  </body>
</html>
