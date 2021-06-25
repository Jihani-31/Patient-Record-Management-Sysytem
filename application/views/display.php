<!DOCTYPE html>
<html>
<head>
	<title>Display Records</title>
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">
    <script src=<?php  echo base_url('js/jquery-3.5.1.js'); ?>></script>
    <script src=<?php echo base_url('js/main.js'); ?> ></script>
    <script src=<?php echo base_url('js/bootstrap.js'); ?>></script>
    <!-- DataTables -->
  	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</head>
	<body>
		<nav class="navbar navbar-expand-md"> <a class="navbar-brand" href="#">Logo</a> 
			<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
				<span class="navbar-toggler-icon"></span>
			</button> 
			<div class="collapse navbar-collapse" id="main-navigation"> 
				<ul class="navbar-nav"> 
					<li class="nav-item"> <a class="nav-link" href="http://localhost/codeblog/">Home</a></li> 
					<li class="nav-item"> <a class="nav-link" href="http://localhost/codeblog/index.php/register/savedata">Add Member</a></li> 
				</ul> 
			</div> 
		</nav>
		<div class="container-fluid">
		    <div class="row">
		        <div class="col-12">
		            <div class="card mt-4">
		                <div class="card-header bg-info">
		                    <h3 class="card-title m-0 p-0" style="text-align: center">Joined Member-Report</h3>
		                </div>
		                <!-- /.card-header -->
		                <!-- /.card-body -->
		                <div class="card-body">
		                    <table id="datatable" class="table table-bordered table-striped table-hover">
		                        <thead>
		                            <tr>
		                                <th style="width: 5%">ID</th>
		                                <th style="width: 20%">Name</th>
		                                <th class="no-sort" style="width: 20%">Email</th>
		                                <th class="no-sort" style="width: 20%">Mobile Number</th>
		                                <th style="width: 20%">Destinations</th>
		                                <th class="no-sort" style="width: 15%; text-align: center;">Action</th>
		                            </tr>
		                        </thead>
		                        <tbody id="hospital_list">
		                        	<!-- Use foreach loop to feed data from the database -->
		                        	<?php
										foreach ($data as $row) {
											echo "<tr>";
											echo "<td>".$row->id."</td>";
											echo "<td>".$row->name."</td>";
											echo "<td>".$row->email."</td>";
											echo "<td>".$row->mobile."</td>";
											echo "<td>".$row->destination."</td>";
											echo "<td class='p-2'><a href='deletedata?id=".$row->id."' style='width: 48%' class='btn btn-danger btn-sm float-left' >Delete<br></a>";
											echo "<a href='updatedata?id=".$row->id."' style='width: 48%' class='btn btn-warning btn-sm float-right'>Update</a></td>";
											
											echo "</tr>";
											# code...
										}
									?>
			                                                   
		                        </tbody>
		                        <tfoot>
		                            <tr>
		                                <th>ID</th>
		                                <th>Name</th>
		                                <th>Email</th>
		                                <th>Mobile Number</th>
		                                <th>Destinations</th>
		                                <th style="text-align: center;">Action</th>
		                            </tr>
		                        </tfoot>
		                    </table>
		                </div>
		                <!-- /.card-body -->
		            </div>
		            <!-- /.card -->
		        </div>
		        <!-- /.col -->
		    </div>
		    <!-- /.row -->
		</div>
		<script>
		  $(function () {
		    
		    $('#datatable').DataTable({
		      'paging'      : true,
		      'lengthChange': true,
		      'searching'   : true,
		      'ordering'    : true,
		      'info'        : true,
		      'autoWidth'   : false,
		      "columnDefs": [{ targets: 'no-sort', orderable: false }]
		    })
		  })
		</script>
		
	</body>
</html>