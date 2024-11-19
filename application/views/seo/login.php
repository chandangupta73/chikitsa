<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pious SEO Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>admin_design/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>admin_design/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>admin_design/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>admin_design/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>admin_design/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>admin_design/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>admin_design/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url();?>admin_design/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="<?= base_url('Seo/seo_varify_login');?>" method="POST">
					<span class="login100-form-title p-b-55">
						SEO Admin Login
					</span>
					<?php
					if(($this->session->userdata('error')!=''))
					{
                    echo $this->session->userdata('error');
					}
					?>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Email can't be empty">
						<input class="input100" type="text" name="email" placeholder="Email">
						<?php
						if(($this->session->userdata('email_error'))!='')
						{
                         echo "<font color='red'>".$this->session->userdata('email_error')."</font>";
						}
						?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<?php
						if($this->session->userdata('password_error')!='')
						{
                         echo "<font color='red'>".$this->session->userdata('password_error')."</font>";
						}
						?>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>

					
					
					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?= base_url();?>admin_design/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>admin_design/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url();?>admin_design/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>admin_design/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url();?>admin_design/login/js/main.js"></script>

</body>
</html>
