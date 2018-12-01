<!DOCTYPE html>
<html>
<head>
</head>
<body>

	<section class="content-header">
		<h1>
			Profile
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Patients</a></li>
			<li class="active">Patient profile</li>
		</ol>
	</section>
	<section class="content">
		<div class="container">
			<div class="row">
				<aside class="col-lg-2 col-sm-6">
					<div class="card" style="width: 180px">
						<?php foreach ($patients as $patient): ?>							
							<img style="width: inherit;" class="card-img-top img-circle img-bordered-sm" src="<?php echo empty($patient['Image']) ? base_url(). 'assets/img/no-image.png' :  $patient['Image'];?>" alt="user image">

							<div class="card-body">
								<h5 class="card-title"><?php echo $patient['FName'] . ' ' . $patient['LName'] ?></h5>
							</div>
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><h6 style="font-family: sans-serif;font-weight: 600"><i class="fa fa-user"></i> Profile</h6></li>
								<li class="list-group-item"><i class="fa fa-heartbeat"></i> Physical Profile</li>
								<li class="list-group-item"><i class="fa fa-history"></i> History</li>
							</ul>
							
						<?php endforeach; ?>
					</div>
				</aside>

				<div class="col-lg-10 col-sm-6">
					<div class="card">
						
						<div class="card-body">
							
						</div>
					</div>
				</div>
				
			</div>
		</div>

		
		
	</section>


</body>
</html>
<script type="text/javascript">
	$('document').ready(function(){
		$(".list-group-item").hover(function() {
			$(this).css('cursor','pointer');
			$(this).css('background-color','#f4f4f4');
		},function()
		{
			$(this).css('background-color','#ffffff');
		});
	});
</script>