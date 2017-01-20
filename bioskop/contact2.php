<?php
  session_start();
  if(isset($_SESSION['userid'])) {
  header('location:contact3.php'); }
?> 
<html>
<head>
<title>CINEMA XXI</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
  <script type="text/javascript" src="js_validate/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="js_validate/jquery.js"></script>		
    <script src="js_validate/jquery.validate.min.js" type="text/javascript"></script>  
		<script type="text/javascript">
			$(document).ready(function(){
				$("#frm").validate({
					debug: false,
					rules: {
						user: "required",
						nama: "required",
						psw: "required",
						psw2: "required",
						email: "required",
						hp: "required",
						alamat: "required",						
					},
					messages: {
						user: "* Kosong",
						nama: "* Kosong",
						psw: "* Kosong",
						psw2: "* Kosong",
						email: "* Kosong",
						hp: "* Kosong",
						alamat: "* Kosong",						
					}
				});
			});
		</script>
		<!-----//768px-menu----->
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.php">
				<img src="images/lg.png" alt=""/>
				<h1>CINEMA XXI</h1>
				<div class="clear"> </div>
			 </a>
		</div>
		<div class="clear"> </div>
	</div>
</div>
</div>
<!-- start header -->
<div class="header_btm">
	<div class="wrap">
		<!------start-768px-menu---->
			<div id="page">
					<div id="header">
						<a class="navicon" href="#menu-left"> </a>
					</div>
					<nav id="menu-left">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.php">Coming Soon</a></li>
							<li><a href="services.php">Trailers</a></li>
							
							<li><a href="blog.php">MovieNews</a></li>
							<li><a href="tes.php">Tiket</a></li>
						</ul>
					</nav>
			</div>
		<!------start-768px-menu---->
			<div class="header_sub">
				<div class="h_menu">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">Coming Soon</a></li>
						<li><a href="services.php">Trailers</a></li>
						
						<li><a href="blog.php">MovieNews</a></li>
						<li><a href="tes.php">Tiket</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
	</div>
</div>
		<div class="header_bottom">
		</div>
		<!-----end-header-------->
		<!---start-getintouch---->
			<div class="get-intouch" id="contact">
				<div class="wrap">
					<h3>SILAHKAN ISI FORM BERIKUT</h3>
				<div class="get-intouch-grids">
				  <div class="get-intouch-left-address">
						<h4>Belum punya ID? Silahkan mendaftar  terlebih dahulu.</h4>
						<p>Gunakan	ID	dan	Password	dengan	bijak, jika terjadi penyalah gunaan terhadap ID anda, silahkan hubungi Admin.</p>
				  </div>
					
						<table border="1" cellpadding="8" cellspacing="0">
<form method="post" action="save_daftar.php" name="formdaftar" id="frm">
  

<table align="center">
<tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama" size="10">

<tr><td>User Name</td><td>:</td><td><input type="text" name="user" size="25"></td></tr>

<tr><td>Masukan Password</td><td>:</td><td><input type="password" name="psw" size="15">

<tr><td>Konfirmasi Password</td><td>:</td><td><input type="password" name="psw2" size="15"></td></tr>
<tr><td>Email</td><td>:</td><td><input type="text" name="email" size="20">
<br/><font color="#333333">contoh: reiyudha@gmail.com</font></td></tr>
<tr><td>No HP</td><td>:</td><td><input type="text" name="hp" size="18">
<br/><font color="#333333">contoh: 085719249131</font></td></tr>
<tr><td>Alamat</td><td>:</td><td><input type="text" name="alamat" size="35"></td></tr> 
<tr><td colspan="2"><input type="submit" name="submit" value="Daftar Sekarang"><input type="reset" value="Batal">
</td></tr>
                        </table>
						</form>
				        <p>
					      
				        <!-- aToolTip js -->
					      <script type="text/javascript" src="js/jquery.atooltip.js"></script>
					      <script type="text/javascript">
							$(function(){ 
								$('a.normalTip').aToolTip();
								}); 
						  </script>
		          </p>
				    <div class="clear"> </div>
				</div>
				</div>
				<div class="map"></div>
			</div>
			<!---//End-getintouch---->
			<!----start footer------>
			<div class="footer">
				<div class="wrap">
					<div class="footer-left">
					  <h3>TENTANG cinema xxi</h3>
						<p>XXI, merupakan kelompok bioskop terbesar di Indonesia yang memulai   kiprahnya di industri hiburan sejak tahun 1987. Lebih dari 28 tahun,   XXI berkomitmen untuk senantiasa memberikan pengalaman dan   kenikmatan nonton terbaik untuk masyarakat Indonesia. Sampai dengan   Agustus tahun ini, XXI memiliki total 848 layar tersebar di 35   kota di 155 lokasi di seluruh Indonesia. </p>
					</div>
					<div class="footer-right">
					  <div class="comments1">
					    <p>Selain menyajikan film-film hasil karya anak bangsa, XXI juga menayangkan film-film berkelas dunia. XXI terus mengikuti perkembangan teknologi dengan melengkapi   fasilitas-fasilitasnya seperti 2D dan 3D. Di tahun 2012, XXI  telah   menghadirkan pengalaman nonton dengan teknologi revolusioner yaitu IMAX   teater. Kini sudah ada lima teater IMAX yang dimiliki oleh XXI ,   yang berlokasi di Mal Gandaria City, Mal Kelapa Gading, Summarecon Mal   Serpong dan yang paling terbaru ada di Tunjungan 5 Surabaya.</p>
					  </div>
						<div class="comments1"></div>
				  </div>
					<div class="clear"> </div>	
				</div>
			</div>
			<div class="copy">
				       <p></p>
			  </div>
</body>
</html>