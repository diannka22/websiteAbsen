<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="styleadmin.css">
</head>
<body bgcolor="brown">
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
<div class="rpl"><font size="5"><strong><b><i>HALLO! ADMIN SMK NEGERI 9 SEMARANG</i></a></b></strong></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<font size="3" font color="black"><b>
			<a href="list-siswa.php">ABSEN DISINI</a></font></b></div>
		    <div class="tb"><font color="white"><center>WEB ABSENSI SMKN 9 SEMARANG</div></font></center>
		 	<center>
		 	<br>
			 <br>
			 <br>
			 <br>
		 		<div class="SelamatDatang"><center><font color="white" font size="4">Selamat Datang</font></center>
		 		</div>
		 		<br>
		 		<br>
		 		<div class="kotak">
		    	<tr>
		    		<td>
		    			<h1 align="center"><font color="black" font size="5"><b>
		    				Selamat Datang Admin 
							<br>Presensi Online SMK Negeri 9 Semarang
		    				<br>
		    				<br>
		    				<img src="logo.png" width="200" height="230">
		    				<br>
		    				By Dian ika sari </h1></font></b>
		    	</td>
		      </tr>
		    </div>
		    <br>
		    <br>
    <div class="tuku"><center><font color="white">Didik Sri Purwdi</font></center></div>
	<br>
	<br>
	<br>
	<br>
	<div class="cr"><center><font color="white">copyright@diannika_</font></center></div>
	<br>
	<br>
	<br>
	<div class="rpll"><font size="3" font color="black"><a href="logout.php">LOGOUT</a></font></div>
</body>
</html>