<?php 
error_reporting(0);
  // Panggil semua fungsi yang dibutuhkan (semuanya ada di folder config)
	include "config/koneksi.php";
	include "config/fungsi_indotgl.php";
	include "config/class_paging.php";
	include "config/fungsi_combobox.php";
	include "config/library.php";
	include "config/fungsi_autolink.php";
	include "config/fungsi_badword.php";
	include "config/fungsi_kalender.php";  
    include "config/fungsi_rupiah.php";  
	include "config/fungsi_thumbuser.php";
	include "view/index.php"; 
?>
