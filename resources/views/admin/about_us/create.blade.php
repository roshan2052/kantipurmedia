{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

<div class="container-fluid">

	<div class="row page-titles mx-0 mb-3">
		<div class="col-sm-6 p-0">
			<div class="welcome-text">
				<h4>About Us</h4>
				<span>Add About Us</span>
			</div>
		</div>
	</div>

	<form action="{{ route('admin.about_us.store') }}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Add About Us</h4>
					</div>
					<div class="card-body">
						<div class="row">
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
				</div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="first_title">First Title</label>
                                <input type="text" name="first_title" class="form-control" id="first_title" required="required" value="{{ old('first_title') }}"/>
                                @error('first_title')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="first_content">First Content</label>
                                <input type="text" name="first_content" class="form-control" id="first_content" required="required" value="{{ old('first_content') }}"/>
                                @error('first_content')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="second_title">Second Title</label>
                                <input type="text" name="second_title" class="form-control" id="second_title" required="required" value="{{ old('second_title') }}"/>
                                @error('second_title')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="second_content">Second Content</label>
                                <input type="text" name="second_content" class="form-control" id="second_content" required="required" value="{{ old('second_content') }}"/>
                                @error('second_content')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="third_title">Third Title</label>
                                <input type="text" name="third_title" class="form-control" id="third_title" required="required" value="{{ old('third_title') }}"/>
                                @error('third_title')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="third_content">Third Content</label>
                                <input type="text" name="third_content" class="form-control" id="third_content" required="required" value="{{ old('third_content') }}"/>
                                @error('second_content')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="fourth_title">Fourth Title</label>
                                <input type="text" name="fourth_title" class="form-control" id="fourth_title" required="required" value="{{ old('fourth_title') }}"/>
                                @error('fourth_title')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fourth_content">Fourth Content</label>
                                <input type="text" name="fourth_content" class="form-control" id="fourth_content" required="required" value="{{ old('fourth_content') }}"/>
                                @error('second_content')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
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

