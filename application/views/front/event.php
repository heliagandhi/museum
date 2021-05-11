<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								EVENT		
							</h1>	
							<!--<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="event.html"> Events</a></p>-->
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap" id="events">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-10">
							<div class="title text-center">
								<h1 class="mb-10">Berbagai Event di Museum Tanah dan Pertanian</h1>
								<p></p>
							</div>
						</div>
					</div>						
					<div class="row">
						<?php
							foreach ($event as $e):
							$tanggal1= $e['tanggal'];
							$potong_berita = $e["isi_event"];
                			$potong = substr($potong_berita, 0, 100);
						?>
						<div class="col-lg-6 event-left">
							<div class="single-events">
								<img style="width: 540px; height: 360px;" class="img-fluid" src="<?= base_url('assets/gambars/events/').$e['gambar']; ?>" alt="">
								<a href="#"><h4><?= $e['nama_event']; ?></h4></a>
								<h6><span>Tanggal Unggah </span> 
									<?php  
										echo date("d/F/Y", strtotime($tanggal1));
									?></h6>
								<p>
									<?php echo $potong;?>
								</p> 
								<a href="<?= base_url('front/isi2/event/').$e['id']; ?>" class="primary-btn text-uppercase">View Details</a>
							</div>							
						</div>
						<?php
							endforeach;
						?>	
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->
		