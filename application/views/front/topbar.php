
		<body>

			  <header id="header" id="home">
			  	<div class="container header-top">
			  		
			  	</div>
			  	
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
						<a href="index.html" style="color:white"><img src="<?= base_url('assets/'); ?>assetsmuseum/img/lol/lol.png" alt="" title="" width="70px" height="70px" /> Museum Tanah & Pertanian</a>
						
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
					        <?php if(isset($active_dashboard)): ?>
	                            <li class="menu-active"><a href="<?= base_url('front/index'); ?>" style="color:#f2b597">Beranda</a></li>
	                        <?php else: ?>
	                           <li class="menu-active"><a href="<?= base_url('front/index'); ?>">Beranda</a></li>
	                        <?php endif; ?>
				          
	                        <?php if(isset($active_profile)): ?>
	                            <li><a href="<?= base_url('front/profile'); ?>" style="color:#f2b597">Profil</a></li>
	                        <?php else: ?>
	                          <li><a href="<?= base_url('front/profile'); ?>">Profil</a></li>
	                        <?php endif; ?>
				          	
				          	<?php if(isset($active_berita)): ?>
	                          <li><a href="<?= base_url('front/berita'); ?>" style="color:#f2b597">Berita</a></li>
	                        <?php else: ?>
	                          <li><a href="<?= base_url('front/berita'); ?>">Berita</a></li>
	                        <?php endif; ?>

	                        <?php if(isset($active_event)): ?>
	                          <li><a href="<?= base_url('front/event'); ?>" style="color:#f2b597">Event</a></li>
	                        <?php else: ?>
	                          <li><a href="<?= base_url('front/event'); ?>">Event</a></li>
	                        <?php endif; ?>
						  

						   <?php if(isset($active_fasilitas)): ?>
	                          <li><a href="<?= base_url('front/fasilitas'); ?>" style="color:#f2b597">Fasilitas</a></li>
	                        <?php else: ?>
	                          <li><a href="<?= base_url('front/fasilitas'); ?>">Fasilitas</a></li>
	                        <?php endif; ?>
							
							
						  	
						  	<?php if(isset($active_pesan)): ?>
	                          <li><a href="<?= base_url('front/pesan'); ?>" style="color:#f2b597">Pesan</a></li>
	                        <?php else: ?>
	                          <li><a href="<?= base_url('front/pesan'); ?>">Pesan</a></li>
	                        <?php endif; ?>
							
							<li class="menu-has-children"><a href="#">Koleksi</a>
				            <ul>
				              <li><a href="#">Museum Tanah</a></li>
				              <li><a href="#">Galeri Pangan</a></li>
				              <li><a href="#">Galeri Kebijakan</a></li>
							  <li><a href="#">Galeri Pertanian Masadepan</a></li>
							  <li><a href="#">Galeri Peternakan</a></li>
							  <li><a href="#">Buku Antiquariat</a></li>
				            </ul>
							</li>	
							
							<li><a href="#">Reserfasi</a></li>
				          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->