<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<title>L-OL | Lelang Online</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!-- NavBar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
	<p class="navbar-brand">Lelang Online</p>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="mainNav">
		<ul class="nav navbar-nav nav-tabs mr-auto">
			<li class="nav-item"><a class="nav-link text-white" href="#">Home</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="#">Pendataan Barang</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="#">Penawaran</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="#">Buka dan Tutup Lelang</a></li>
			<li class="nav-item"><a class="nav-link text-white" href="#">Generate Laporan</a></li>
		</ul>
		<div class="btn-group my-2 my-lg-0">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
				Login
			</button>
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#regisModal">
				Register
			</button>
		</div>
	</div>
</nav>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-primary">
				<h5 class="modal-title">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group row">
						<label for="login-username" class="col-sm-2 col-form-label">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="login-username" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="login-password" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="login-password" required>
						</div>
					</div>
					<button type="submit" name="login-btn" class="btn btn-primary btn-lg btn-block">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="regisModal" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title">Register</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group row">
						<label for="register-name" class="col-sm-2 col-form-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="register-name" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="register-username" class="col-sm-2 col-form-label">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="register-username" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="register-password1" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="register-password1" required>
						</div>
					</div>
					<div class="form-group row">
						<label for="register-password2" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="register-password2" required>
						</div>
					</div>
					<button type="submit" name="register-btn" class="btn btn-success btn-lg btn-block">Register</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>