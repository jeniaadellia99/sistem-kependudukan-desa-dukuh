<?php
	use yii\helpers\Html;
	use app\components\Helper;
?>
<body>
<!-- KOP SURAT -->
<table align="center">
	 <tr>
		<td width="25" align="left"><img src="<?php echo Yii::$app->request->baseUrl; ?>/img/logo.jpeg" width="15%" height="20%"></td>
		<td align="center" style="font-family: Georgia;">
			<h2 style="font-style: bold;">PEMERINTAH KABUPATEN INDRAMAYU<br>
			KECAMATAN INDRAMAYU<br></h2>
			<h1>DESA DUKUH</h1>
			<p>Alamat: Jln Raya Indramayu - Jatibarang Km 5 Kecamatan Indramayu Kabupaten Indramayu Kode pos 45215 </p>
		</td>
		
	</tr>
</table>
<hr size="100px">

<!-- ISI -->
	<br><br>
	<?php { ?>
	<p align="center"><b><u>SURAT KETERANGAN</u></b><br>Nomor: 185.2/<?=@$model->id ?>-TU</p>
	<br><br>
	<p style="text-indent: 50px;">Yang bertanda tangan dibawah ini Kuwu Dukuh Kecamatan Indramayu Kabupaten Indramayu. Menerangkan bahwa :</p><br>
	<table cellpadding="1" cellspacing="1" style="left: 30%;">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td> <?=@$model->nama ?></td>
		</tr>
		<tr>
			<td style="width:150px;">Tempat Tanggal Lahir</td>
			<td style="width:0px;">:</td>
			<td> <?=@$model->tempat_lahir ?>, <?=@$model->tgl_lahir ?></td>
		</tr>
		<tr>
			<td>Jenis kelamin</td>
			<td>:</td>
			<td> <?= @$model->jk->nama ?></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td> <?= @$model->agama->nama ?></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td>:</td>
			<td> <?=@$model->pekerjaan ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td> <?=@$model->alamat ?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td>Adalah benar nama tersebut diatas anak dari:</td>
		</tr>
	</table>
	<table cellpadding="1" cellspacing="1" style="left: 30%;">
		<tr>
			<td >Nama</td>
			<td>:</td>
			<td> <?=@$model->nama_ortu ?></td>
		</tr>
		<tr>
			<td>Cucu dari</td>
			<td>:</td>
			<td> <?=@$model->nama_kakek ?></td>
		</tr>
		<tr>
			<td>Menjadi <?=@$model->nama ?> <?=@$model->nama_ortu ?> <?=@$model->nama_kakek ?></td>
			
		</tr>
	</table>
	<table cellpadding="1" cellspacing="1" style="left: 30%;">
	<tr>
		<td>Surat Keterangan ini dibuat untuk KEPERLUAN PEMBUATAN : <b>Paspor.</b></td>
		<td> </td>
	</tr>
	</table>
	<br>

	<p style="text-indent: 50px;">Demikian surat keterangan ini dibuat dengan sebenarnya dan kepada pihak yang berwenang mohon bantuan sepenuhnya</p>
	<br>
	<br>

<table align="right" width="100%">
	<tr>
		<td style="text-align: center;">Mengetahui :</td>
		<td style="text-align: center;">Indramayu, Februari 2019</td>
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
	<?php } ?>
</table>


</body>
