<?php
include "configurasi/koneksi.php";
$nama=$_POST["nama"];
$user=$_POST["user"];
$psw=$_POST["psw"];
$psw2=$_POST["psw2"];
$email=$_POST["email"];
$hp=$_POST["hp"];
$alamat=$_POST["alamat"];

if($psw2!=$psw){
echo"<script>alert('Konfirmasi password salah');
document.location.href='contact2.php'; </script>\n";
}

		if($user=="" || $psw=="" || $psw2=="" || $nama=="" || $email=="" || $hp=="" || $alamat=="" ){
			echo"<script>alert('Data yang anda masukkan tidak lengkap, silahkan lengkapi data anda');
		document.location.href='contact2.php'; </script>\n";
}
else
		$psw=md5($_POST["psw"]);
			{$input="insert into user(user,psw,nama,email,hp,alamat) VALUES('$user','$psw','$nama','$email','$hp','$alamat')";
			$hasil=mysql_query($input);

			if ($hasil)
{
echo"<script>alert('Pendaftaran Berhasil,Cek Data Anda');
document.location.href='berhasil-daftar.php?id=$user&pas=$psw2'; </script>\n";}
else
{echo"<script>alert('Pendaftaran Gagal');
document.location.href='contact2.php'; </script>\n";}
}


?>
