<?php
if (empty($_POST[kode])){
  echo "<script>window.alert('Anda Belum mengisikan No KTP!!!');
        window.location=('javascript:history.go(-1)')</script>";
}
elseif (empty($_POST[nama])){
  echo "<script>window.alert('Anda Belum mengisikan Nama Lengkap!!!');
        window.location=('javascript:history.go(-1)')</script>";
}
elseif (empty($_POST[tahun]) OR empty($_POST[bulan]) OR empty($_POST[tanggal])){
  echo "<script>window.alert('Anda Belum memilih Tanggal Lahir!!!');
        window.location=('javascript:history.go(-1)')</script>";
}
elseif (empty($_POST[jk])){
  echo "<script>window.alert('Anda Belum memilih Jenis Kelamin!!!');
        window.location=('javascript:history.go(-1)')</script>";
}
elseif (empty($_POST[kerja])){
  echo "<script>window.alert('Anda Belum Mengisikan Pekerjaan!!!');
        window.location=('javascript:history.go(-1)')</script>";
}else{
echo "<div class='post_title'><b>Ceklis jawaban yang anda yakini benar.</b></div><br/><br/>
<form action='analisa2.html' method='POST'>
<input type='hidden' name='kode' value='$_POST[kode]'>	
<input type='hidden' name='nama' value='$_POST[nama]'>
<input type='hidden' name='umur' value='$_POST[tahun]-$_POST[bulan]-$_POST[tanggal]'>
<input type='hidden' name='jk' value='$_POST[jk]'>
<input type='hidden' name='kerja' value='$_POST[kerja]'><br/>

<table cellpadding='5' width='100%'>
  <tr>
    <th width='22' rowspan='2' bgcolor='#6f6f6f'><div align='center'><span class='style10'>No</span></div></th>
    <th rowspan='2' bgcolor='#6f6f6f'><div align='center'><span class='style10'>HARAPAN</span></div></th>
    <th bgcolor='#6f6f6f' colspan='4'><div align='center'>Tentukan Tingkat kepuasan Anda</div></th>
  </tr>
  <tr>
    <th width='110px' bgcolor='#6f6f6f'><div align='center'><span class='style10'>Tidak Tercapai </span></div></th>
    <th width='110px' bgcolor='#6f6f6f'><div align='center'><span class='style10'>Cukup Tercapai </span></div></th>
    <th width='110px' bgcolor='#6f6f6f'><div align='center'><span class='style10'> Tercapai</span></div></th>
    <th width='110px' bgcolor='#6f6f6f'><div align='center'><span class='style10'>Sangat Tercapai </span></div></th>
  </tr>
   <tr>";

	$tampil="select * from harapan order by id desc";
	$hasil=mysql_query($tampil); 
	$no1=0;
	$no2=0;
	$no3=0;
	$no4=0;
	$nu=1;
	while ($data=mysql_fetch_array($hasil)){
		if(($nu % 2)==0){
			$warna="#cecece";
		  }
		  else{
			$warna="#e3e3e3";
		  }
		echo "<tr bgcolor=$warna><td>$nu</td><td>$data[pertanyaan]</td>
				<td><input type=checkbox name=cek1[] value=$data[id] id=id1$no1></td>
				<td><input type=checkbox name=cek2[] value=$data[id] id=id2$no2></td>
				<td><input type=checkbox name=cek3[] value=$data[id] id=id3$no3></td>
				<td><input type=checkbox name=cek4[] value=$data[id] id=id4$no4></td>";  
		$nu++;
		$no1++;
		$no2++;
		$no3++;
		$no4++;
		echo "</tr>";
	}
echo "</tr>
</table><br/><br/>
<input style='margin-left:20px; padding:10px 35px 10px 35px;' type=submit value='Lanjutkan >>>' ><br/><br/>";
}
?>