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
				<div class="card-header">Data Siswa</div>
				<div class="card-body">
					<form action="{{route('siswa.store')}}" method="post">
						@csrf
						<div class="form-group">
							<label for="">Masukan Nama Siswa</label>
							<input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror">
							@error('nama')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="">Masukan NIM Siswa</label>
							<input type="number" name="nim" class="form-control @error('nim') is-invalid @enderror">
							@error('nama')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="form-group">
							<label for="">Masukan Alamat Siswa</label>
							<input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
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