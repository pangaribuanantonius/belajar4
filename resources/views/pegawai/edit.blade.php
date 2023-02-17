<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post" action="{{ route ('pegawai.edit', ['pegawai' => $pegawai]) }}">
		@csrf
		@method('PATCH')
		<label>nama</label>
		<br>
		<input type="text" name="nama" value="{{ $pegawai->nama }}" required>
		<br>

		<label>alamat</label>
		<br>
		<input type="text" name="alamat" value="{{ $pegawai->alamat }}">
		<br>

		<label>level</label>
		<br>
		<input type="text" name="level" value="{{ $pegawai->level }}">
		<br>
		<br>

		<input type="submit" name="simpan" value="simpan" />
	</form>

	<form method="post" action="{{ route('pegawai.delete', ['pegawai' =>$pegawai, 'page'=> request('page')]) }}">
		@csrf
		@method('DELETE')
		<button type="submit">Hapus</button>
	</form>

</body>
</html>