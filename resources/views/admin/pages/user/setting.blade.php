@extends('admin.main')
@section('title','User Setting')
@section('content')
<h1>User</h1>
<hr>

@if(session('result') == 'success')
<div class="alert alert-success alert-dismissiable fade show">
	<strong>Updated !</strong> Berhasil Diupdate.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>

@elseif(session('result') == 'fail')
<div class="alert alert-danger alert-dismissiable fade show">
	<strong>Failed !</strong> Gagal Diupdate.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif

<div class="row">
	<div class="col-md-6">
		<form method="post" action="{{route('admin.user.setting')}}">
			<div class="card mb-3">
				<div class="card-header"><h5>Setting</h5></div>
				<div class="card-body">
					{{csrf_field()}}
					<div class="form-group form-label-group">
						<input type="text" name="name"
						 class="form-control {{$errors->has('name')?'is-invalid':''}}" value="{{ old('name',$dt->name) }}"
						id="iName" placeholder="Name" required>
						<label for="iName">Name</label>
						@if($errors->has('name'))
						<div class="invalid-feedback">{{$errors->first('name')}}</div>
						@endif
					</div>

					<div class="form-group form-label-group">
						<input type="text" name="email"
						class="form-control {{$errors->has('email')?'is-invalid':''}}"
						value=" {{ old('email',$dt->email) }} "
						id="iEmail" placeholder="Email" required>
						<label for="iEmail">Email</label>
						@if($errors->has('email'))
						<div class="invalid-feedback">{{$errors->first('email')}}</div>
						@endif
					</div>

					<div class="form-group form-label-group">
						<input type="password" name="password"
						class="form-control {{$errors->has('password')?'is-invalid':''}}"
						id="iPassword" placeholder="Password" required>
						<label for="iPassword">Password</label>
						@if($errors->has('password'))
						<div class="invalid-feedback">{{$errors->first('password')}}</div>
						@endif
						<div class="form-text text-muted">
							<small>Kosongkan Password Apabila Tidak Diubah</small>
						</div>
					</div>

					<div class="form-group form-label-group">
						<input type="password" name="repassword"
						class="form-control {{$errors->has('repassword')?'is-invalid':''}}"
						id="iRePassword" placeholder="Re Password">
						<label for="iRePassword">Re Password</label>
						@if($errors->has('repassword'))
						<div class="invalid-feedback">{{$errors->first('repassword')}}</div>
						@endif
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary shadow-sm">Update!</button>
				</div>
			</div>
		</form>
	</div>			
</div>
@endsection