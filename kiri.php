<?php
if ($_GET[module]=='home'){
  $sql=mysql_query("SELECT * FROM statis WHERE halaman='home'");
  $r=mysql_fetch_array($sql);
    echo "<div class='post_title'>$r[judul]</div>
          <div class='text_area'>$r[detail]</div>";      
}

elseif ($_GET[module]=='profilkami'){
   $sql=mysql_query("SELECT * FROM statis WHERE halaman='profil'");
  echo "<table><tr>";
  $r=mysql_fetch_array($sql);
    echo "
				<div class='post_title'>$r[judul]</div>
				<div class='text_area'>$r[detail]</div>";
	echo "</tr></table><br />";
}

elseif ($_GET[module]=='semuaberita'){
  $p      = new Paging2;
  $batas  = 3;
  $posisi = $p->cariPosisi($batas);
  $sql=mysql_query("select * from berita order by id_berita DESC LIMIT $posisi,$batas");
  while($r=mysql_fetch_array($sql)){
	  $tgl = tgl_indo($r[tanggal]);
      $isi_berita = nl2br($r[isi_berita]); 
      $isi = substr($isi_berita,0, 590); 
      $isi = substr($isi_berita,0,strrpos($isi," "));
	  
	  $jmldata     = mysql_num_rows(mysql_query("SELECT * FROM berita"));
	  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
	  $linkHalaman = $p->navHalaman($_GET[halberita], $jmlhalaman);
		echo "<table><tr>
                	<div class='post_title'><a href=berita-$r[id_berita]-$r[judul_seo].html>$r[judul]</a></div>
					 <div class='text_area'><span style='color:blue'>$r[hari], $tgl - $r[jam] WIB, oleh Administrator </span><br/> ";
		 	if ($r[gambar]!=''){
				echo "<span class=image><img src='foto_berita/small_$r[gambar]' width=145 style='margin-right:15px;'></span>";
			}else{
				echo "<span class=image><img src='foto_berita/blank.png' width=145 style='margin-right:15px;'></span>";
			}
				echo "$isi ... <a href=berita-$r[id_berita]-$r[judul_seo].html>Baca Selanjutnya</a></div></tr>";
	 }
		echo "</table>";
		echo "Halaman : $linkHalaman <br/><br/>";
}

elseif ($_GET[module]=='detailberita'){
	$detail=mysql_query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
	$d   = mysql_fetch_array($detail);
	$tgl = tgl_indo($d[tanggal]);
	$baca = $d[dibaca]+1;
	echo "<div class=post_title>$d[judul]</div>";
	echo "<div class=text_area><span style='color:blue'>$d[hari], $tgl - $d[jam] WIB, Oleh : Administrator </span><br />";
		 	if ($d[gambar]!=''){
				echo "<span class=image><img src='foto_berita/$d[gambar]' width=220 style='margin-right:15px;'></span>";
			}else{
				echo "<span class=image><img src='foto_berita/blank.png' width=220 style='margin-right:15px;'></span>";
			}
 	$isi_berita=nl2br($d[isi_berita]); 
	echo "$isi_berita </div>";	 		  

  mysql_query("UPDATE berita SET dibaca=$d[dibaca]+1 
              WHERE id_berita='$_GET[id]'"); 
}

elseif ($_GET[module]=='analisa'){
	include "analisa.php";
}

elseif ($_GET[module]=='analisa1'){
	include "analisa1.php";
}

elseif ($_GET[module]=='analisa2'){
	include "analisa2.php";
}

elseif ($_GET[module]=='simpan'){
	include "simpan.php";
}

elseif ($_GET[module]=='hasil'){
  $sql=mysql_query("SELECT * FROM analisa");
  $jumlah=mysql_num_rows($sql);
echo "<div class='post_title'><b>Hasil Analisa dari : $jumlah Orang Masyarakat.</b></div>";
	include "hasil.php";
}

elseif ($_GET[module]=='hasilakhir'){
  $sql=mysql_query("SELECT * FROM analisa");
  $jumlah=mysql_num_rows($sql);
echo "<div class='post_title'><b>Hasil Kepuasan dari : $jumlah Orang Masyarakat.</b></div>";
	include "kepuasan.php";
}

elseif ($_GET[module]=='login'){
echo "<div class='post_title'><b>Silahkan Login dengan Username dan Password anda.</b></div>";
		echo "<form style='margin:8%;' method=POST name='formku' onSubmit='return valid()' action=cek_login.php>
				<td align=center><div align='center'>
					<table>
						<tr><td><input type=text name=id_user class=input placeholder='Username. . .' style='width:125%; margin-left:-30px;'></td></tr>
								<tr><td><input type='hidden' name=level value='direktur'></td></tr>
						<tr><td><input type=password name=password placeholder='Password. . .' class=input style='width:125%; margin-left:-30px;'></td></tr>
						<td><input style='width:160px' type=submit value=Login class=submit></td>
					</table>
				</div></td>
			</table>
		</form>";
}

elseif ($_GET[module]=='hubungikami'){
  echo "<br/><div class='post_title'><b>Hubungi Adminstrator secara online melalui Form di bawah ini :</b></div><br/>
		<form action=hubungi-aksi.html name='formku' onSubmit='return valid()' method=POST >
        <table width=100% style=' padding: 1em; margin-right=10px'>
        <tr><td>Nama</td><td> <input type=text name=nama size=68 class='input'></td></tr>
        <tr><td>Email</td><td> <input type=text name=email size=68 class='input'></td></tr>
        <tr><td>Subjek</td><td> <input type=text name=subjek size=68 class='input'></td></tr>
        <tr><td valign=top>Pesan</td><td> <textarea name=pesan style='width: 95%; height: 160px;' class='input'></textarea></td></tr>
        </td><td colspan=2><input type=submit name=submit value=Kirim class='submit'></td></tr>
        </table></pad></form>";
}

elseif ($_GET[module]=='hubungiaksi'){
  mysql_query("INSERT INTO hubungi(nama,
                                   email,
                                   subjek,
                                   pesan,
                                   tanggal) 
                        VALUES('$_POST[nama]',
                               '$_POST[email]',
                               '$_POST[subjek]',
                               '$_POST[pesan]',
                               '$tgl_sekarang')");
  echo "<br/><br/><div class='hubungi'><center><p><b>Terimakasih telah menghubungi kami. <br /> 
  ....Kami akan segera meresponnya....</b></p></center></div><br/><br/>";
}
?>