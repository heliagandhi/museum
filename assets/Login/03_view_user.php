<?php
	//agar view user hanya bisa diakses setelah login
	session_start();
	
	if (empty($_SESSION['un']))
		header('Location:04_form_login.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
	<link href="p4/style.css" rel="stylesheet">
</head>
</head>
<body>
	<div id="container">
			<div id="top">
				<div id="logo" class="left">
					MUSEUM TANAH DAN PERTANIAN
				</div>
				<div id="menu" class="right">
					<ul>
						<li><a href="">Profil</a> </li>
						<li><a href="06_logout.php">Logout</a> </li>
					</ul>
				</div>
			<div class="clear"></div>
	</div>
	<div id="body">
		<div class="section">
			<h2>Selamat Datang Di Website Museum Tanah Dan Pertanian</h2>
			<h5 style="color: #04464f;">Di bawah ini adalah admin yang mengelola website museum</h5><br/>
			<?php
				include "00_koneksi.php";
				$q = "SELECT * FROM tbl_admin";
				$rslt = mysqli_query($kon, $q);
				$foldernya = "gambars";
		
				while ($row = mysqli_fetch_assoc($rslt)){
				echo "<img width='162' height='165' src='$foldernya\\".$row["nama_file_photo"]."'>";
			
				echo "<br/>".$row["user_name"]."<br/>";
				echo "<br/><hr/> <br/>";
				}
			?>
			<br /><br />
			<ul>
				<li><a href="Berita/lihat_data.php">Tabel Berita</a></li>
				<li><a href="Event/view_data.php">Tabel Event</a></li>
				<li><a href="Koleksi/view_data.php">Tabel Koleksi</a></li>
			</ul>
		</div>
	</div>
	
	
</body>
</html>