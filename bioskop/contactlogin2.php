<?php
  session_start();
  if($_SESSION['LOGIN'] != 'OK'){
  header('location: tes.php');
  }
  $namanya=$_SESSION["nama"];
?>

<?php 
include"connect.php";
$id=$_GET['id'];
$q1="select * from pemesanan where no=$id+1;";            
$q2=mysql_query($q1);
$data=mysql_fetch_array($q2);
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
		  <p><a href="tes.php"><b>Logout</b></a></p>
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
			<div class="header_sub">
				<div class="h_menu">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">Coming Soon</a></li>
						<li><a href="services.php">Trailers</a></li>
						
					  <li><a href="blog.php">MovieNews</a></li>
						<!--<li><a href="tes.php">Tiket</a></li>-->
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
					<h3>SELAMAT PEMESANAN TIKET ANDA BERHASIL</h3>
				<div class="get-intouch-grids">
				  <div id="teks">
                    <h2>&nbsp;</h2>
<?php 
$user=$_SESSION["username"];
$q1="select * from user where user='$user';";
$q2=mysql_query($q1);
$dataa=mysql_fetch_array($q2);
$_SESSION["NO"]=$data['no'];
$namanya=$_SESSION["nama"];
$a=crc32($data['no']);
?>

<form action="./pdf/print_pdf.php" method="POST">
<fieldset></legend>
  	   <table width="100%">
    <tr><td colspan="3"><strong><u>DATA <?php echo strtoupper($namanya); ?></u></strong></td></tr>  	  
	  <tr><td>Nama</td><td>:</td><td><?php echo $dataa['nama']; ?></td></tr>
    <tr><td>User Name</td><td>:</td><td><?php echo $dataa['user']; ?></td></tr>	  
	  <tr><td>email</td><td>:</td><td><?php echo $dataa['email'];?></td></tr>
	  <tr><td>No HP</td><td>:</td><td><?php echo $dataa['hp'];?></td></tr>    
	  <tr><td>Alamat</td><td>:</td><td><?php echo $dataa['alamat'];?></td></tr>  
	  <tr><td colspan="3"><strong><br><u>JUDUL FILM</u></strong></td></tr>
	  <tr><td>Theater</td><td>:</td><td> <?php echo $data['tempat']; ?></td></tr>
	  <tr><td>Judul</td><td>:</td><td> <?php echo $data['judul']; ?></td></tr>
	  <tr><td>Hari</td><td>:</td><td> <?php echo $data['hari']; ?></td></tr>
	  <tr><td>Waktu</td><td>:</td><td><?php echo $data['jam'];?></td></tr>
	  <tr><td>Kursi</td><td>:</td><td><?php echo $data['sheet'];?></td></tr>     
	  <tr><td colspan="2"></td><td><b>**Silahkan Tunjukkan Formulir Ini Untuk Menukarkan Tiket.</b></td></tr>
	  </table>
      <h1>&nbsp;</h1>
	  <input type="submit" value="Cetak Tiket">
</fieldset>	  
    </form>	
</div>

					<!-- aToolTip js -->
						<script type="text/javascript" src="js/jquery.atooltip.js"></script>
						<script type="text/javascript">
							$(function(){ 
								$('a.normalTip').aToolTip();
								}); 
						</script>
					<div class="clear"> </div>
				</div>
				</div>
				<div class="map"></div>
			</div>
			<!---//End-getintouch---->
			<!----start footer------>
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
				       <p></p>
			  </div>
</body>
</html>