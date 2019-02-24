@extends('admin.main')
@section('title','Kategori')
@section('content')
<h1>Kategori</h1>
<hr>

@if( session('result') == 'success' )
<div class="alert alert-success alert dismissible fade show">
	<strong>Saved!</strong>Berhasil Disimpan!.
	<button type="button" class="close" data-dismiss="alert">\
	&times;
</button>
</div>
@endif



<div class="row">
	<div class="col-md-6 mb-3">
		<a href="{{ route('admin.kategori.add') }}" class="btn btn-primary">(+) Tambah</a>
	</div>

	<div class="col-md-6 mb-3">
		<form method="GET" action="{{ route('admin.kategori') }}">
			<div class="input-group">
				<input type="text" name="keyword" class="form-control"
				value="{{ request('keyword') }}">
			
				<div class="input-group-append">
					<button type="submit" class="btn btn-primary">
						Cari!
					</button>
				</div>
			</div><!-- end input group -->	
		</form>
	</div>
</div><!-- end row -->	

<table class="table table-striped mb-3">
	<tr>
		<th>Kategori</th><th>&nbsp;</th>
	</tr>
	@foreach($data as $dt)
	<tr>
		<td>{{ $dt->nama_kategori }}</td>
		<td>
			<a href="#" class="btn btn-success btn-sm">
				<i class="fa fa-w fa-edit"></i>
			</a>

			<button type="button" class="btn btn-danger btn-sm">
				<i class="fa fa-w fa-trash"></i>
			</button>
		</td>
	</tr>
	@endforeach
</table>

{{
	$data->appends(request()->only('keyword') )
	->links('vendor.pagination.bootstrap-4')
}}

@endsection