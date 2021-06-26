<!DOCTYPE html>
<html>
<head>
	<title>RegForm</title>
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">
    <script src=<?php  echo base_url('js/jquery-3.5.1.js'); ?>></script>
    <script src=<?php echo base_url('js/main.js'); ?> ></script>
    <script src=<?php echo base_url('js/bootstrap.js'); ?>></script>
	<style>
	        body, html{
	            height: 100%;
	        }
    </style>
</head>
<body>
	<nav class="navbar navbar-expand-md"> <a class="navbar-brand" href="#">Ward No 10</a> 
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button> 
		<div class="collapse navbar-collapse" id="main-navigation"> 
			<ul class="navbar-nav"> 
				<li class="nav-item"> <a class="nav-link" href="http://localhost/codeblog/">Home</a></li> 
				<li class="nav-item"> <a class="nav-link" href="http://localhost/codeblog/index.php/register/displaydata"> Patient Records</a></li> 
			</ul> 
		</div> 
	</nav>
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">

			<form class="col-5 border border-secondary rounded" style="margin:auto;" action="" method="post">
				<br><br>
				<h2 class="text-center text-secondary">Add New Patient</h2>
				<br>

				<div class="form-group">
					<label>Full Name</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Full Name" value="<?php echo set_value('name') ?>" required>

					<?php if(form_error('name')){
			            echo "<span style='color:red'>".form_error('name')."</span>";
			        }
			        ?>
				</div>

				<div class="form-group">
					<label>Age</label>
					<input class="form-control" name="email" id="email" placeholder="Age" type="number" value="<?php echo set_value('email') ?>" required>
					<?php if(form_error('email')){
			            echo "<span style='color:red'>".form_error('email')."</span>";
			        }
			        ?>
				</div>

				<div class="form-group">
					<label>Mobile Number</label>
					<input type="number" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" required>
				</div>
				

				<div class="form-group ">
					<label>Blood Group</label>
					<select class="form-control mb-3" name="destination" id="destination" required>
						<option value="">--SELECT THE BLOOD GROUP--</option>
						<option value="A-">A-</option>
						<option value="A+">A+</option>
						<option value="B-">B-</option>
						<option value="B+">B+</option>
						<option value="AB-">AB-</option>
						<option value="AB+">AB+</option>
						<option value="O-">O-</option>
						<option value="O+">O+</option>
						
					</select>
				</div>

				<div class="form-group row">
					<button type="submit" class="btn btn-success col-3 m-1 ml-3" name="save" value="save">ADD</button>
					<button type="reset" class="btn btn-light border border-dark col-3 m-1" name="reset">RESET</button>
				</div>
				
				<br><br>
				
			</form>
		</div>
	</div>

</body>
</html>