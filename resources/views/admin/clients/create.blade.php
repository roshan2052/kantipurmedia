{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

<div class="container-fluid">

	<div class="row page-titles mx-0 mb-3">
		<div class="col-sm-6 p-0">
			<div class="welcome-text">
				<h4>Clients</h4>
				<span>Add Clients</span>
			</div>
		</div>
		<div class="col-sm-6 p-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.clients.index') }}">Clients</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Add Clients</a></li>
			</ol>
		</div>
	</div>

	<form action="{{ route('admin.clients.store') }}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Add Clients</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="form-group col-md-12">
								<label for="name">Client (Company Name)</label>
								<input type="text" name="name" class="form-control" id="name" placeholder="Client Name" value="{{ old('name') }}">
								@error('name')
									<p class="text-danger">
										{{ $message }}
									</p>
								@enderror
							</div>
                            <div class="col-md-12">
                                <div class="card accordion accordion-rounded-stylish accordion-bordered XFeaturedImage {{ $screenOption['FeaturedImage']['visibility'] ? '' : 'd-none' }}" id="accordion-feature-image">
                                    <div class="card-header justify-content-start accordion-header" data-bs-toggle="collapse" data-bs-target="#with-feature-image" aria-expanded="true">
                                        <h4 class="card-title">Image</h4>
                                        <span class="accordion-header-indicator"></span>
                                    </div>
                                    <div class="accordion__body p-4 collapse show" id="with-feature-image" data-bs-parent="#accordion-feature-image">
                                        <div class="featured-img-preview img-parent-box">

                                            {{--                                    <img src="{{ asset('images/noimage.jpg') }}" class="avatar img-for-onchange"  alt="{{ __('Image') }}" style="height: 100px; width: 150px" title="{{ __('Image') }}">--}}

                                            <div class="form-file">
                                                <input type="file" class="ps-2 form-control img-input-onchange" name="image" accept=".png, .jpg, .jpeg"  id="image">
                                            </div>
                                        </div>
                                        @error('image')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                    </div>
                                </div>
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

@push('inline-scripts')
    <script src="{{ asset('vendor/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
@endpush

