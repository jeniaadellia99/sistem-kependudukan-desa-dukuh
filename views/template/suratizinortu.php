<?php
	use yii\helpers\Html;
	use app\components\Helper;
?>
<body>
<!-- KOP SURAT -->
<!-- <table align="center">
	 <tr>
		<td width="25" align="left"><img src="../img/logo.png" width="15%" height="20%"></td>
		<td align="center" style="font-family: Georgia;">
			<h2 style="font-style: bold;">PEMERINTAH KABUPATEN INDRAMAYU<br>
			KECAMATAN INDRAMAYU<br></h2>
			<h1>DESA DUKUH</h1>
			<p>Alamat: Jln Raya Indramayu - Jatibarang Km 5 Kecamatan Indramayu Kabupaten Indramayu Kode pos 45215 </p>
		</td>
		
	</tr>
</table>
<hr size="100px"> -->

<!-- ISI -->
	<br><br>
	<p align="center"><b><u>SURAT IZIN ORANG TUA</u></b></p>
	<br><br>
	<?php { ?>
	
	<p>Saya yang bertanda tangan dibawah ini :</p>
	<table cellpadding="1" cellspacing="1" style="left: 30%;">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td> <?= @$model->nama ?></td>
		</tr>
		<tr>
			<td style="width:150px;">Tempat Tanggal Lahir</td>
			<td style="width:0px;">:</td>
			<td> <?= @$model->tempat_lahir ?>, <?= @$model->tgl_lahir ?></td>
		</tr>
		<tr>
			<td>Jenis kelamin</td>
			<td>:</td>
			<td> <?= @$model->jk->nama ?></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td> <?= @$model->pekerjaan ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td> <?= @$model->alamat ?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td>Dengan ini menyatakan dengan sebenar-benarnya bahwa saya sebagai Orang Tua memberikan izin kepada :</td>
		</tr>
	</table>
	<table cellpadding="1" cellspacing="1" style="left: 30%;">
		<tr>
			<td style="width:150px;">Nama</td>
			<td>:</td>
			<td> <?= @$model->nama_anak ?></td>
		</tr>
		<tr>
			<td>Tempat Tanggal Lahir</td>
			<td>:</td>
			<td> <?= @$model->tempat_lahir_anak ?>, <?= @$model->tgl_lahir_anak ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>  <?= @$model->jk->nama ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td>  <?= @$model->alamat ?></td>
		</tr>
	</table>
	<br>

	<p>Untuk bekerja di <?=  @$model->bekerja_di ?>  sebagai "<?= @$model->sebagai ?>" pada pengguna/majikan sesuai dengan persyaratan dan ketentuan yang telah ditetapkan.</p>
	<br>
	<p>Demikian Surat pernyataan ini dibuat agar dapat dipergunakaan sebagai mestinya.</p>
	<br>
	<br>
	<br>
<table align="right" width="100%">
	<tr>
		<td style="text-align: center;">Mengetahui :</td>
		<td style="text-align: center;">Indramayu, Februari 2019</td>s
	</tr>
	<tr>
		<td style="text-align: center;">CAMAT INDRAMAYU</td>
		<td style="text-align: center;"><b>a/n KUWU DUKUH</b></td>
	</tr>
	<tr>
		<td style="text-align: center;"></td>
		<td style="text-align: center;">Sekdes</td>
	</tr>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<tr>
		<td style="text-align: center;"><b><u>...................</u></b></td>
		<td style="text-align: center;"><b><u>M U H A D I</u></b></td>
	</tr>
</table>
<br>
<br>
<br>
<table align="center">
	<tr>
		<td style="text-align: center;">KUWU</td>
	</tr>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<tr>
		<td style="text-align: center;"><b><u>ASMANTO</u></b></td>
	</tr>
	 <?php } ?>
</table>

</body>
