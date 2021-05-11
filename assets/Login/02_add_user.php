<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$a = $_POST["un"]; //nama
	$b = ($_POST["psw"]);

	$d = $_FILES["nfp"]["name"]; //download.jpg
	$nftemp = $_FILES["nfp"]["tmp_name"];
	$pecah = explode("." ,$d); //pecah[0] = download, pecah[1] = jpg
	$nfbaru = "pp_".$a.".".$pecah[1];

	//var_dump($_FILES)["nfp"]);

	//memasukkan data ke DB
	$q = "INSERT INTO `db_museum`.`tbl_admin`
	(`id`, `user_name`, `password`, `nama_file_photo1`)
		VALUES
		(NULL, '$a', '$b', '$nfbaru')";

		include "00_koneksi.php";
		mysqli_query($kon,$q);
		//mengupload ke server
			$folder_target = "gambars";
			move_uploaded_file($nftemp, $folder_target.'\\'.$nfbaru);
	?>
		<script>
			alert("Registrasi berhasil");
			window.location = '../Login/04_form_login.php';
		</script>
		
	
	<script type="text/javascript" src="../jquery-3.3.1.min.js"></script>
</body>
</html>