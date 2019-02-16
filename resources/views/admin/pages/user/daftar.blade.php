@extends('admin.main')
@section('title','User')
@section('content')
<h1>User</h1>
<hr>

@if(session('result') == 'success')
<div class="alert alert-success alert-dismissible fade show">
	<strong>Tersimpan! </strong>Berhasil Disimpan.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif

<div class="row">
	<div class="col-md-6 mb-3">
		<a href="{{ route('admin.user.add') }}" class="btn btn-primary">[+] Tambah</a>
	</div>

	<div class="col-md-6 mb-3">
		<form method="GET" action="{{ route('admin.user') }}">
			<div class="input-group">
				<input type="text" name="keyword"
				value="{{ request('keyword') }}"
				class="form-control">

				<div class="input-group-append">
					<button type="submit"
					class="btn btn-primary">
						Cari!
					</button>
				</div>
			</div>
		</form>
	</div>	
</div>

<table class="table table-striped mb-3">
	<tr>
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
	</tr>
	@foreach($data as $dt)
	<tr>
		<td>{{ $dt->name }}</td>
		<td>{{ $dt->email }}</td>
		<td>{{ $dt->akses }}</td>
		<td>
			<a href="{{ route('admin.user.edit',['id'=>$dt->id]) }}" class="btn btn-success btn-sm">
				<i class="fa fa-w fa-edit"></i>
			</a>
			@if($dt->id !=Auth::id())
			<button class="btn btn-danger btn-sm" type="button">
				<i class="fa fa-w fa-trash"></i>
			</button>
			@endif
			
		</td>
	</tr>
	@endforeach
</table>
{{
	$data->appends(request()->only('keyword'))
	->links('vendor.pagination.bootstrap-4')
}}
@endsection