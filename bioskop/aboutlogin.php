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
		<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
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
						<li class="active"><a href="indexlogin.php">Home</a></li>
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
		<!-----end-header-------->
		<!----start-content--->
<div class="content_1">
				<div class="wrap">
					<div class="about">
				<div class="about-top">
					<div class="col span_1_of_about">
							<h3 class="heading">COMING SOON</h3>
							<div class="section group">
								<div class="grid_1_of_4 images_1_of_4">
						 			<div class="image"><a href="#"><img src="images/prs1.jpg" height="195"></a></div>
						 			<h4><a href="#">Teenage Mutant Ninja Turtles: Out Of The Shadows</a> </h4>
						 			<p>Kemunculan sebuah obat bernama Purple Ooze, yang mampu mengubah manusia biasa menjadi mutan berwujud binatang, meneror warga New York. </p>
								</div>
							  <div class="grid_1_of_4 images_1_of_4">
									<div class="image"><a href="#"><img src="images/im1.jpg" height="195"></a></div>
								  <h4><a href="#">Finding Dory</a></h4>
							    <p>&nbsp;</p>
							    <p>Usai perjalanannya bersama Nemo (Albert Brooks), kali ini giliran Dory   (Ellen DeGeneres) yang akan pergi berpetualang untuk mencari   keluarganya. </p>
							  </div>
								<div class="clear"> </div>
					  </div>
					</div>
					<div class="col span_1_of_about1">
						<h3 class="heading">popular movie</h3>
						<ul class="comments-custom unstyled">			
					      <li class="comments-custom_li"><img src="images/7.jpg" width="268" height="282"></li>
					      <li class="comments-custom_li"></li>
							<li class="comments-custom_li"></li>
					</ul>
				</div>
					<div class="clear"> </div>
			</div>
							<h3 class="heading">TRAILER teenage mutant ninja turtles: out of the shadows</h3>
							<h3 class="heading">
  <center><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="360" id="FLVPlayer">
    <param name="movie" value="FLVPlayer_Progressive.swf" />
    <param name="quality" value="high">
    <param name="wmode" value="opaque">
    <param name="scale" value="noscale">
    <param name="salign" value="lt">
    <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/ninja&amp;autoPlay=false&amp;autoRewind=false" />
    <param name="swfversion" value="8,0,0,0">
    <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
    <param name="expressinstall" value="Scripts/expressInstall.swf">
    <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
    <!--[if !IE]>-->
    <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="640" height="360">
      <!--<![endif]-->
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="scale" value="noscale">
      <param name="salign" value="lt">
      <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/ninja&amp;autoPlay=false&amp;autoRewind=false" />
      <param name="swfversion" value="8,0,0,0">
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
      <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
      
      <!--[if !IE]>-->
      </object>
    <!--<![endif]-->
  </object></center>
					  </h3>
							<h5>SINOPSIS</h5>
							   <p>Kemunculan sebuah obat bernama Purple Ooze, yang mampu mengubah manusia biasa menjadi mutan berwujud binatang, meneror warga New York. Terlebih lagi, kota ini juga terancam dengan kedatangan alien dari dimensi lain yang datang membawakan kehancuran kepada setiap orang disana.</p>
							   <p>4 kura - kura jagoan, Raphael (Alan Ritchson), Michelangelo (Noel Fisher), Leonardo (Johnny Knoxville), dan Donatello (Jeremy Howard) kembali beraksi, bersama dengan April O'Neil (Megan Fox) dan Vernon Venwick (Will Arnett), mereka berusaha menyelamatkan New York dari ancaman yang ada.</p>
				  </div>
		      </div>
              
              <div class="wrap">
					<div class="about">
					  <h3 class="heading">TRAILER finding dory</h3>
							<h3 class="heading">
  <center>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="360" id="FLVPlayer1">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="scale" value="noscale">
      <param name="salign" value="lt">
      <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/finding&amp;autoPlay=false&amp;autoRewind=false" />
      <param name="swfversion" value="8,0,0,0">
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="640" height="360">
        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="scale" value="noscale">
        <param name="salign" value="lt">
        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/finding&amp;autoPlay=false&amp;autoRewind=false" />
        <param name="swfversion" value="8,0,0,0">
        <param name="expressinstall" value="Scripts/expressInstall.swf">
        <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
        <div>
          <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
          <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
        </div>
        <!--[if !IE]>-->
      </object>
      <!--<![endif]-->
    </object>
  </center>
					  </h3>
					  <h5>SINOPSIS</h5>
							   <p>Usai perjalanannya bersama Nemo (Albert Brooks), kali ini giliran Dory   (Ellen DeGeneres) yang akan pergi berpetualang untuk mencari   keluarganya. Ikan biru pelupa itu tiba-tiba ingat akan kenangan masa   kecilnya, yaitu tentang permata dari Teluk Morro, California. Bagaimana perjalanan dua sahabat ikan itu? Akankah Nemo bisa membantu Dory untuk bertemu kembali dengan keluarganya?</p>
			    </div>
		      </div>
                
  
  <div class="clear"></div>
</div>
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
<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
swfobject.registerObject("FLVPlayer1");
</script>
</body>
</html>