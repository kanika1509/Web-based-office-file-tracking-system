<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User  | Create File</title>
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
		<script>
function getdoctor(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'specilizationid='+val,
	success: function(data){
		$("#doctor").html(data);
	}
	});
}
</script>	


<script>
function getfee(val) {
	$.ajax({
	type: "POST",
	url: "get_doctor.php",
	data:'doctor='+val,
	success: function(data){
		$("#fees").html(data);
	}
	});
}
</script>	




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
									<h1 class="mainTitle">User | Create File</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>User</span>
									</li>
									<li class="active">
										<span>Create File</span>
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
													<h5 class="panel-title">Create File</h5>
												</div>
												<div class="panel-body">
								<p style="color:red;"><?php echo htmlentities($_SESSION['msg1']);?>
								<?php echo htmlentities($_SESSION['msg1']="");?></p>	
													<form role="form" name="book" action="<?php echo base_url()?>index.php/CreateFileFTS/process" method="post"  >
														


<div class="form-group">
														<span class="input-icon">
									<input type="text" class="form-control" name="sending_dept" placeholder="sending Department">
									<i class="fa fa-user"></i> </span>
														</div>




<div class="form-group">
<span class=:input-icon">

<select name="receiver_id">;
	<option  value="" disabled selected hidden>Receiver</option><br>
									<?php
						
									foreach($names as $row){
										?>
										<option name="receiver_id" placeholder="Receiver" value="<?php echo $row->dept_id; ?>"><?php echo $row->dept_name; ?></option> <br>

											<?php 
											 }?>
											 <i class="fa fa-lock"></i>
											</select>
										</span>
														</div>



<div class="form-group">
															<label for="AppointmentDate">
																Date
															</label>
<input class="form-control datepicker" name="appdate"  required="required" data-date-format="yyyy-mm-dd">
	
														</div>
														
<div class="form-group">
															<label for="Appointmenttime">
														
														Time
													
															</label>
			<input class="form-control" name="apptime" id="timepicker1" required="required">eg : 10:00 PM
														</div>														





														



													
														
											
														
														<button type="submit" name="submit" class="btn btn-o btn-primary">
															Submit
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
