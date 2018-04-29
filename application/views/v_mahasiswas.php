<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Mahasiswa</title>
</head>
<body>
	
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>NIM</th>
				<th>NAMA</th>
				<th>KELAS</th>
				<th>EMAIL</th>
			</tr>
		</thead>
		<tbody>

			<?php foreach ($mahasiswas as $var): ?>

			<tr>
				<td><?= $var->id; ?></td>
				<td><?= $var->nim; ?></td>
				<td><?= $var->nama; ?></td>
				<td><?= $var->kelas; ?></td>
				<td><?= $var->email; ?></td>
			</tr>

			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>