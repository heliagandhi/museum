<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<?= $this->session->flashdata('pesan'); ?>
				<form method="post" class="login100-form validate-form flex-sb flex-w" action="">
					<span class="login100-form-title p-b-51">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="u" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="p" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<input type="submit" name="submit" class="login100-form-btn" value="Login">
					</div>

					<p><br/>Don't have an account ?<a href ="<?= base_url('masuk/registrasi'); ?>" style="color: blue;"> Sign Up.</a> </p>
					
				</form>
			</div>
		</div>
	</div>
