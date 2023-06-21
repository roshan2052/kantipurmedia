{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

<div class="container-fluid">
	<div class="row page-titles mx-0 mb-3">
        <div class="col-sm-6 p-0">
            <div class="welcome-text">
                <h4>{{ __('Users') }}</h4>
                <span>{{ __('Edit user') }}</span>
            </div>
        </div>
        <div class="col-sm-6 p-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">{{ __('Users') }}</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ __('Edit User') }}</a></li>
            </ol>
        </div>
    </div>

	<div class="card">
		<div class="card-header">
			<h4 class="card-title">{{ __('Edit User') }}</h4>
		</div>
		<form action="{{ route('admin.users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
			<div class="card-body">
				<div class="basic-form">
					<div class="row align-items-center">
						<div class="form-group col-sm-4 ">
							<div class=" text-center">
								<div class="custom-img-upload img-parent-box mt-4">
									
	                                <img src="{{ HelpDesk::user_img($user->profile) }}" class="img-for-onchange" id="RemoveProfile_{{ $user->id }}" alt="{{ __('User Profile') }}">
		                            
		                            <div class="upload-btn">

										@if ($user->profile)
			                                <a href="javascript:void(0);" rdx-link="{{ route('admin.user.remove_user_image', $user->id) }}" class="rdxUpdateAjax btn btn-primary btn-xs me-1" rdx-delete-box="RemoveProfile_{{ $user->id }}">{{ __('Remove') }}</a>
			                            @endif

		                            	<input type="file" class="form-file-input form-control ps-2 img-input-onchange" name="user_img" id="user_img" accept=".png, .jpg, .jpeg" hidden>
		                            	<label class="upload-label btn btn-xs btn-primary m-0" for="user_img">{{ __('Upload') }}</label>
		                            </div>
	                                @error('user_img')
	                                    <p class="text-danger">
	                                        {{ $message }}
	                                    </p>
	                                @enderror
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<div class="form-group col-12">
									<label>{{ __('First Name') }}</label>
									<input type="text" name="first_name" id="first_name" class="form-control" autocomplete="first_name" value="{{ old('first_name', $user->first_name) }}">
									@error('first_name')
			                            <p class="text-danger">
			                                {{ $message }}
			                            </p>
			                        @enderror
								</div>
								<div class="form-group col-12">
									<label>{{ __('Last Name') }}</label>
									<input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name', $user->last_name) }}">
									@error('last_name')
			                            <p class="text-danger">
			                                {{ $message }}
			                            </p>
			                        @enderror
								</div>
								<div class="form-group col-12">
									<label>{{ __('Email') }}</label>
									<input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}">
									@error('email')
			                            <p class="text-danger">
			                                {{ $message }}
			                            </p>
			                        @enderror
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer pt-0 text-end">
				<button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
				<a href="{{ route('admin.users.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
			</div>
		</form>
	</div>

	<div class="card">
		<div class="card-header">
			<h4 class="card-title">{{ __('Update Password') }}</h4>
		</div>
		<form action="{{ route('admin.users.update-password', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
			<div class="card-body">
				<div class="basic-form">
					<div class="row">
						<div class="form-group col-md-6">
							<label for="dz-password">{{ __('Password') }}</label>
							<div class="input-group">
								<input type="password" name="password" id="dz-password" class="form-control" autocomplete="new-password">
								<span class="input-group-text show-pass"> 
                                    <i class="fa fa-eye-slash"></i>
                                    <i class="fa fa-eye"></i>
                                </span>
							</div>
							@error('password')
	                            <p class="text-danger">
	                                {{ $message }}
	                            </p>
	                        @enderror
						</div>
						<div class="form-group col-md-6">
							<label for="dz-con-password">{{ __('Confirm Password') }}</label>
							<div class="input-group">
								<input type="password" name="confirm_password" id="dz-con-password" class="form-control" autocomplete="new-password">
								<span class="input-group-text show-con-pass"> 
	                                <i class="fa fa-eye-slash"></i>
	                                <i class="fa fa-eye"></i>
	                            </span>
							</div>
							@error('confirm_password')
	                            <p class="text-danger">
	                                {{ $message }}
	                            </p>
	                        @enderror
						</div>
					</div>
				</div>
			</div>
			<div class="card-footer text-end">
				<button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
				<a href="{{ route('admin.users.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
			</div>
		</form>
	</div>

	<div class="card">
		<div class="card-header">
			<h4 class="card-title">{{ __('Assign Role') }}</h4>
		</div>
		<form action="{{ route('admin.users.update_user_roles', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
			<div class="card-body">
				<div class="basic-form">
					<div class="row">
						<label class="p-0 mb-2" for="roles">{{ __('Roles') }}</label>
						<select name="roles[]" id="roles" class="default-select form-control" multiple="true">
							@forelse($roles as $role)
								<option value="{{ $role->id }}" {{ (in_array($role->id, $userRoles)) ? 'selected="selected"' : '' }}>{{ $role->name }}</option>
							@empty
							@endforelse
						</select>
						@error('roles')
	                        <p class="text-red-500 text-xm">
	                            {{ $message }}
	                        </p>
	                    @enderror
					</div>
				</div>
			</div>
			<div class="card-footer text-end">
				<button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
				<a href="{{ route('admin.users.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
			</div>
		</form>
	</div>
</div>

@endsection