<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Berita terkini</h1>
								
							</div>
						</div>
					</div>					
					<div class="row">
						<?php
							foreach ($terkini as $t):
							$tanggal1 = $t['tgl_berita'];
						?>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img style="width: 255px; height: 170px;"class="img-fluid" src="<?= base_url('assets/gambars/berita/').$t['gambar']; ?>" alt="" >								
							</div>
							<p class="date">
								<?php echo date("d/m/Y", strtotime($tanggal1)); ?>
							</p>
							<a href="<?= base_url('front/isi1/berita/').$t['id_berita']; ?>"><h4><?= $t['jdl_berita']; ?></h4></a>
							<p>
							
							</p>
							<div class="meta-bottom d-flex justify-content-between">
								<!--<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>-->
							</div>									
						</div>
						<?php
							endforeach;
						?>
												
					</div>
				</div>	
			</section>
			<!-- End blog Area -->