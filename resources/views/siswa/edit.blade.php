<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>DMS</title>
</head>
<body>
 
<div class="p-3 mb-2 bg-primary text-white"><h1></a> Data Manajemen Siswa</h1></div>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Edit Siswa</div>
				<div class="card-body">
					<form action="{{route('siswa.update',$siswa->id)}}" method="POST">
						@csrf
						@method('put')
						<div class="form-group">
							<label for="">Nama Siswa</label>
							<input type="text" name="nama" value="{{$siswa->nama}}" class="form-control @error('nama') is-invalid @enderror">
							@error('nama')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="">NIM Siswa</label>
							<input type="text" name="nim" value="{{$siswa->nim}}" class="form-control @error('nim') is-invalid @enderror">
							@error('nim')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="">Alamat Siswa</label>
							<input type="text" name="alamat" value="{{$siswa->alamat}}" class="form-control @error('alamat') is-invalid @enderror">
							@error('alamat')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<br>
						<div class="form-group">
							<button type="reset" class="btn btn-outline-warning">Reset</button>
							<button type="submit" class="btn btn-outline-success">Simpan</button>
						</div>
					</form>
					<br>
					<a href="{{route('siswa.index')}}"><button type="button" class="btn btn-block btn-outline-primary"> Kembali </button>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>