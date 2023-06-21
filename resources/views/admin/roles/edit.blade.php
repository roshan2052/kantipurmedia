{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

<div class="container-fluid">

	<div class="row page-titles mx-0 mb-3">
        <div class="col-sm-6 p-0">
            <div class="welcome-text">
                <h4>{{ __('Roles') }}</h4>
                <span>{{ __('Edit role') }}</span>
            </div>
        </div>
        <div class="col-sm-6 p-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.roles.index') }}">{{ __('Roles') }}</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ __('Edit Role') }}</a></li>
            </ol>
        </div>
    </div>

	<div class="card">
		<div class="card-header">
			<h4 class="card-title">{{ __('Edit Role') }}</h4>
		</div>
		<form action="{{ route('admin.roles.update', $role->id) }}" method="POST">
        @csrf
			<div class="card-body">
				<div class="basic-form">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">{{ __('Role Name') }}</label>
						<div class="col-sm-9">
							<input type="text" name="name" id="name" class="form-control" autocomplete="name" value="{{ old('name', $role->name) }}">
							@error('name')
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
				<a href="{{ route('admin.roles.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
			</div>
		</form>
	</div>

</div>

@endsection