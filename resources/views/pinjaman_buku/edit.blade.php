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
	<form method="post" action="{{ route ('pinjaman_buku.edit', ['pinjaman_buku' => $pinjaman_buku]) }}" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<div class="form-gorup">
			<label>Pegawai</label>
			<select name="pegawai_id" class="form-control">
				
				@foreach($listPegawai as $pegawai)
				<option value="{{ $pegawai->id }}"  @if($pinjaman_buku->pegawai_id == $pegawai->id) selected="selected" @endif>{{ $pegawai->nama }}</option>
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
				@foreach($listBuku as $buku)
				<option value="{{ $buku->id }}" @if($pinjaman_buku->buku_id == $buku->id) selected="selected" @endif>{{ $buku->namabuku }}</option>
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
	<form method="post" action="{{ route('pinjaman_buku.delete', ['pinjaman_buku' =>$pinjaman_buku, 'page'=> request('page')]) }}" enctype="multipart/form-data">
			@csrf
			@method('DELETE')
			<button type="submit">Hapus</button>
		</form>
</body>
</html>