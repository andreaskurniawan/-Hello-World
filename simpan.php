<?php
$kode=$_POST[kode];
$nama=$_POST[nama];
$umur=$_POST[umur];
$jk=$_POST[jk];
$kerja=$_POST[kerja];

$jumlah1=$_POST[cek1];
$jumlah2=$_POST[cek2];
$jumlah3=$_POST[cek3];
$jumlah4=$_POST[cek4];

$ceka=$_POST[ceka];
$cekb=$_POST[cekb];
$cekc=$_POST[cekc];
$cekd=$_POST[cekd];

$jumlaha=count($ceka)*1;
$jumlahb=count($cekb)*2;
$jumlahc=count($cekc)*3;
$jumlahd=count($cekd)*4;

$harap=2.5*(($jumlah1)+($jumlah2)+($jumlah3)+($jumlah4));
if($harap>=80){$harapan='sangat baik';}
else if($harap>=65){$harapan='baik';}
else if($harap>=40){$harapan='cukup baik';}
else if($harap>=1){$harapan='tidak baik';}

$layan=2.5*(($jumlaha)+($jumlahb)+($jumlahc)+($jumlahd));
if($layan>=80){$pelayanan='sangat tercapai';}
else if($layan>=65){$pelayanan='tercapai';}
else if($layan>=40){$pelayanan='kurang tercapai';}
else if ($layan>=1){$pelayanan='tidak tercapai';}

if(($harapan=='tidak baik')&& ($pelayanan='tidak tercapai'))
	{$kepuasan='tidak memuaskan';}
	
else if(($harapan=='cukup baik')&& ($pelayanan='tidak tercapai'))
	{$kepuasan='tidak memuaskan';}
	
else if(($harapan=='cukup baik')&& ($pelayanan='kurang tercapai'))
	{$kepuasan='tidak memuaskan';}

else if(($harapan=='baik')&& ($pelayanan='kurang tercapai'))
	{$kepuasan='memuaskan';}

else if(($harapan=='baik')&& ($pelayanan='tercapai'))
	{$kepuasan='memuaskan';}

else if(($harapan=='sangat baik')&& ($pelayanan='tercapai'))
	{$kepuasan='memuaskan';}

else if(($harapan=='sangat baik')&& ($pelayanan='sangat tercapai'))
	{$kepuasan='sangat memuaskan';}
	
else{$kepuasan='cukup baik';}

	
$sql="INSERT INTO analisa (no_ktp, nama_lengkap, tanggal_lahir, jenis_kelamin, pekerjaan, harapan, pelayana, kepuasan) 
		values ('$kode', '$nama', '$umur', '$jk', '$kerja', '$harapan','$pelayanan','$kepuasan')";
$hasil=mysql_query($sql); 
if($hasil>0){
  echo "<script>window.alert('Sukses Memberikan Penilaian...');
        window.location=('hasil-analisa.html')</script>";
}
else{
  echo "<script>window.alert('Gagal Memberikan Penilaian, silahkan ulangi lagi...');
        window.location=('analisa-kepuasan.html')</script>";
}
?>