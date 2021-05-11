<?php
	session_start(); // di setiap halaman, akan dikenali meskipun pindah halaman
	$a = $_POST['u'];
	$b = ($_POST['p']);
	
	$q = "SELECT * FROM `tbl_admin` where user_name='$a' AND password='$b'";
	
	include "00_koneksi.php";
		
	$result = mysqli_query($kon, $q);
	
	if (mysqli_num_rows($result)){
		$_SESSION['un'] = $a; // tanda user sudah login dan bisa akses
		header('Location:../Berita/berita.php');
	}
	else
		header('Location:04.1_form_login_gagal.php');
?>