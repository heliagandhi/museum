<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								BERITA		
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
								<h1 class="mb-10">Berita Terkini Seputar Museum</h1>
								<p></p>
							</div>
						</div>
					</div>						
					<div class="row">
						<?php
							foreach ($terkini as $t):
								$tanggal1 = $t['tgl_berita'];
								$potong_berita = $t["isi_berita"];
                				$potong = substr($potong_berita, 0, 100);
						?>
						<div class="col-lg-6 event-left">
							
							<div class="single-events">
								<img style="width: 540px; height: 360px;" class="img-fluid" src="<?= base_url('assets/gambars/berita/').$t['gambar']; ?>" alt="">
								<a href="#"><h4><?= $t['jdl_berita'] ?></h4></a>
								<h6><span>Tanggal Unggah </span> 
									<?php echo date("d/F/Y", strtotime($tanggal1)); ?>
								</h6>
								<p>
									<?php echo $potong;?>
								</p> 
								<a href="<?= base_url('front/isi1/berita/').$t['id_berita']; ?>" class="primary-btn text-uppercase">View Details</a>
							</div>
							
												
						</div>
						<?php
							endforeach;
						?>	
						<!--<a href="#" class="previous">&laquo; Previous</a>
						<a href="#" class="next"> Next &raquo;</a>	-->
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->
		
			