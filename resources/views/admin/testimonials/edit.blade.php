{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

<div class="container-fluid">

	<div class="row page-titles mx-0 mb-3">
		<div class="col-sm-6 p-0">
			<div class="welcome-text">
                <h4>Testimonials</h4>
                <span>Edit Testimonials</span>
			</div>
		</div>
		<div class="col-sm-6 p-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.testimonials.index') }}">Testimonials</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Testimonials</a></li>
			</ol>
		</div>
	</div>

	<form action="{{ route('admin.testimonials.update', $faq->id) }}" method="post" enctype="multipart/form-data">
		@csrf
        @method('put')
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Edit Testimonials</h4>
					</div>
					<div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="client_name">Client Name</label>
                                <input type="text" name="client_name" class="form-control" id="client_name" placeholder="Client Name" required="required" value="{{ old('client_name') }}">
                                @error('client_name')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="client_designation">Client Designation</label>
                                <input type="text" name="client_designation" class="form-control" id="client_designation" placeholder="Client Designation" required="required" value="{{ old('client_designation') }}">
                                @error('client_designation')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                                <label for="company_name">Company Name</label>
                                <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company Name" required="required" value="{{ old('company_name') }}">
                                @error('company_name')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="review">Review</label>
                                <textarea name="review" class="form-control h-auto" id="review" rows="3">{{ old('review') }}</textarea>
                                @error('review')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card accordion accordion-rounded-stylish accordion-bordered XFeaturedImage" id="accordion-feature-image">
                                <div class="card-header justify-content-start accordion-header" data-bs-toggle="collapse" data-bs-target="#with-feature-image" aria-expanded="true">
                                    <h4 class="card-title">Image</h4>
                                    <span class="accordion-header-indicator"></span>
                                </div>
                                <div class="accordion__body p-4 collapse show" id="with-feature-image" data-bs-parent="#accordion-feature-image">
                                    <div class="featured-img-preview img-parent-box">

                                        <img src="{{ asset('images/noimage.jpg') }}" class="avatar img-for-onchange"  alt="{{ __('Image') }}" style="height: 200px; width: 250px" title="{{ __('Image') }}">

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
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" title="{{ __('Click here to Save Blog Tag') }}">{{ __('Update') }}</button>
						<a href="{{ route('admin.testimonials.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection

