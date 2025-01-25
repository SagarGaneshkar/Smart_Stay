<?php

require("config.php");

 

?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>View Advertisement</title>
		

       


			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 			<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  			<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  
    </head>
    <body>
	
		
			<?php include("adminheader.php"); ?>
			
            <div class="page-wrapper">
                <div class="content container-fluid">

					
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title"></h3>
							
							</div>
						</div>
					</div>
			
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">List Of Advertisement</h4>
									<?php 
											if(isset($_GET['msg']))	
											echo $_GET['msg'];
											
									?>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table class="table table-stripped table-bordered table-hover ">
											<thead>
												<tr>
													<th>#</th>
													<th>Title</th>
													<th>Content</th>
													<th>Image</th>
													<th>Actions</th>
													
												</tr>
											</thead>
											<?php
													
													$query=mysqli_query($con,"select * from about");
													$cnt=1;
													while($row=mysqli_fetch_row($query))
														{
											?>
											<tbody>
												<tr>
													<td><?php echo $cnt; ?></td>
													<td><?php echo $row['1']; ?></td>
													<td><?php echo $row['2']; ?></td>
													<td><img src="images/<?php echo $row['3']; ?>" height="400px" width="400px"></td>
													<td><a href="aboutedit.php?id=<?php echo $row['0']; ?>"><button class="btn btn-info">Edit</button></a>
													<a href="aboutdelete.php?id=<?php echo $row['0']; ?>"><button class="btn btn-danger">Delete</button></a></td>
												</tr>
											</tbody>
												<?php
												$cnt=$cnt+1;
												} 
												?>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			

		
		
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>
<style>


</style>
