{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

<div class="container-fluid">

	<div class="row page-titles mx-0 mb-3">
		<div class="col-sm-6 p-0">
			<div class="welcome-text">
				<h4>Services</h4>
				<span>Add Services</span>
			</div>
		</div>
		<div class="col-sm-6 p-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Services</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Add Services</a></li>
			</ol>
		</div>
	</div>

	<form action="{{ route('admin.services.store') }}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Add Services</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="form-group col-md-12">
								<label for="question">Title</label>
								<input type="text" name="title" class="form-control" id="title" required="required" value="{{ old('title') }}">
								@error('title')
									<p class="text-danger">
										{{ $message }}
									</p>
								@enderror
							</div>
                            <div class="form-group col-md-12">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" style="height: 80px">{{ old('description') }}</textarea>
                                @error('description')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" title="{{ __('Click here to Save Blog Tag') }}">{{ __('Save') }}</button>
						<a href="{{ route('blog_tag.admin.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection

