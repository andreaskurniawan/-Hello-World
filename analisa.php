<?php
echo "<div class='post_title'><b>Masukkan Data Diri anda Untuk memberikan Pendapat.</b></div><br/><br/><br/>
 <form action='analisa1.html' method='POST' class='style9'>
<table width='100%'>
  	<tr><td>No Ktp </td>		<td><input type='text' name='kode' size=38 class='input'> </tr>
  	<tr><td>Nama Lengkap</td>	<td><input type='text' name='nama' size=68 class='input'> </tr>
  	<tr><td>Tanggal Lahir</td>	<td><select name='tanggal' class='input' style='margin-left:20px;'><option value='0' selected>- Pilih Tanggal -</option>";
													for($n=1; $n<=31; $n++){ #melakukan perulangan angka 1 s.d 31
															echo "<option value='$n'>$n</option>";
														}
															echo "</select>
															-
														<select name='bulan' class='input'> <option value='0' selected>- Pilih Bulan -</option>";
													$bln = array('01','02','03','04','05','06','07','08','09','10','11','12');
														for($n=0; $n<=11; $n++){
															echo "<option value='$bln[$n]'>$bln[$n]</option>";
														}
															echo "</select>
													  -
														<select name='tahun' class='input'> <option value='0' selected>- Pilih Tahun -</option>";
														for($n=1970; $n<=2013; $n++){ #melakukan perulangan angka 1920 s.d 2020
																echo "<option value='$n'>$n</option>";
														} 
														
													  echo "</select></td></tr>
  	<tr><td>Jenis Kelamin</td>	<td><select name='jk' class='input'>
		<option value='0' selected>- Pilih Jenis Kelamin -</option>
		<option value='Laki-laki'>Laki-laki</option>
		<option value='Perempuan'>Perempuan</option>
		</select></td>
	</tr>
	<tr><td>Pekerjaan</td>		<td><input type='text' name='kerja' size=128 class='input'></td> </tr>

<tr><td></td><td><br/></br><input style='margin-left:20px; padding:10px 35px 10px 35px;' type=submit value='Lanjutkan >>>' ><br/><br/><br/></td></tr></tr>
</table>";
?>