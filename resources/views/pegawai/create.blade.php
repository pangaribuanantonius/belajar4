<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="post" action="{{ route('pegawai.store') }}">
		@csrf
		<label>nama</label>
		<br>
		<input type="text" name="nama">
		<br>

		<label>alamat</label>
		<br>
		<input type="text" name="alamat">
		<br>

		<label>level</label>
		<br>
		<input type="text" name="level">
		<br>
		<br>
		<input type="submit" name="simpan" value="simpan" />
	</form>
</body>
</html>