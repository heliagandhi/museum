
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/easing.min.js"></script>			
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/hoverIntent.js"></script>
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/superfish.min.js"></script>	
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/jquery.magnific-popup.min.js"></script>	
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/owl.carousel.min.js"></script>	
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/imagesloaded.pkgd.min.js"></script>
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/justified.min.js"></script>					
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/jquery.sticky.js"></script>
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/jquery.nice-select.min.js"></script>			
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/parallax.min.js"></script>		
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/mail-script.js"></script>	
			<script src="<?= base_url('assets/'); ?>assetsmuseum/js/main.js"></script>
			<script src="<?= base_url('assets/'); ?>assetsmuseum/ckeditor/ckeditor.js"></script>
			
		</body>
		<script> 
			$(document).ready(function(){
				$("#flip").click(function(){
					$("#panel").slideToggle("slow");
				});
			});
		</script>
		<script>
		        CKEDITOR.replace('editor', {
		            filebrowserUploadUrl: '../assetsmuseum/ckeditor/ck_upload.php',
		            filebrowserUploadMethod: 'form'
		        });
    		</script>	
		
		
		
	</html>



