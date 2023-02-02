<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>DMS</title>
</head>
<body>
<div class="p-3 mb-2 bg-primary text-white"><h1><a href="{{route('siswa.index')}}"><button type="button" class="btn btn-primary"> < Back </button></a> Data Manajemen Siswa</h1></div>
	<div class="container">
	<br>
	<center>
	<h3>Tambah Siswa Baru</h3>
	<form method="post" action="{{route('siswa.store')}}">
        @csrf
		<table>
			<tr>			
				<td>Nama: </td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM: </td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Alamat: </td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-success" value="Simpan"></td>
			</tr>		
		</table>
	</form>
	<br>
    </br>
</center>
</div>
</body>
</html>