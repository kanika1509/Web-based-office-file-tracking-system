<!DOCTYPE html>
<html lang="en">
	<head>
		<title>File Details</title>
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
									<h1 class="mainTitle">File Details</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Receiver </span>
									</li>
									<li class="active">
										<span>Ap</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
						

									<div class="row">
								<div class="col-md-12">
									
									<p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
								<?php echo htmlentities($_SESSION['msg']="");?></p>	
									<table class="table table-hover" id="sample-table-1">
										<thead>
											<tr>
												<th class="center">#</th>
												<th>Sending Department</th>
												<th>Receiving Department</th>
								
												<th>Date and Time  </th>
												<th> Comments</th>
												<th>Status</th>
												<th>Attached File1</th>
												<th>Attached File2</th>
												<th>Attached File3</th>
											</tr>
                           </thead>
										
										<tbody>
											
	<?php
$cnt=0;
$t=0;
foreach($FileDetails1 as $rows){
	
?>
											


											<tr>
												<td class="center"><?php echo $cnt;?>.</td>
												<td ><?php $id= $rows->sender_name;  echo $id;?></td>
												<td><?php echo $rows->receiver_name;?></td>
												<td><?php echo $rows->date_and_time;?></td>
									
												<td><?php echo $rows->comments;?></td>

												<td><?php $status=$rows->status;
												if($status==0)
													echo "Pending";
												else if($status==1)
													echo "Forwarded";
												else if($status==2)
													echo "completed";?></td>
											<td><a href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/uploads/<?php echo $rows->file1 ?>"><?php echo $rows->file1;?></a></td>
											<td><a href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/uploads/<?php echo $rows->file2 ?>"><?php echo $rows->file2;?></a></td>
											<td><a href="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/uploads/<?php echo $rows->file3 ?>"><?php echo $rows->file3;?></a></td>


											</tr>
											<?php 
$cnt=$cnt+1;
											 }?>
												


													
	
												</div>
												<div class="visible-xs visible-sm hidden-md hidden-lg">
													<div class="btn-group" dropdown is-open="status.isopen">
														<button type="button" class="btn btn-primary btn-o btn-sm dropdown-toggle" dropdown-toggle>
															<i class="fa fa-cog"></i>&nbsp;<span class="caret"></span>
														</button>
														<ul class="dropdown-menu pull-right dropdown-light" role="menu">
															<li>
																<a href="#">
																	Edit
																</a>
															</li>
															<li>
																<a href="#">
																	Share
																</a>
															</li>
															<li>
																<a href="#">
																	Remove
																</a>
															</li>
														</ul>
													</div>
												</div></td>
											</tr>
											

											
											
										</tbody>
									</table>
								</div>
							</div>
								</div>
						
						<!-- end: BASIC EXAMPLE -->
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			
							
			<!-- start: FOOTER -->
	
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
		<script src="http://localhost/CodeIgniter-3.1.8/CodeIgniter-3.1.8/vendor/selectFx/classie.js"></script>
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
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
