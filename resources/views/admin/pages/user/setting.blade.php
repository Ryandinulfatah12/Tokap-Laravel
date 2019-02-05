@extends('admin.main')
@section('title','User Setting')
@section('content')
<h1>User</h1>
<hr>
<div class="row">
	<div class="col-md-6">
		<form method="post" action="{{route('admin.user.setting')}}">
			<div class="card mb-3">
				<div class="card-header"><h5>Setting</h5></div>
				<div class="card-body">
					{{csrf_field()}}
					<div class="form-group form-label-group">
						<input type="text" name="name" class="form-control" value="{{ old('name',$dt->name) }}"
						id="iName" placeholder="Name" required>
						<label for="iName">Name</label>
					</div>

					<div class="form-group form-label-group">
						<input type="text" name="email"
						class="form-control"
						value=" {{ old('email',$dt->email) }} "
						id="iEmail" placeholder="Email" required>
						<label for="iEmail">Email</label>
					</div>

					<div class="form-group form-label-group">
						<input type="password" name="password"
						class="form-control"
						value=" {{ old('password',$dt->password) }} "
						id="iPassword" placeholder="Password" required>
						<label for="iPassword">Password</label>
						<div class="form-text text-muted">
							<small>Kosongkan Password Apabila Tidak Diubah</small>
						</div>
					</div>

					<div class="form-group form-label-group">
						<input type="password" name="repassword"
						class="form-control"
						id="iRePassword" placeholder="Re Password">
						<label for="iRePassword">Re Password</label>
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