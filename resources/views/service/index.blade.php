<!DOCTYPE html>
<html>
<head>
	<title>Kelurahan Sukagalih</title>
</head>
<body>
 
	<h3>Data Jadwal</h3>
 
	<a href="/service/add"> + Tambah Jadwal Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Layanan</th>
			<th>Deskripsi</th>
			<th>Opsi</th>
		</tr>
		@foreach($services as $s)
		<tr>
			<td>{{ $s->service_name }}</td>
			<td>{{ $s->description }}</td>
			<td>
				<a href="/service/edit/{{ $s->id }}">Edit</a>
				|
				<a href="/service/hapus/{{ $sc->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>