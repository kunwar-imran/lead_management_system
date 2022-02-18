<?php
//require_once('head.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/Perrona-icon-76.png">
  <link rel="icon" type="image/png" href="assets/img/Perrona-icon-96.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Perrona Admin Panel
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

</head>
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h3 class="card-title" style="text-align:center;">Perrona Health Systems</h3>
              <p class="card-category" style="text-align:center;">
                Admin Panel
				</p>
            </div>
            <div class="card-body">
			<form action="login_validate.php" method="post" role="form">
              <div class="row">
			  <div class="col-md-3"></div>
			  
				<div class="col-md-6">
					<div class="form-group">
                          <label class="bmd-label-floating">User Name</label>
                          <input type="text" class="form-control" name="user">
                    </div>
				</div>
				<div class="col-md-3"></div>
			 </div>
			  <div class="row">
			  <div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="form-group">
                          <label class="bmd-label-floating">Password</label>
                          <input type="password" class="form-control" name="password">
                    </div>
				</div>
			   <div class="col-md-3"></div>				
			  </div>
			  <div class="row">
			  <div class="col-md-3"></div>
				<div class="col-md-6">
			  <button type="submit" class="btn btn-primary pull-right">Login</button>
                
				</form>
				<div class="clearfix"></div>
			 </div>
			</div>
		</div>
	</div>

<?php



?>