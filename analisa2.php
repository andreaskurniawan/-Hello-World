<?php
$cek1=$_POST[cek1];
$cek2=$_POST[cek2];
$cek3=$_POST[cek3];
$cek4=$_POST[cek4];

$jumlah1=count($cek1)*1;
$jumlah2=count($cek2)*2;
$jumlah3=count($cek3)*3;
$jumlah4=count($cek4)*4;
echo "<div class='post_title'><b>Masukkan Data Diri anda Untuk memberikan Pendapat.</b></div><br/>
 <form action='simpan-analisa.html' method='POST' class='style9'>
 
<input type='hidden' name='kode' value='$_POST[kode]'>	
<input type='hidden' name='nama' value='$_POST[nama]'>
<input type='hidden' name='umur' value='$_POST[umur]'>
<input type='hidden' name='jk' value='$_POST[jk]'>
<input type='hidden' name='kerja' value='$_POST[kerja]'>

<input type='hidden' name='cek1' value='$jumlah1'>
<input type='hidden' name='cek2' value='$jumlah2'>
<input type='hidden' name='cek3' value='$jumlah3'>
<input type='hidden' name='cek4' value='$jumlah4'>
<br/>

<table cellpadding='5' width='100%'>
  <tr>
    <th width='22' rowspan='2' bgcolor='#6f6f6f'><div align='center'><span class='style10'>No</span></div></th>
    <th rowspan='2' bgcolor='#6f6f6f'><div align='center'><span class='style10'>PELAYANAN</span></div></th>
    <th bgcolor='#6f6f6f' colspan='4'><div align='center'>Tentukan Tingkat kepuasan Anda</div></th>
  </tr>
  <tr>
    <th width='110px' bgcolor='#6f6f6f'><div align='center'><span class='style10'>Tidak Baik </span></div></th>
    <th width='110px' bgcolor='#6f6f6f'><div align='center'><span class='style10'>Kurang Baik </span></div></th>
    <th width='110px' bgcolor='#6f6f6f'><div align='center'><span class='style10'> Baik</span></div></th>
    <th width='110px' bgcolor='#6f6f6f'><div align='center'><span class='style10'>Sangat Baik </span></div></th>
  </tr>
   <tr>";
  
	$tampil="select * from pelayanan order by id desc";
	$hasil=mysql_query($tampil); 
	$noa=0;
	$nob=0;
	$noc=0;
	$nod=0;
	$nu=1;
	while ($data=mysql_fetch_array($hasil)){
		if(($nu % 2)==0){
			$warna="#cecece";
		  }
		  else{
			$warna="#e3e3e3";
		  }
		echo "<tr bgcolor=$warna><td>$nu</td><td>$data[pelayanan]</td>
				<td><input type=checkbox name=ceka[] value=$data[id] id=id1$noa></td>
				<td><input type=checkbox name=cekb[] value=$data[id] id=id2$nob></td>
				<td><input type=checkbox name=cekc[] value=$data[id] id=id3$noc></td>
				<td><input type=checkbox name=cekd[] value=$data[id] id=id4$nod></td>";  
		$nu++;
		$noa++;
		$nob++;
		$noc++;
		$nod++;
		echo "</tr>";
	}
echo"</tr></table><br/><br/>
<input style='margin-left:20px; padding:10px 35px 10px 35px;' type=submit value='Simpan Hasil Analisa' ><br/><br/>";
?>