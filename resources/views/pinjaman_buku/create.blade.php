<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post" action="{{ route('pinjaman_buku.store') }}" enctype="multipart/form-data">
		@csrf
		@method('POST')
		<div class="form-gorup">
			<label>Pegawai</label>
			<select name="pegawai_id" class="form-control">
				<option value="">Pilih</option>
				@foreach($listPegawai as $pegawai)
				<option value="{{ $pegawai->id }}">{{ $pegawai->nama }}</option>
				@endforeach
			</select>
		</div>
		@error('pegawai_id')
		<span class="text-danger">{{ $message }}</span> <br>
		@enderror
		<br>
		<div class="form-gorup">
			<label>Buku</label>
			<select name="buku_id" class="form-control">
				<option value="">Pilih</option>
				@foreach($listBuku as $buku)
				<option value="{{ $buku->id }}">{{ $buku->namabuku }}</option>
				@endforeach
			</select>
		</div>
		@error('buku_id')
		<span class="text-danger">{{ $message }}</span> <br>
		@enderror
		<br>
		<input type="submit" name="simpan" value="simpan" />
		<br>
	</form>
</body>
</html>