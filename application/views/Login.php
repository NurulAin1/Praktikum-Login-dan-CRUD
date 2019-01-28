<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url()?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= base_url()?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="<?= base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= base_url()?>assets/img/favicon.png">
    <style>

    </style>
</head>
<style>
    #wrapper{
        margin-top: 75px;
    }
    form{
        margin-left:20%;
        margin-right:20%;
    }
</style>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
				<div class="auth-box">
					<!--<div class="left">-->
						<div class="content" style="text-align: center;">
							<div class="header">
								<div class="logo text-center"><img src="<?= base_url()?>assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							<form class="form-auth-small" method="POST"action="<?= base_url();?>index.php/User/Login">
								<div class="form-group">
									<label for="signin-username" class="control-label sr-only">Username</label>
									<input type="text" class="form-control" placeholder="Username" name="Username">
                                </div>
                                <br>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" placeholder="Password" name="Password">
								</div><br>
								<div class="form-group clearfix"  style="margin-left: 40px;">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" style="margin-left: 10px;" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="<?= base_url()?>#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
