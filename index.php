<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Deceville</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/custom.css">

 
  </head>
  <body>
  		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	    	<div class ="container">
	    		<div class="navbar-header">
	    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	    				<span class="sr-only">Toggle navigation</span> <!-- accessible for screen readers -->
	    				<span class="icon-bar"></span>
	    				<span class="icon-bar"></span>
	    				<span class="icon-bar"></span>
	    			</button>
	    			<a class="navbar-brand" href="#">Deceville</a>
	    		</div>
	    	</div>
	    </div>
	    <div class="container-fluid">
				<div class="row">
			    <div class="col-md-6 col-md-offset-3">
					<div class="panel panel-login">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-6">
									<a href="index.php" class="active" id="login-form-link">Login</a>
								</div>
								<div class="col-xs-6">
									<a href="index.php" id="register-form-link">Register</a>
								</div>
							</div>
							<hr>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form id="login-form" action="home.php" method="post" role="form" style="display: block;">
										<div class="form-group">
											<input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="E-mail" value="">
										</div>
										<div class="form-group">
											<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
										</div>
										<div class="form-group text-center">
											<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
											<label for="remember"> Remember Me</label>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-lg-12">
													<div class="text-center">
														<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
													</div>
												</div>
											</div>
										</div>
									</form>
									<form id="register-form" action="home.php" method="post" role="form" style="display: none;">
										<div class="form-group">
											<input type="text" name="first_name" id="first_name" tabindex="1" class="form-control" placeholder="First name" value="">
										</div>
										<div class="form-group">
											<input type="text" name="last_name" id="last_name" tabindex="2" class="form-control" placeholder="Last name" value="">
										</div>
										<div class="form-group">
											<input type="text" name="email" id="email" tabindex="3" class="form-control" placeholder="E-mail">
										</div>
										<div class="form-group">
											<input type="password" name="confirm-password" id="confirm-password" tabindex="4" class="form-control" placeholder="Confirm Password">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="register-submit" id="register-submit" tabindex="5" class="form-control btn btn-register" value="Register Now">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	 	<!-- Fixed footer -->
	    <div class="navbar navbar-default navbar-static-bottom" role="navigation">
	    	<div class="container">
	    		<div class="navbar-text pull-left">
	    		<p>© 2016 Deceville.com</p>
	    		</div>
	    		<div class="navbar-text pull-right">
	    			<a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
	    			<a href="#"><i class="fa fa-twitter fa-2x"></i></a>
	    			<a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
	    		</div>
	    	</div>
	    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/myscript.js"></script>
  </body>
</html>

