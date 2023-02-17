<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Form Update Data</title>
</head>
<body>
	Form Data Buku
	<br>
	<br>
	<form method="post" action="{{ route ('buku.edit', ['buku' => $buku]) }}" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		<input type="hidden" name="id">

		<label>Nama Buku</label>
		<br>
		<input type="text" name="namabuku" value="{{ $buku->namabuku }}" required>
		<br>
		<br>
		<label>Penerbit</label>
		<br>
		<input type="text" name="penerbit" value="{{ $buku->penerbit }}" required>
		<br>
		<br>
		<input type="file" name="image">
		<br>
		<img src="{{ \URL::to('').'/konten/image/'. $buku->image}}" width="100">
		<br>
		<br>
		<input type="submit" name="simpan" value="Simpan" />
		@error('image')
		<span class="text-danger">{{ $message }}</span> <br>
		@enderror


	</form>

	<form method="post" action="{{ route('buku.delete', ['buku' =>$buku, 'page'=> request('page')]) }}" enctype="multipart/form-data">
			@csrf
			@method('DELETE')
			<button type="submit">Hapus</button>
		</form>

</body>
</html>