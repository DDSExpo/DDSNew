<!Doctype html>
<html lang="en">
<head>
  <title>Login panel </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--- use bootstrap4 cdn --->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--- use font-awesome css --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--- use custom css --->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="offset-md-4 col-md-4">
				<div class="login-circle text-center"><i class="fa fa-user-circle fa-5x" style="color:#249b3f;"></i></div>
				<div class="login-form">
					<h2 class="text-white">Login </h2>
					<form>
						<div class="form-group">
							<label>Mobile *</label>
							<input type="Number" class="form-control1" placeholder="Enter Mobile" required>
							<small class="form-text text-muted">We'll never share your Number with anyone else.</small>
						</div>
						<div class="form-group">
							<label>Password *</label>
							<input type="password" class="form-control1" placeholder="password">
						</div>
						<button type="submit text-right" class="btn btn-success btn-block">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
