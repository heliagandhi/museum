


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-8">
							<h6 class="text-white">Kementrian Pertanian</h6>
							<h1 class="text-white">
								MUSEUM TANAH DAN PERTANIAN				
							</h1>
							<!-- <p class="pt-20 pb-20 text-white">
							
							</p> 
							<a href="#" class="primary-btn text-uppercase">Get Started</a> -->
						</div>											
					</div>
				</div>					
			</section>
			
			<!-- End banner Area -->	

			<!-- Start service Area -->
			<section class="service-area pt-100" id="about">
				<div class="container">
					<div class="row">								
					</div>
				</div>	
			</section>
			<!-- End service Area -->
			
			<!-- Start quote Area -->
			<section class="quote-area section-gap">
				<div class="container">				
					<div class="row">
						<div class="col-lg-6 quote-left">
							<h1>
								<span>Museum</span> adalah tempat <br>
								berisikan benda atau momen bersejarah <span>yang</span> diperuntukan <br>
								untuk <span>umum</span>.
							</h1>
						</div>
						<div class="col-lg-6 quote-right">
							<p>
								Museum berfungsi mengumpulkan, merawat, dan menyajikan serta melestarikan warisan budaya masyarakat untuk tujuan studi, penelitian dan kesenangan atau hiburan. Ayo Kita Mengenal Museum
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End quote Area -->

			<!-- Start exibition Area -->
		
			<!-- End exibition Area -->			
			
			
			<!-- GALERI -->
			
			<section class="gallery-area section-gap" id="gallery">
			
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10 text-white" id="flip">Galeri Fasilitas</h1>
								
							</div>
						</div>
					</div>			
										
					<div id="grid-container" class="row">

						 <!--
						<a class="single-gallery" href="<?= base_url('assets/'); ?>assetsmuseum/img/lol/1.jpg"><img class="grid-item" src="<?= base_url('assets/'); ?>assetsmuseum/img/lol/1.jpg"></a>
						<a class="single-gallery" href="<?= base_url('assets/'); ?>assetsmuseum/img/lol/3.jpg"><img class="grid-item" src="<?= base_url('assets/'); ?>assetsmuseum/img/lol/3.jpg"></a>
						<a class="single-gallery" href="<?= base_url('assets/'); ?>assetsmuseum/img/lol/4.jpg"><img class="grid-item" src="<?= base_url('assets/'); ?>assetsmuseum/img/lol/4.jpg"></a>
						<a class="single-gallery" href="<?= base_url('assets/'); ?>assetsmuseum/img/lol/1.jpg"><img class="grid-item" src="<?= base_url('assets/'); ?>assetsmuseum/img/lol/1.jpg"></a>
						<a class="single-gallery" href="<?= base_url('assets/'); ?>assetsmuseum/img/lol/1.jpg"><img class="grid-item" src="<?= base_url('assets/'); ?>assetsmuseum/img/lol/1.jpg"></a>
						<a class="single-gallery" href="<?= base_url('assets/'); ?>assetsmuseum/img/lol/3.jpg"><img class="grid-item" src="<?= base_url('assets/'); ?>assetsmuseum/img/lol/3.jpg"></a>
						<a class="single-gallery" href="<?= base_url('assets/'); ?>assetsmuseum/img/lol/4.jpg"><img class="grid-item" src="<?= base_url('assets/'); ?>assetsmuseum/img/lol/4.jpg"></a>
						<a class="single-gallery" href="<?= base_url('assets/'); ?>assetsmuseum/img/lol/1.jpg"><img class="grid-item" src="<?= base_url('assets/'); ?>assetsmuseum/img/lol/1.jpg"></a>
						-->
						
						<?php
							foreach ($fasilitas as $f) :
						?>
						<div class="col-lg-3 col-md-12 mt-12 text-center no-padding info-center">
							<div class="h_gallery_item">
								<img style="width: 300px; height: 200px;" src="<?= base_url('assets/gambars/fasilitas/').$f['gambar']; ?>" alt="">
								<div class="hover">
								   <a class="light" href="<?= base_url('assets/gambars/fasilitas/').$f['gambar'] ?>"><i class="fa fa-expand"></i><h4 style="color:white"><?= $f['nama_fasilitas']; ?></h4></a>
								</div>
							</div>
						</div>
						<?php
							endforeach; 
						?>
						
						
					</div>	
					
					<!--<div class="gallery_f_inner row imageGallery1">
					
						<?php
							foreach ($fasilitas as $f) :
						?>
						<div class="col-lg-3 col-md-12 mt-12 text-center no-padding info-center">
							<div class="h_gallery_item">
								<img style="width: 524px; height: 350px;" src="<?= base_url('assets/gambars/fasilitas/').$f['gambar']; ?>" alt="">
								<div class="hover">
								   <a class="light" href="<?= base_url('assets/gambars/fasilitas/').$f['gambar'] ?>"><i class="fa fa-expand"></i><h4 style="color:white"><?= $f['nama_fasilitas']; ?></h4></a>
								</div>
							</div>
						</div>
						<?php
							endforeach; 
						?>
						

					</div>-->
					
				</div>	
			</section>
			