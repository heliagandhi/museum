<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								PESAN		
							</h1>	
							<!--<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="event.html"> Events</a></p>-->
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			<br/><br/>
			<div class="container">		
		  	<?= $this->session->flashdata('pesan'); ?>
				<form action="" method="post">
					<div class="form-group">
						<h4>Nama anda : </h4> </br>
						<input type="text" class="form-control" id="nama_a" name="nama">
					</div>
					<div class="form-group">
						<h4>Email anda : </h4></br>
						<input type="text" class="form-control" id="alamat_e" name="email">
					</div>	
					<div class="form-group">
						<h4>Pesan anda : </h4></br>
						<textarea name="pesan" id="editor"></textarea>
					</div>		
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
		   	</div>

			
			
			