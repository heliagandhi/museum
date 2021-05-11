<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form method="post" class="login100-form validate-form flex-sb flex-w" enctype="multipart/form-data" action="">
					<span class="login100-form-title p-b-51">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="un" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="psw" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div>
						<input type="file" name="nfp">
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>	

					<p><br/>Already have an account ?<a href ="<?= base_url('masuk')?>" style="color: blue;"> Log in.</a> </p>				
				</form>
			</div>
		</div>
	</div>