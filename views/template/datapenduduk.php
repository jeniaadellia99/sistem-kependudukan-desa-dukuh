<?php
	use yii\helpers\Html;
	use app\components\Helper;
?>

<table>
	<tr>
		<td style="text-align: center;"><h2>Data Penduduk</h2></td>
	</tr>
	<tr>
		<td style="text-align: center;"><h3>Desa Dukuh Kab. Indramayu</h3></td>
	</tr>
</table>

<br>
<table class="table-pdf" style="margin:auto; width:100%;">
	<thead>
		<tr>
			<th><?= strtoupper("No") ?></th>
			<th><?= strtoupper("NIK") ?></th>
			<th><?= strtoupper("NAMA") ?></th>
			<th><?= strtoupper("UMUR") ?></th>
			<th><?= strtoupper("TEMPAT TANGGAL LAHIR") ?></th>
			<th><?= strtoupper("AGAMA") ?></th>
			<th><?= strtoupper("JENIS KELAMIN") ?></th>
			<th><?= strtoupper("ALAMAT") ?></th>
			<th><?= strtoupper("PEKERJAAN") ?></th>
			<th><?= strtoupper("STATUS KEWARGANEGARAAN") ?></th>
			<th><?= strtoupper("NAMA KEPALA KELUARGA") ?></th>
			
		</tr>
	</thead>
	<tbody>
		<?php $i=1; foreach($model as $data) { ?>
		<tr>
			<td><?= $i++ ?></td>
			<td><?= $data->nik ?></td>
			<td><?= $data->nama ?></td>
			<td><?= $data->umur ?> Tahun</td>
			<td><?= $data->tempat_lahir ?>, <?= $data->tgl_lahir ?></td>
			<td><?= @$data->agama->nama ?></td>
			<td><?= @$data->jk->nama ?></td>
			
			<td><?= @$data->statuswrg->nama ?></td>
			<td><?= $data->alamat ?></td>
			<td><?= $data->pekerjaan ?></td>
			<td><?= $data->nama_kpl ?></td>
			
		</tr>
		<?php } ?>
	</tbody>
</table>