<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Track File</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url()?>vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>vendor/themify-icons/themify-icons.min.css">
		<link href="<?php echo base_url()?>vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url()?>vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/plugins.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body class="login">
		<div id="app">
		<?php include('include/sidebar.php');?>
		<?php include('include/header.php');?>
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
				<a href="../index.html"><h2> Track File</h2></a>
				</div>

				<div class="box-login">
					<form class="form-login" action="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/index.php/TrackPageContr/process" method="post">
						<fieldset>
							<legend>
								Track your File
							</legend>
							<p>
								Please enter File Id to track your file.<br />
								<?php
								echo "<div class='error_msg'>";
								 if(isset($error))
								{
									echo("<a style=color:red>".$error."</a>");
								}
								echo "</div>";
								?>
						
							</p>
							<div class="form-group">
								
								<input type="text" class="form-control" name="file_id" placeholder="File Id">
											 <i class="fa fa-lock"></i>

							</div>
							
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Track <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>

					
			
				</div>


				<div class="box-login">
					<form class="form-login" action="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/index.php/TrackPageContr/process2" method="post">
						<fieldset>
							<legend>
								Track your File
							</legend>
							<p>
								Please enter date to track your file.<br />
								<?php
								echo "<div class='error_msg'>";
								 if(isset($error1))
								{
									echo("<a style=color:red>".$error1."</a>");
								}
								echo "</div>";
								?>
						
							</p>
							<div class="form-group">
								
								<input type="date" class="form-control" name="date">
											 <i class="fa fa-lock"></i>

							</div>
							
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Track <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>

					
			
				</div>


			</div>

		</div>
			<?php include('include/footer.php');?>
		
	<?php include('include/setting.php');?>
</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	<!-- end: BODY -->
</html>