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
			<p>Alamat: Jln Raya Indramayu - Jatibarang Km 5 Kecamatan Indramayu Kabupaten Indramayu Kode pos 45211 </p>
		</td>
		
	</tr>
</table>
<hr size="100px">

<!-- ISI -->
	<br><br>
	<?php  { ?>
	<p align="center"><b>SURAT KETERANGAN<br/><u>HARGA TANAH DAN BANGUNAN</u><br/>No: 145/ <?= @$model->id ?>
-SEKDES</b></p>
	<br><br>
	<p>Yang bertanda tangan dibawah ini, Kuwu:</p><br>
	<table cellpadding="1" cellspacing="1" style="width:500px;">
		<tr>
			<td>Desa</td>
			<td>:</td>
			<td>DUKUH</td>
		</tr>
		<tr>
			<td>Kecamatan</td>
			<td>:</td>
			<td>Indramayu</td>
		</tr>
		<tr>
			<td>Kabupaten</td>
			<td>:</td>
			<td>Indramayu</td>
		</tr>
	</table><br>

	<p>Dengan ini menerangkan, bahwa taksiran mengenai harga pasaran tanah untuk data sebagai berikut:</p><br>

	<table cellpadding="1" cellspacing="1" style="width:280px;">
		<tr>
			<td>Nomor Persil/NOP</td>
			<td>:</td>
			<td><?= @$model->no_persil ?></td>
		</tr>
		<tr>
			<td>Atas Nama</td>
			<td>:</td>
			<td><?= @$model->nama ?></td>
		</tr>
		<tr>
			<td>Terletak</td>
			<td>:</td>
			<td><?= @$model->letak_tanah ?></td>
		</tr>
		<tr>
			<td>Adalah Sebagai Berikut</td>
			<td>:</td>
			<td></td>
		</tr>
		<tr>
			<td>Luas Tanah</td>
			<td>:</td>
			<td><?= @$model->luas_tanah ?></td>
		</tr>
		<tr>
			<td>Taksiran Harga Tanah</td>
			<td>:</td>
			<td><p>Rp.<?= @$model->min_harga_tanah ?> s/d Rp.<?= $model->max_harga_tanah ?></p></td>
		</tr>
		<tr>
			<td>Luas Bangunan</td>
			<td>:</td>
			<td><?= @$model->luas_bangunan ?></td>
		</tr>
		<tr>
			<td>Taksiran Harga Bangunan</td>
			<td>:</td>
			<td><p>Rp.<?= @$model->harga_bangunan ?></p></td>
		</tr>
</table>
<b>Dan keterangan mengenai NJOP adalah sebagai berikut:</b>
	<table cellpadding="1" cellspacing="1" style="width:450px;">
		<tr>
			<td>-</td>
			<td>Tanah</td>
			<td>:</td>
			<td><p>Rp.<?= @$model->tanah ?>/M2</td>
		</tr>
		<tr>
			<td>-</td>
			<td>Bangunan</td>
			<td>:</td>
			<td><p>Rp.<?= @$model->bangunan ?>/M2</td>
		</tr>
	</table><br>

<table cellpadding="1" cellspacing="1" style="width:250px;">
	<tr>
		<td><b>Batas-batas Tanah / Bangunan</b></td>
		<td><b>:</b></td>
		<td></td>
	</tr>
	<tr>
		<td>Batas Sebelah Selatan</td>
		<td>:</td>
		<td><?= @$model->bts_sebelah_selatan ?></td>
	</tr>
	<tr>
		<td>Batas Sebelah Utara</td>
		<td>:</td>
		<td><?= @$model->bts_sebelah_utara ?></td>
	</tr>
	<tr>
		<td>Batas Sebelah Timur</td>
		<td>:</td>
		<td><?= @$model->bts_sebelah_timur ?></td>
	</tr>
	<tr>
	<td>Batas Sebelah Barat</td>
		<td>:</td>
		<td><?= @$model->bts_sebelah_barat ?></td>
	</tr>
</table><br>
<p>Harga tersebut bersifat Umum, belum memperhatikan faktor resiko serta tidak mengikat, sehingga sewaktu-waktu dapat berubah.</p><br>
<p>Demikian surat keterangan ini kami buat untuk dapat dipergunakan sebagaimana mestinya.</p><br><br>

<table align="right">
    <tr>
        <td style="text-align: center;">Indramayu, 14 Januari 2019</td>
    </tr>
    <tr>
        <td style="text-align: center;"><b>a/n KUWU DUKUH</b></td>
    </tr>
    <tr>
        <td style="text-align: center;">Sekdes</td>
    </tr>
    <br>
    <br>
    <br>
    <br>
    <tr>
        <td style="text-align: center;"><b><u>M U H A D I</u></b></td>
    </tr>
	<?php } ?>
</table>


</body>
