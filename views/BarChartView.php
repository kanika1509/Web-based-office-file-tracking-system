<!DOCTYPE html>
<html lang="en">
	<head>
		<title>View | Recieved File</title>
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
	 <link rel="stylesheet" href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/assets/css/morris.css'?>">
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				

					<?php include('include/header.php');?>
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">View | Recieved File</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Files </span>
									</li>
									<li class="active">
										<span>Recieved</span>
									</li>
								</ol>
							</div>
						</section>
						
						
						
					</div>
				</div>

    <div id="graph"></div>
 
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/raphael-min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/morris.min.js'?>"></script>
    <script>
        Morris.Bar({
          element: 'graph',
          data: <?php echo $FileDetails;?>,
          xkey: 'date_diff(max_date,min_date)',
          ykeys: ['file_id' ],
          labels: ['file_id']
        });
    </script>


			</div>
		
	<?php include('include/footer.php');?>
		
	<?php include('include/setting.php');?>
		</div>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/jquery/jquery.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/modernizr/modernizr.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/switchery/switchery.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/autosize/autosize.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/selectFx/classie.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/selectFx/selectFx.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/select2/select2.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/assets/js/main.js"></script>
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
	</body>
</html>
