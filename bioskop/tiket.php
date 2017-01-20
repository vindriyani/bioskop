<!DOCTYPE HTML>
<?php
  session_start();
  if(isset($_SESSION['userid'])) {
  header('location:tes.php'); }$namanya=$_SESSION["nama"];
?> 
<html>
<head>
<title>CINEMA XXI</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
		<!-----768px-menu----->
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<script type="text/javascript" src="js/jquery.mmenu.js"></script>
			<script type="text/javascript">
				//	The menu on the left
				$(function() {
					$('nav#menu-left').mmenu();
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
			<!--<div id="page">
					<div id="header">
						<a class="navicon" href="#menu-left"> </a>
					</div>
					<nav id="menu-left">
						<ul>
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="about.php">Coming Soon</a></li>
							<li><a href="services.php">Trailers</a></li>
							
							<li><a href="blog.php">MovieNews</a></li>
							<li><a href="contact.php">Tiket</a></li>
						</ul>
					</nav>
			</div>-->
		<!------start-768px-menu---->
			<div class="header_sub">
				<div class="h_menu">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">Coming Soon</a></li>
						<li><a href="services.php">Trailers</a></li>
						
						<li><a href="blog.php">MovieNews</a></li>
						<li><a href="tes.php">Tiket</a></li>
						<li><a href="cetak1.php">update profile</a></li>li>
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
					<div id="teks"><h2 align="center"><strong><em>Selamat Datang <?php echo "$namanya"; ?></em></strong><br><br>Silahkan Mengisi Form Berikut untuk Pesan Tiket</h2>

				<div class="get-intouch-grids">
				  <div class="get-intouch-left-address">
						<h4>Belum punya ID? Silahkan mendaftar  terlebih dahulu.</h4>
						<p>Gunakan	ID	dan	Password	dengan	bijak, jika terjadi penyalah gunaan terhadap ID anda, silahkan hubungi Admin.</p>
				  </div>
					
						<table border="1" cellpadding="8" cellspacing="0">           			
<!--<div id="teks"><h2>Selamat Datang <?php echo "$namanya"; ?><br><br>Silahkan Mengisi Form Berikut untuk Pesan Tiket</h2>-->

<form method="post" action="pesanan.php" name="formdaftar">
<center><img src="images/sheet.jpg" width="450px" height="350px"></center><br><br><br>
<table>
<tr><td>Pesan untuk hari</td> <td>:</td><td>
<select name="hari">
<option value="senin">senin</option>
<option value="selasa">selasa</option>
<option value="rabu">rabu</option>
<option value="kamis">kamis</option>
<option value="jumat">jum'at</option>
<option value="sabtu">sabtu</option>
<option value="minggu">minggu</option>
</select></td></tr>

<tr><td>Pilih tempat teater</td><td>:</td><td>
<select name="tempat">
<option value="Botanisquare Bogor">Botanisquare Bogor</option>
<option value="Pondok Indah Mall Jakarta">Pondok Indah Mall Jakarta</option>
<option value="Margo City Depok">Margo City Depok</option>
</select>
</tr>
<tr><td>Pilih judul film</td><td>:</td><td>
<select name="film">
<option value="pocong juga pocong">pocong juga pocong (HTM: 25000)</option>
<option value="twilight">breaking-down twilight (HTM: 25000)</option>
<option value="jhony english">jhony english (HTM: 25000)</option>
<option value="pengejar angin">pengejar angin (HTM: 25000)</option>
<option value="sang penari">sang penari (HTM: 25000)</option>
<option value="perfect house">perfect house (HTM: 25000)</option>
<option value="the rum diary">the rum diary(HTM: 25000)</option>
<option value="x-men">x men first class(HTM: 25000)</option>
<option value="kehormatan">kehormatan dibalik kerudung(HTM: 25000)</option>
</select></td></tr>
<tr><td>Pilih jam tayang</td><td>:</td><td>
<select name="jam">
<option value="12:30">12:30</option>
<option value="12:45">12:45</option>
<option value="13:00">13:00</option>
<option value="14:50">14:50</option>
<option value="15:10">15:10</option>
<option value="17:00">17:00</option>
<option value="19:30">19:30</option>
<option value="21:25">21:25</option>
<option value="21:55">21:55</option>
</select></td></tr>
<tr><td>Pilih sheet tempat duduk  </td><td>:</td><td><b>BARIS</b>&nbsp;:
<select name="baris"><option value="a">a</option>
<option value="b">b</option>
<option value="c">c</option>
<option value="d">d</option>
<option value="e">e</option>
<option value="f">f</option>
<option value="g">g</option>
<option value="h">h</option>
<option value="i">i</option>
<option value="j">j</option>
<option value="k">k</option>
<option value="a">l</option>>
</select>&nbsp;
<b>KOLOM</b>&nbsp;:<select name="kolom">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
</select>
</td></tr>
</table>

<table valign="right">
<tr><td>
<!---<button class="btn btn-primary btn-lg"><a href="pesanan.php">cetak</button></a>-->
<table valign="right"><tr><td><input type="submit" name="simpan" value="cetak"></td><td><input type="reset" value="batal"></td></tr>

<!--<td><input type="reset" value="batal"></td></tr>-->
</table><br>
  
</form>
</div>
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
				<!---<div class="map"></div>--->
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
<body>
</body>
</html>
