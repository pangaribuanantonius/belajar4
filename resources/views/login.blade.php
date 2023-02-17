@extends('master')

@section('anak')
<form method="post">
	<div class="mb-3">
		<label class="form-label">Username</label>
		<input type="text" class="form-control" name="username" id="exampleFormControlInput1" placeholder="Username">
	</div>
	<div class="mb-3">
		<label class="form-label">Password</label>
		<input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="Password">
	</div>

	<button class="btn btn-success" type="submit" name="simpan">Masuk</button>
</form>
@endsection