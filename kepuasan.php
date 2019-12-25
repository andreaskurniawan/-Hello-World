<style>
#hasil {
	width:100%;
	margin-bottom:30px;
	border:1px solid #fff;
	background:#cecece;
}
</style>
<?php
//statik kepuasan
$query = "SELECT count(*) AS jumsangat FROM analisa WHERE kepuasan='tidak memuaskan'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumsangat = $data['jumsangat'];

$query = "SELECT count(*) AS jumbaik FROM analisa WHERE kepuasan='memuaskan'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumbaik = $data['jumbaik'];

$query = "SELECT count(*) AS jumcukup FROM analisa WHERE kepuasan='sangat memuaskan'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumcukup = $data['jumcukup'];

$total = $jumsangat + $jumbaik + $jumcukup;
 
$prosensangat = round($jumsangat/$total * 100);
$prosenbaik = round($jumbaik/$total * 100);
$prosencukup = round($jumcukup/$total * 100);
 
// menentukan panjang grafik batang berdasarkan prosentase
$panjangGrafiksangat = round($prosensangat * 30 / 100);
$panjangGrafikbaik = round($prosenbaik * 30 / 100);
$panjangGrafikcukup = round($prosencukup * 30 / 1000);
 
if ($prosensangat == 0) $panjangGrafiksangat = 1;
else $panjangGrafiksangat = $prosensangat * 30 / 100;
 
if ($prosenbaik == 0) $panjangGrafikbaik = 1;
else $panjangGrafikbaik = $prosenbaik * 30 / 100;

if ($prosencukup == 0) $panjangGrafikcukup = 1;
else $panjangGrafikcukup = $prosencukup * 30 / 100;

?>

<div id="hasil">
<div style='color:blue; font-weight:bold; font-size:14px; padding:10px'>Statistik Hasil Kepuasan Masyarakat</div>
<table height="245" border="0">
  <tr>
    <td width="130" valign="bottom"><table border="0" >
      <tr>
        <td height="102" valign="bottom nowrap" style="color:back;fon-family:arial,helvetica;font-size:12px;"> <div align="center"><?php echo $prosensangat; ?>%</div></td>
      </tr>
      <tr>
        <td style="border:2px outset white;"bgcolor="red">
		<div style="width:318px;height:<?php echo $panjangGrafiksangat*10?>px;line-height:1px;font-size:1px;"></div>	</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">Tidak Memuaskan</div></td>
      </tr>
    </table></td>
    <td width="112" valign="bottom"><table border="0">
      <tr>
        <td height="102" valign="bottom nowrap" style="color:back;fon-family:arial,helvetica;font-size:12px;"> <div align="center"><?php echo $prosenbaik; ?>%</div></td>
      </tr>
      <tr>
        <td style="border:2px outset white;"bgcolor="yellow">
		<div style="width:318px;height:<?php echo $panjangGrafikbaik*10 ?>px;line-height:1px;font-size:1px;"></div>	</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">Memuaskan</div></td>
      </tr>
    </table></td>
    <td width="130" valign="bottom"><table border="0">
      <tr>
        <td height="102" valign="bottom nowrap" style="color:back;fon-family:arial,helvetica;font-size:12px;"> <div align="center"><?php echo $prosencukup; ?>%</div></td>
      </tr>
      <tr>
        <td style="border:2px outset white;"bgcolor="green">
		<div style="width:318px;height:<?php echo $panjangGrafikcukup*10 ?>px;line-height:1px;font-size:1px;"></div>	</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><div align="center">Sangat Memuaskan </div></td>
      </tr>
    </table></td>
  </tr>
</table>
</div>