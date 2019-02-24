@extends('admin.main')
@section('title','Kategori Tambah')
@section('content')
<h1>Kategori <small class="mute">Tambah</small></h1>
<hr>

@if( session('result') == 'fail' )
<div class="alert alert-danger alert dismissible fade show">
	<strong>Failed!</strong>Gagal Disimpan!.
	<button type="button" class="close" data-dismiss="alert">\
	&times;
</button>
</div>
@endif

<div class="row">
	<div class="col-md-6 mb-3">
		<form method="POST" action="{{ route('admin.kategori.add') }}">
			{{ csrf_field() }}
			<div class="card">
				<div class="card-header">
					<h5>Buat Kategori Baru</h5>
				</div><!-- end card header -->	

				<div class="card-body">
					<div class="form-group form-label-group">
					<input type="text" name="kategori"
					class="form-control {{ $errors->has('kategori')?'is-invalid':'' }}" 
					value="{{ old('kategori') }}"
					id="iKategori" placeholder="Kategori" required>
					<label for="iKategori">Kategori</label>
					@if($errors->has('kategori'))
					<div class="invalid-feedback">{{ $errors->first('kategori') }}</div>
					@endif
					</div><!-- end card group -->	
				</div><!-- end card body -->

				<div class="card-footer">
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div><!-- end card footer -->	

			</div><!-- end card -->	
		</form>
	</div>		
</div>

@endsection