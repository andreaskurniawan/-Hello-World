<style>
#statistik{
	width:1100px;
}
#kiri {
	width:46%;
	float:left;
	margin-bottom:30px;
	border:1px solid #fff;
	background:#cecece;
}
#kanan {
	width:47%;
	float:right;
	margin-bottom:30px;
	border:1px solid #fff;
	background:#cecece;
}
</style>
<?php
//statik harapan
$query = "SELECT count(*) AS jumsangat FROM analisa WHERE harapan='sangat Baik'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumsangat = $data['jumsangat'];

$query = "SELECT count(*) AS jumbaik FROM analisa WHERE harapan='Baik'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumbaik = $data['jumbaik'];

$query = "SELECT count(*) AS jumcukup FROM analisa WHERE harapan='cukup Baik'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumcukup = $data['jumcukup'];

$query = "SELECT count(*) AS jumtidak FROM analisa WHERE harapan='tidak Baik'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumtidak = $data['jumtidak'];
 
$total = $jumsangat + $jumbaik + $jumcukup + $jumtidak;
 
$prosensangat = round($jumsangat/$total * 100);
$prosenbaik = round($jumbaik/$total * 100);
$prosencukup = round($jumcukup/$total * 100);
$prosentidak = round($jumtidak/$total * 100);
 
// menentukan panjang grafik batang berdasarkan prosentase
$panjangGrafiksangat = round($prosensangat * 30 / 100);
$panjangGrafikbaik = round($prosenbaik * 30 / 100);
$panjangGrafikcukup = round($prosencukup * 30 / 1000);
$panjangGrafiktidak = round($prosentidak * 30 / 100);
 
if ($prosensangat == 0) $panjangGrafiksangat = 1;
else $panjangGrafiksangat = $prosensangat * 30 / 100;
 
if ($prosenbaik == 0) $panjangGrafikbaik = 1;
else $panjangGrafikbaik = $prosenbaik * 30 / 100;

if ($prosencukup == 0) $panjangGrafikcukup = 1;
else $panjangGrafikcukup = $prosencukup * 30 / 100;
 
if ($prosentidak == 0) $panjangGrafiktidak = 1;
else $panjangGrafiktidak = $prosentidak * 30 / 100;

?>
<div id="kiri">
<div style='color:blue; font-weight:bold; font-size:14px; padding:10px'> Statistik Harapan Masyarakat</div>
<table width="382" height="245" border="0">
  <tr>
    <td width="83" valign="bottom"><table border="0" >
      <tr>
        <td height="102" valign="bottom nowrap" style="color:back;fon-family:arial,helvetica;font-size:12px;"> <div align="center"><?php echo $prosensangat; ?>%</div></td>
      </tr>
      <tr>
        <td style="border:2px outset white;"bgcolor="blue">
		<div style="width:100px;height:<?php echo $panjangGrafiksangat*10 ?>px;line-height:1px;font-size:1px;"></div>	</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">Sangat Baik </div></td>
      </tr>
    </table></td>
    <td width="75" valign="bottom"><table border="0">
      <tr>
        <td height="102" valign="bottom nowrap" style="color:back;fon-family:arial,helvetica;font-size:12px;"> <div align="center"><?php echo $prosenbaik; ?>%</div></td>
      </tr>
      <tr>
        <td style="border:2px outset white;"bgcolor="green">
		<div style="width:100px;height:<?php echo $panjangGrafikbaik*10 ?>px;line-height:1px;font-size:1px;"></div>	</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">Baik</div></td>
      </tr>
    </table></td>
    <td width="87" valign="bottom"><table border="0">
      <tr>
        <td height="102" valign="bottom nowrap" style="color:back;fon-family:arial,helvetica;font-size:12px;"> <div align="center"><?php echo $prosencukup; ?>%</div></td>
      </tr>
      <tr>
        <td style="border:2px outset white;"bgcolor="yellow">
		<div style="width:100px;height:<?php echo $panjangGrafikcukup*10 ?>px;line-height:1px;font-size:1px;"></div>	</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">Cukup Baik </div></td>
      </tr>
    </table></td>
    <td width="79" valign="bottom"><table border="0">
      <tr>
        <td height="102" valign="bottom nowrap" style="color:back;fon-family:arial,helvetica;font-size:12px;"> <div align="center"><?php echo $prosentidak; ?>%</div></td>
      </tr>
      <tr>
        <td style="border:2px outset white;"bgcolor="red">
		<div style="width:100px;height:<?php echo $panjangGrafiktidak*10 ?>px;line-height:1px;font-size:1px;"></div>	</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">Tidak Baik </div></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>

<?php
//statik pelayanan
$query = "SELECT count(*) AS jumsangat FROM analisa WHERE pelayana='sangat tercapai'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumsangat = $data['jumsangat'];

$query = "SELECT count(*) AS jumbaik FROM analisa WHERE pelayana='tercapai'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumbaik = $data['jumbaik'];

$query = "SELECT count(*) AS jumcukup FROM analisa WHERE pelayana='kurang tercapai'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumcukup = $data['jumcukup'];

$query = "SELECT count(*) AS jumtidak FROM analisa WHERE pelayana='tidak Tercapai'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumtidak = $data['jumtidak'];
 
$total = $jumsangat + $jumbaik + $jumcukup + $jumtidak;
 
$prosensangat = round($jumsangat/$total * 100);
$prosenbaik = round($jumbaik/$total * 100);
$prosencukup = round($jumcukup/$total * 100);
$prosentidak = round($jumtidak/$total * 100);
 
// menentukan panjang grafik batang berdasarkan prosentase
$panjangGrafiksangat = round($prosensangat * 30 / 100);
$panjangGrafikbaik = round($prosenbaik * 30 / 100);
$panjangGrafikcukup = round($prosencukup * 30 / 1000);
$panjangGrafiktidak = round($prosentidak * 30 / 100);
 
if ($prosensangat == 0) $panjangGrafiksangat = 1;
else $panjangGrafiksangat = $prosensangat * 30 / 100;
 
if ($prosenbaik == 0) $panjangGrafikbaik = 1;
else $panjangGrafikbaik = $prosenbaik * 30 / 100;

if ($prosencukup == 0) $panjangGrafikcukup = 1;
else $panjangGrafikcukup = $prosencukup * 30 / 100;
 
if ($prosentidak == 0) $panjangGrafiktidak = 1;
else $panjangGrafiktidak = $prosentidak * 30 / 100;

?>
<div id="kanan">
<div style='color:blue; font-weight:bold; font-size:14px; padding:10px'> Statistik Pelayanan Masyarakat</div>
<table width="362" height="245" border="0">
  <tr>
    <td width="83" valign="bottom"><table border="0" >
      <tr>
        <td height="102" valign="bottom nowrap" style="color:back;fon-family:arial,helvetica;font-size:12px;"> <div align="center"><?php echo $prosensangat; ?>%</div></td>
      </tr>
      <tr>
        <td style="border:2px outset white;"bgcolor="blue">
		<div style="width:100px;height:<?php echo $panjangGrafiksangat*10?>px;line-height:1px;font-size:1px;"></div>	</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">Sangat Tercapai </div></td>
      </tr>
    </table></td>
    <td width="75" valign="bottom"><table border="0">
      <tr>
        <td height="102" valign="bottom nowrap" style="color:back;fon-family:arial,helvetica;font-size:12px;"> <div align="center"><?php echo $prosenbaik; ?>%</div></td>
      </tr>
      <tr>
        <td style="border:2px outset white;"bgcolor="green">
		<div style="width:100px;height:<?php echo $panjangGrafikbaik*10 ?>px;line-height:1px;font-size:1px;"></div>	</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">Tercapai</div></td>
      </tr>
    </table></td>
    <td width="87" valign="bottom"><table border="0">
      <tr>
        <td height="102" valign="bottom nowrap" style="color:back;fon-family:arial,helvetica;font-size:12px;"> <div align="center"><?php echo $prosencukup; ?>%</div></td>
      </tr>
      <tr>
        <td style="border:2px outset white;"bgcolor="yellow">
		<div style="width:100px;height:<?php echo $panjangGrafikcukup*10 ?>px;line-height:1px;font-size:1px;"></div>	</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">Kurang Tercapai </div></td>
      </tr>
    </table></td>
    <td width="79" valign="bottom"><table border="0">
      <tr>
        <td height="102" valign="bottom nowrap" style="color:back;fon-family:arial,helvetica;font-size:12px;"> <div align="center"><?php echo $prosentidak; ?>%</div></td>
      </tr>
      <tr>
        <td style="border:2px outset white;"bgcolor="red">
		<div style="width:100px;height:<?php echo $panjangGrafiktidak*10 ?>px;line-height:1px;font-size:1px;"></div>	</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">Tidak Tercapai </div></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>