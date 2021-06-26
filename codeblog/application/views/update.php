<!DOCTYPE html>
<html>
<head>
	<title>update form</title>
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">
    <script src=<?php  echo base_url('js/jquery-3.5.1.js'); ?>></script>
    <script src=<?php echo base_url('js/main.js'); ?> ></script>
    <script src=<?php echo base_url('js/bootstrap.js'); ?>></script>
	<style>
		table,td{
			border: 1px solid black;
		}
		td{
			padding:5px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-md"> <a class="navbar-brand" href="#">Logo</a> 
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button> 
		<div class="collapse navbar-collapse" id="main-navigation"> 
			<ul class="navbar-nav"> 
				<li class="nav-item"> <a class="nav-link" href="http://localhost/codeblog/">Home</a></li> 
				<li class="nav-item"> <a class="nav-link" href="http://localhost/codeblog/index.php/register/displaydata">View Joined Member</a></li> 
			</ul> 
		</div> 
	</nav>
	<?php
	foreach($data as $row){
	?>
	<br><br>
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">

			<form class="col-5 border border-secondary rounded" style="margin:auto;" action="" method="post">
				<br><br>
				<h2 class="text-center text-secondary">Upadate Details ID = <?php echo $row->id; ?></h2>
				<br>
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name" value="<?php echo $row->name; ?>" required>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" value="<?php echo $row->email; ?>" required>
				</div>
				<div class="form-group">
					<label>Mobile Number</label>
					<input type="text" class="form-control" name="mobile" value="<?php echo $row->mobile; ?>">
				</div>
				<div class="form-group">
					<label>Destinations</label>
					<select class="form-control mb-3" name="destination" id="destination">
						<option value="<?php echo $row->destination; ?>">--SELECT--</option>
						<option value="Sigiriya">Sigiriya</option>
						<option value="Ella">Ella</option>
						<option value="Ruassala">Ruassala</option>
						<option value="Arugabey">Arugabey Beach</option>
					</select>
				</div>
				<div class="form-group row">
					<button type="submit" class="btn btn-success col-3 m-1 ml-3" name="update" value="update">Update</button>
					<a href="http://localhost/codeblog/index.php/register/displaydata" class="btn btn-info col-3 m-1">View Joined Member</a> 
				</div>
				<br><br>
				
			</form>
		</div>
	</div>


	
<?php } ?>

</body>
</html>