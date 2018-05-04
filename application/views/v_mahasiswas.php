<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Mahasiswa</title>
</head>
<body>
	
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>NIM</th>
				<th>NAMA</th>
				<th>KELAS</th>
				<th>EMAIL</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($mahasiswas as $var): ?>
			<tr>
				<td><?= $var->id ?></td>
				<td><?= $var->nim ?></td>
				<td><?= $var->nama ?></td>
				<td><?= $var->kelas ?></td>
				<td><?= $var->email ?></td>
				<td>
					<a href="<?= site_url('mahasiswa/edit/'. $var->id) ?>" title=""><button class="btn btn-primary">Edit</button></a>
					<a href="<?= site_url('mahasiswa/hapus/'. $var->id) ?>" title=""><button class="btn btn-primary">Hapus</button></a>
				</td>
			</tr>

			<?php endforeach ?>
		</tbody>
	</table>

	<br>
	<a href="<?= site_url('Mahasiswa/tambah') ?>" title="">Tambah Mahasiswa</a>
</body>
</html>