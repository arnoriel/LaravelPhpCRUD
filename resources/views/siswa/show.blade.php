<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ebf977d231.js" crossorigin="anonymous"></script>
 </head>
 <div class="p-3 mb-2 bg-primary text-white"><h1>Data Manajemen Siswa</h1></div>
   <br>
   </br>
   <div class="container">
<body>
<div class="card">
    <div class="card-header">Data Siswa</div>
    <div class="card-body">
        <div class="form-group">
            <label for="">Nama Siswa</label>
            <input type="text" name="name" value="{{$siswa->nama}}" class="form-control" readonly>
            <label for="">NIM</label>
            <input type="text" name="name" value="{{$siswa->nim}}" class="form-control" readonly>
            <label for="">Alamat</label>
            <input type="text" name="name" value="{{$siswa->alamat}}" class="form-control" readonly>
        </div>
        <br>
        <div class="form-group">
            <a href="{{url('/siswa')}}" class="btn btn-block btn-outline-primary">Kembali</a>
        </div>
    </div>
</div>
</div>
</body>
</html>