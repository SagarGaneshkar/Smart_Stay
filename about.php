<?php
session_start();
require("config.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>View About</title>
		

			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
 			<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
 			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  			<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  
    </head>
    <body>
	      <?php require("headerforabout.php");?>
            <div class="page-wrapper">
                <div class="content container-fluid">

					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"><b>List Of Advertisement</b></h4>
									
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table class="table table-stripped table-borderless ">
											<?php
													
													$query=mysqli_query($con,"select * from about ORDER BY id DESC");
													$cnt=1;
													while($row=mysqli_fetch_row($query))
														{
											?>
											<tbody>
												<tr>
											
													<td><?php echo $row['2']; ?></td>
													<td><img src="admin/images/<?php echo $row['3']; ?>" height="450px" width="400px" alt="no image"></td>
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
			
    </body>
</html>
