<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Add Department</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/themify-icons/themify-icons.min.css">
		<link href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/assets/css/styles.css">
		<link rel="stylesheet" href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/assets/css/plugins.css">
		<link rel="stylesheet" href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/assets/css/themes/theme-1.css" id="skin_color" />


	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
			
						<?php include('include/header.php');?>
					
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Add Department</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Add Department</span>
									</li>
								</ol>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Add Department</h5>
												</div>
												<div class="panel-body">
								<!---<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>	--->
													<form role="form" name="book" action="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/index.php/AddDepartmentController/process" method="post"  >
														
<div class="form-group">
														<span class="input-icon">
									<input type="text" class="form-control" name="Department_ID" placeholder="Department_ID">
									<i class="fa fa-user"></i> </span>
														</div>

<div class="form-group">
														<span class="input-icon">
									<input type="text" class="form-control" name="Department_Name" placeholder="Department_name">
									<i class="fa fa-user"></i> </span>
														</div>
<div class="form-group">
														<span class="input-icon">
									<input type="password" class="form-control" name="Password" placeholder=" Password">
								
									<i class="fa fa-user"></i> </span>
														</div>
											
											
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															ADD
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									
									</div>
								</div>
							
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/jquery/jquery.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/modernizr/modernizr.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/selectFx/selectFx.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/select2/select2.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});

			$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
		</script>
		  <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>

	</body>
</html>
