<?php 
	include './db.php';
	session_start();
	// session_destroy();
	if(isset($_SESSION['admin_id']))
	{
		$link = $url.'admin';
		header('location:'.$link);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <!-- icheck bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="row mt-5 pt-5 text-center item-align-center justify-content-center">
	<div class="col-md-4">
		<div class="login-box">
		  <div class="login-logo">
		    <b>Login Admin</b>
		  </div>
		  <!-- /.login-logo -->
		  <div class="card">
		  			<?php
							if (isset($_SESSION['flash_message'])) {
							    $flash = $_SESSION['flash_message'];

							    // Display the flash message with a style based on its type
							    echo "<div class='alert alert-{$flash['type']}'>
							            {$flash['message']}
							          </div>";

							    // Unset the flash message to prevent it from showing again
							    unset($_SESSION['flash_message']);
							}
						?>
		    <div class="card-body login-card-body">
		      <p class="login-box-msg">Sign in to Admin Dashboard</p>

		      <form action="<?=$url.'admin/adminlogin.php'?>" method="post">
		        <div class="input-group mb-3">
		          <input type="email" name="admin_email" class="form-control" placeholder="Email">
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-envelope"></span>
		            </div>
		          </div>
		        </div>
		        <div class="input-group mb-3">
		          <input type="password" name="admin_password" class="form-control" placeholder="Password">
		          <div class="input-group-append">
		            <div class="input-group-text">
		              <span class="fas fa-lock"></span>
		            </div>
		          </div>
		        </div>
		        <div class="row">
		          <div class="col-8">
		          </div>
		          <!-- /.col -->
		          <div class="col-4">
		            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
		          </div>
		          <!-- /.col -->
		        </div>
		      </form>
		      <!-- /.social-auth-links -->
		    </div>
		    <!-- /.login-card-body -->
		  </div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
