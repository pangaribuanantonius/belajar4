@extends('master')

@section('anak')
<h6>Form Buku</h6>
<form method="post" action="{{ route('buku.store') }}" enctype="multipart/form-data">
	@csrf
	@method('POST')
	<div class="form-group">
		<label>Nama Buku</label>
		<input type="text" name="namabuku" class="form-control" value="{{ old('namabuku') }}">
		@error('namabuku')
		<span class="text-danger">{{ $message }}</span> <br>
		@enderror
	</div>
	<br>
	<div class="form-group">
		<label>Peberbit Buku</label>
		<input type="text" name="penerbit" class="form-control">
	</div>
	<br>

	<input type="file" name="image" class="form-control">
	@error('image')
	<span class="text-danger">{{ $message }}</span> <br>
	@enderror

	<input type="submit" name="simpan" value="Simpan" />

</form>
<button id="myBtn">Kirim</button>
</div>
@endsection

