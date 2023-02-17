@extends('master')

	@section('anak')

	<div class="flash-data" data-flashdata="{{ session()->get('flashdata') }}"></div>


		<div class="card">
			<div class="card-header">
				<h6>Data Buku</h6>
			</div>
			<div class="card-body">
				<table class="table table-bordered" width="100%" cellspacing="0">
					<tr>
						<th>Nama Buku</th>
						<th>Penerbit</th>
						<th>Action</th>
					</tr>
					@foreach($buku as $buk)
					<tr>
						<td>{{$buk->namabuku}}</td>
						<td>{{$buk->penerbit}}</td>
						<td>
							<a href="{{ route('buku.edit', $buk->id) }}">edit</a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
			<div class="card-footer"></div>
		</div>
		<br>
		

		<a href="{{ route('buku.create') }}">Tambah Buku</a>
		<br><br>
		{{ $buku->appends(Request::except('page'))->links() }}
	

	@endsection

	
	



