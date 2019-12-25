<?php
include "config/koneksi.php";
$pass=md5($_POST[password]);
$level=$_POST[level];
if ($level=='direktur')
{
$login=mysql_query("SELECT * FROM direktur
			WHERE username='$_POST[id_user]' AND password='$pass' AND level='$level'");
$cocok=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($cocok > 0){
	session_start();
	$_SESSION[namauser]     = $r[username];
  	$_SESSION[namalengkap]  = $r[nama_lengkap];
  	$_SESSION[passuser]     = $r[password];
  	$_SESSION[leveluser]    = $r[level];

	header('location:direktur/home');
	}
else {
echo "<script>window.alert('Username atau Password anda salah.');
        window.location=('home')</script>";
}
}

elseif ($level=='pegawai')
{
$login=mysql_query("SELECT * FROM pegawai
			WHERE username='$_POST[id_user]' AND password='$pass'");
$cocok=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($cocok > 0){
	session_start();
	$_SESSION[username]     = $r[username];
	$_SESSION[passuser]     = $r[password];
	$_SESSION[nama_lengkap] = $r[nama_lengkap];
	$_SESSION[no_telp]      = $r[no_telp];
	$_SESSION[email]        = $r[email];
	$_SESSION[alamat_lengkap] = $r[alamat_lengkap];

	header('location:pegawai/home');
	}
else {
echo "<script>window.alert('Username atau Password anda salah.');
        window.location=('home')</script>";
}
}

?>