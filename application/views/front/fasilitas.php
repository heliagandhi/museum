<!-- start banner Area -->
	<section class="banner-area relative" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						FASILITAS PENGINAPAN		
					</h1>	
					<!--<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="event.html"> Events</a></p>-->
				</div>											
			</div>
		</div>
	</section>
        <section class="home_gallery_area p_120">
        	<!--<div class="container">
        		<div class="isotope_fillter">
        			<ul class="gallery_filter list">
						<li class="active" data-filter="*"><a href="#">Semua</a></li>
						<li data-filter=".pe"><a href="#">Penginapan</a></li>
						<li data-filter=".rp"><a href="#">Ruang Pertemuan</a></li>
						<li data-filter=".roo"><a href="#">Rooftop</a></li>
						<li data-filter=".ca"><a href="#">Caffe</a></li>
						<li data-filter=".rc"><a href="#">Ruang Cinema</a></li>
						<li data-filter=".mu"><a href="#">Musolah</a></li>
					</ul>
        		</div>
        	</div>-->
			
        	<div class="container box_1620">
			
					<div class="title text-center">
						<h1 class="mb-10 text-gray" id="flip">Fasilitas</h1>
						</br></br></br>
					</div>
					<div class="gallery_f_inner row imageGallery1">
					
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
						

					</div>
			</div>	
</section>
<!--================End Home Gallery Area =================-->
