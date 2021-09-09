<!DOCTYPE html>
<html>
<head>
	<title>Kelurahan Sukagalih</title>
</head>
<body>
 
	<h3>Data Jadwal</h3>
 
	<a href="/schedule-service/add"> + Tambah Jadwal Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Layanan</th>
			<th>Antrian</th>
			<th>Jadwal</th>
			<th>Opsi</th>
		</tr>
		@foreach($schedule as $s)
		<tr>
			<td>{{ $s->name }}</td>
			<td>{{ $s->category_id }}</td>
			<td>{{ $s->queue }}</td>
			<td>{{ $s->book_date }}</td>
			<td>
				<a href="/schedule/edit/{{ $s->id }}">Edit</a>
				|
				<a href="/schedule/hapus/{{ $s->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>