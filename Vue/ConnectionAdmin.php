<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<meta name="description" content="">
	
	<meta name="author" content="">
	
	<link rel="icon" href="Vue/images/favicon.ico">
	
	<title>Medialoot Bootstrap 4 Dashboard Template</title>

    <!-- Bootstrap core CSS -->
    <link href="Vue/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="Vue/css/font-awesome.css" rel="stylesheet">
    
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="Vue/css/style.css" rel="stylesheet">
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			
			
			<main class="col-xs-12 col-sm-1 col-lg-1 col-xl-12">
				<header class="page-header row justify-center" style="height: 74px;">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Connexion</h1>
					</div>
					
					
					
					<div class="clear"></div>
				</header>
				
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-sm-12 col-md-6 offset-md-3">
								<div class="card mb-4">
									<div class="card-block">
																				
										<h6 class="card-subtitle mb-2 text-muted">Veuillez-vous identifier</h6>
										
										<form class="form-horizontal" action="connexion" method="POST">
											<fieldset>
												<!-- Email input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="email">E-mail</label>
													
													<div class="col-12 no-padding">
														<input id="email" name="email" type="text" placeholder="email" class="form-control">
													</div>
												</div>

												<!-- Mot de passe input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="passwd">Mot de passe</label>
													
													<div class="col-12 no-padding">
														<input id="passwd" name="passwd" type="password" placeholder="mot de passe" class="form-control">
													</div>
												</div>
												
												<!-- Form actions -->
												<div class="form-group">
													<div class="col-12 widget-right no-padding">
														<button type="submit" class="btn btn-primary btn-md float-right">Se connecter</button>
													</div>
												</div>
											</fieldset>
										</form>
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
	  </body>
</html>
