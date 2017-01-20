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
					  <h3 class="heading">TRAILER captain america: civil war</h3>
							<h3 class="heading">
  <center>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="320" id="FLVPlayer">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="scale" value="noscale">
      <param name="salign" value="lt">
      <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/civil&amp;autoPlay=false&amp;autoRewind=false" />
      <param name="swfversion" value="8,0,0,0">
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="640" height="320">
        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="scale" value="noscale">
        <param name="salign" value="lt">
        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/civil&amp;autoPlay=false&amp;autoRewind=false" />
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
							   <p>Ketegangan meningkat antara Steve Rogers (Chris Evans) dan The Avengers   lainnya ketika pemerintah memutuskan untuk mengatur semua kegiatan   manusia super.Stark, (Robert Downey Jr.) dikenal sebagai Iron   Man, yakin bahwa pahlawan super seharusnya diakui keberadaannya,   sementara Rogers meyakini prinsip-prinsip kebebasan dan berpegang pada   ketidakpercayaannya kepada pemerintah. Serangkaian peristiwa   menempatkan The Avengers pada tekanan terutama persahabatan mereka   termasuk saat Steve bertemu seorang teman lama yang sedang bermasalah,   Bucky Barnes (Sebastian Stan). Bucky dituduh melakukah kejahatan dan   hidupnya dalam bahaya. Steve membelanya tapi apakah Avengers yang lain   juga demikian?</p>
				  </div>
		      </div>
              
              <div class="wrap">
					<div class="about">
					  <h3 class="heading">TRAILER ada apa dengan cinta 2</h3>
							<h3 class="heading">
  <center>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="320" id="FLVPlayer2">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="scale" value="noscale">
      <param name="salign" value="lt">
      <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/aadc2&amp;autoPlay=false&amp;autoRewind=false" />
      <param name="swfversion" value="8,0,0,0">
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="640" height="320">
        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="scale" value="noscale">
        <param name="salign" value="lt">
        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/aadc2&amp;autoPlay=false&amp;autoRewind=false" />
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
							   <p>Cinta dan Rangga, dua orang remaja yang saling mencintai terpisahkan 14   tahun yang lalu. Kini, setelah bertahun-tahun, Rangga dan Cinta   mendapatkan kesempatan untuk kembali bertemu. Akankah ini menjadi   kesempatan kedua untuk mereka kembali bersama? Apalagi hidup mereka   tidak lagi sesederhana dulu. Ada apa lagi dengan Cinta, dan Rangga? Bagaimana kelanjutan kisah mereka?</p>
			    </div>
		      </div>
                
                <div class="wrap">
				  <div class="about">
					  <h3 class="heading">TRAILER batman v superman: dawn of justice</h3>
							<h3 class="heading">
  <center>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="320" id="FLVPlayer3">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="scale" value="noscale">
      <param name="salign" value="lt">
      <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/bvs&amp;autoPlay=false&amp;autoRewind=false" />
      <param name="swfversion" value="8,0,0,0">
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="640" height="320">
        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="scale" value="noscale">
        <param name="salign" value="lt">
        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/bvs&amp;autoPlay=false&amp;autoRewind=false" />
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
						     <p>Pasca Metropolis hancur karena pertarungan Superman dan General Zod,   dunia terbelah menjadi dua. Satu yang mendukung Superman sebagai harapan   dan satu lagi yang menyebutnya sebagai sebuah ancaman. Dunia berdebat   jenis pahlawan apa yang dibutuhkan oleh masyarakat. Sementara   Batman dan Superman bertarung, teror diciptakan oleh Lex Luthor (Jesse   Eisenberg). Kini Superman dan Batman harus mengesampingkan perselisihan   mereka. Bersama Wonder Woman (Gal Gadot) keduanya berusaha menghentikan   rencana jahat Lex Luthor dan Doomsday menghancurkan Metropolis.</p>
			    </div>
		      </div>
              <div class="wrap">
				<div class="about">
					  <h3 class="heading">TRAILER my stupid boss</h3>
							<h3 class="heading">
  <center>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="320" id="FLVPlayer4">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="scale" value="noscale">
      <param name="salign" value="lt">
      <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/boss&amp;autoPlay=false&amp;autoRewind=false" />
      <param name="swfversion" value="8,0,0,0">
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="640" height="320">
        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="scale" value="noscale">
        <param name="salign" value="lt">
        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/boss&amp;autoPlay=false&amp;autoRewind=false" />
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
						   <p>Cerita tentang hubungan kerja antara Boss yang absurd dengan   karyawannya. &ldquo;Bossman&rdquo; (Reza Rahadian) adalah orang Indonesia yang   memiliki perusahaan di Kuala Lumpur. Perusahaannya itu tidak   memiliki sistim dan aturan yang jelas. Dan biang kerok dari semua   kekacauan itu justru Bossman sendiri. Tapi Bossman memiliki semboyan   BOSSMAN ALWAYS RIGHT! Dan jika sudah ada maunya harus terwujud.   Prinsipnya IMPOSIBLE WE DO MIRACLE WE TRY. Diana pun (Bunga   Citra Lestari) terpaksa harus stuck dalam hubungan kerja yang chaos   setiap saat. Kesabaran Diana diuji habis-habisan menghadapi ulah Bossnya   yang ajaib itu. </p>
			    </div>
		      </div>
              <div class="wrap">
				<div class="about">
					  <h3 class="heading">TRAILER SIngle</h3>
							<h3 class="heading">
  <center>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="320" id="FLVPlayer5">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="scale" value="noscale">
      <param name="salign" value="lt">
      <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/single&amp;autoPlay=false&amp;autoRewind=false" />
      <param name="swfversion" value="8,0,0,0">
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="640" height="320">
        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="scale" value="noscale">
        <param name="salign" value="lt">
        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/single&amp;autoPlay=false&amp;autoRewind=false" />
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
						   <p>Ebi adalah seorang anak muda naif yang belum mempunyai pekerjaan. Ebi   bahkan masih sering meminta uang dari ibunya setiap kali ibunya datang   ke Jakarta.Ebi juga seorang single forever atau jomblo dari lahir yang   belom pernah pacaran. Ini karena setiap kali Ebi mendekati perempuan,   Ebi selalu aja ditolak. Intinya, kehidupan Ebi layak untuk dikasihani.</p>
			    </div>
		      </div>
              <div class="wrap">
				<div class="about">
					  <h3 class="heading">TRAILER zootopia</h3>
							<h3 class="heading">
  <center>
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="320" id="FLVPlayer1">
      <param name="movie" value="FLVPlayer_Progressive.swf" />
      <param name="quality" value="high">
      <param name="wmode" value="opaque">
      <param name="scale" value="noscale">
      <param name="salign" value="lt">
      <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/zoo&amp;autoPlay=false&amp;autoRewind=false" />
      <param name="swfversion" value="8,0,0,0">
      <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
      <param name="expressinstall" value="Scripts/expressInstall.swf">
      <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
      <!--[if !IE]>-->
      <object type="application/x-shockwave-flash" data="FLVPlayer_Progressive.swf" width="640" height="320">
        <!--<![endif]-->
        <param name="quality" value="high">
        <param name="wmode" value="opaque">
        <param name="scale" value="noscale">
        <param name="salign" value="lt">
        <param name="FlashVars" value="&amp;MM_ComponentVersion=1&amp;skinName=Clear_Skin_1&amp;streamName=Video/zoo&amp;autoPlay=false&amp;autoRewind=false" />
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
						   <p>Zootopia adalah sebuah nama kota yang ditinggali beragam jenis hewan.   Bermacam-macam hewan dari beragam jenis dan family hidup di Zootopia.   Adalah Judy Hoops, seekor Kelinci yang bekerja sebagai Polisi dan   bertekad untuk membuktikan dirinya layak bertugas sebagai penegak hukum.</p>
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
				       <p>Pemrograman Internet </p>
			  </div>
<script type="text/javascript">
swfobject.registerObject("FLVPlayer");
swfobject.registerObject("FLVPlayer2");
swfobject.registerObject("FLVPlayer3");
swfobject.registerObject("FLVPlayer4");
swfobject.registerObject("FLVPlayer5");
swfobject.registerObject("FLVPlayer1");
</script>
</body>
</html>