<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>testing</title>
</head>
<body>
	<br>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h6>Data Pegawai</h6>
			</div>
			<div class="card-body">
				<table class="table table-bordered" width="100%" cellspacing="0">
					<tr>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Level</th>
						<th>Action</th>
					</tr>
					@foreach($pegawai as $peg)
					<tr>
						<td>{{$peg->nama}}</td>
						<td>{{$peg->alamat}}</td>
						<td>{{$peg->level}}</td>
						<td>
							<a href="{{ route('pegawai.edit', $peg->id) }}">edit</a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
			<div class="card-footer"></div>
		</div>

		<br>
		<a href="{{ route('pegawai.create') }}">Tambah Pegawai</a>
	</div>

	



<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>