<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ebf977d231.js" crossorigin="anonymous"></script>
  </head>
  <body>
   <div class="p-3 mb-2 bg-primary text-white"><h1>Data Manajemen Siswa</h1></div>
   <br>
   </br>
   <div class="container">
   <center><h2>Daftar Nama Nama Siswa</h2></center>
    <table class="table table-bordered border-primary">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
        @foreach($siswa as $item)
        <tr>
           <td>
            {{$item->nama}}
           </td> 
           <td>
            {{$item->nim}}
           </td> 
           <td>
            {{$item->alamat}}
           </td> 
           <td>
            <form action="{{route('siswa.destroy', $item->id)}}" method="post">
            @method('delete')
            @csrf
            <a href="{{route('siswa.edit', $item->id)}}"><button type="button" class="btn btn-success">Edit Siswa</button></a>
            <a href="{{route('siswa.show', $item->id)}}"><button type="button" class="btn btn-warning">Lihat Siswa</button></a>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin hapus')">Hapus Siswa</button>
            </form>
           </td>
        </tr>
        @endforeach
	</table>
  <a href="{{route('siswa.create')}}"><button type="button" class="btn btn-primary">Tambah Siswa</button></a>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>