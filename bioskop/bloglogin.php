<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
session_start();
if ( !isset($_SESSION['userid']) ) {
    header('location:contact4.php'); 
}
else { 
    $usr = $_SESSION['userid']; 
}
require_once('connect.php');
$query = mysql_query("SELECT * FROM anggota WHERE userid = '$usr'");
$hasil = mysql_fetch_array($query);
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
		<div class="text">
		  <p><?php 
echo "<h2>Selamat Datang, $usr</h2>"; 
echo "Nama Lengkap : " . $hasil['nama'] . "<br />";
echo "Email : " . $hasil['email'];
 ?>  
<a href="contact4.php"><b>Logout</b></a></p>
		</div>
		  <p></p>
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
							<li class="active"><a href="indexlogin.php">Home</a></li>
							<li><a href="aboutlogin.php">Coming Soon</a></li>
							<li><a href="serviceslogin.php">Trailers</a></li>
							
							<li><a href="bloglogin.php">MovieNews</a></li>
							<li><a href="contactlogin.php">Tiket</a></li>
						</ul>
					</nav>
			</div>
		<!------start-768px-menu---->
			<div class="header_sub">
				<div class="h_menu">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="aboutlogin.php">Coming Soon</a></li>
						<li><a href="serviceslogin.php">Trailers</a></li>
					
					  <li><a href="bloglogin.php">MovieNews</a></li>
						<li><a href="contactlogin.php">Tiket</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
	</div>
</div>
<!--------start-blog----------->
<div class="blog">
	<div class="main">
		  	<div class="wrap">
			 	<div class="single-top">
				 <div class="wrapper_single">
					  <div class="wrapper_top">
					    <div class="content span_2_of_single">
				   		  <h5 class="blog_title"><a href="">Jesse Eisenberg Akan Bergabung di Justice League</a></h5>
								<div class="content">
									<div class="span-1-of-1">
										<a href=""><img class="m_img"  src="images/news1.jpg" alt=""/></a>
									</div>
									<div class="span-1-of-2">
						 				<p>Jesse Eisenberg resmi bergabung di Justice League. Aktor Now You See Me (2013) itu akan kembali melakoni karakter Lex Luthor yang ia mainkan sebelumnya di Batman v Superman: Dawn of Justice (2016).</p>
						 				<p>"Saya seperti sedang menunggu," ujar Eisenberg santai seperti dikutip dari Aceshowbiz. "Mereka baru saja mulai syuting Justice League, jadi saya sedang menunggu untuk masuk ke sana," lanjut pemeran Mark Zuckerberg di The Social Network (2010) itu. Film yang kembali disutradarai oleh Zack Snyder ini sudah memulai produksinya sejak April lalu. </p>
									</div>
						 			<div class="clear"> </div>
								</div>
					    </div>
						<div class="clear"> </div>
					</div>
					<div class="wrapper_top">
					  <div class="content span_2_of_single">
			   		    <h5 class="blog_title"><a href="">My Stupid Boss Bikin Ramai Bioskop dan Media Sosial</a></h5>
								<div class="content">
									<div class="span-1-of-1">
										<a href=""><img class="m_img"  src="images/news2.jpg" alt=""/></a>
									</div>
									<div class="span-1-of-2">
						 				<p>Kesuksesan film My Stupid Boss di bioskop ternyata 'menular' ke jejaring media sosial. Trailer layar lebar tersebut ditonton sebanyak 4,5 juta kali dan mendapat 100 ribu like dari fanpage Facebooknya. Film yang dibintangi Reza Rahadian dan Bunga Citra Lestari ini berhasil mencuri perhatian publik lewat penampilan apik pemeran utamanya serta mengadaptasi kisah lucu dari buku laris karya Chaos@work. Di film tersebut, Reza yang memerankan Bossman rela merubah penampilan menjadi lebih gemuk dan berambut tipis agak botak..</p>
						 				<p>”Terima kasih telah mengunjungi dan menonton video trailer di halaman resmi Facebook My Stupid Boss, serta memberikan like,” ujar Frederica, Produser Falcon Pictures.</p>
									</div>
						 			<div class="clear"></div>
								</div>
					  </div>
						<div class="clear"></div>
					</div>
				
					<div class="wrapper_top">
					  <div class="content span_2_of_single">
			   		    <h5 class="blog_title"><a href="">Tundukkan Dunia, Persembahan BCL untuk 3 Srikandi</a></h5>
								<div class="content">
									<div class="span-1-of-1">
										<a href=""><img class="m_img"  src="images/news3.jpg" alt=""/></a>
									</div>
									<div class="span-1-of-2">
						 				<p>Keberadaan soundtrack dalam sebuah film terbilang penting. Tak hanya menjadi sekedar unsur pelengkap, melainkan mampu mendorong dan mengiringi kesuksesan layar lebarnya. Sebut saja ada My Heart Will Go On (Titanic) untuk skala internasional dan Cinta Sejati (Habibie Ainun) di dalam negeri. Keduanya menjadi salah satu bukti, theme song bisa mempermudah penonton untuk menangkap pesan yang ingin disampaikan.</p>
						 				<p>Langkah inilah yang tampaknya coba dilakukan produksi terbaru MVP Pictures, 3 Srikandi. Bekerjasama dengan PT Aquarius Musikindo, mereka merilis soundtrack berjudul 'Tundukkan Dunia' yang dilantunkan oleh salah satu pemeran utamanya, Bunga Citra Lestari (BCL). Menurut bintang My Stupid Boss (2016) itu, menyanyikan lagu ciptaan Andi Rianto dan Pak Iin (Arie SW) merupakan pengalaman baru untuknya.</p>
									</div>
						 			<div class="clear"></div>
								</div>
					  </div>
						<div class="clear"> </div>
					</div>		
		</div>
		<div class="rsidebar span_1_of_3">
		  <div class="social_2">	
           	<h4>Follow Us</h4>
	           <ul>	
				    <li class="facebook"><a href="#"><span> </span></a></li>
				    <li class="twitter"><a href="#"><span> </span></a></li>	 	
					<li class="google"><a href="#"><span> </span></a></li>
			  </ul>
		 	  </div>
               <div class="email_box">
					<form>
					  <div class="button"></div>
				    </form>
			 	</div>
               <div class="popularpost">
	        	   <h4>Promo Telkomsel T-Cash TAP 15.000/Tiket Setiap Senin</h4>
		        	<div class="image_b">
		        		<a href="#"><img src="images/pop.jpg"/></a>
		        	</div>
		        	<p>Periode : 8 Juni 2015 s/d 6 Juni 2016
Hari Berlakunya Program : Setiap Senin</p>
                 <p>List Bioskop</p>
                 <p>1. Anggrek XXI</p>
<p>2. Emporium Pluit XXI</p>
<p>3. Gading XXI</p>
<p>4. Gandaria XXI</p>
<p>5. Kasablanka XXI</p>

                 
		        </div>
		        <div class="recentpost"> </div>
		        <div class="tags">
		        	<h4></h4>
		        	<ul>
		        		
		        		<div class="clear"> </div>
		        	</ul>
		        </div>
		</div>
		
		<div class="clear"> </div>
	</div>	
	<div class="pages"> </div>
<!----//End-content---->
	</div>
</div>	
</div>	
<!--------//end-blog----------->
<div class="footer"><div class="wrap">
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
				</div></div>
			<div class="copy">
				       <p>© Tugas IMK_2016/Diyan Adiatma</p>
			  </div>
	</body>
</html>