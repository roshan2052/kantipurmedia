{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

<div class="container-fluid">

	<div class="row page-titles mx-0 mb-3">
		<div class="col-sm-6 p-0">
			<div class="welcome-text">
                <h4>Faq's</h4>
                <span>Edit Faq's</span>
			</div>
		</div>
		<div class="col-sm-6 p-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.faqs.index') }}">Faq's</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Faq's</a></li>
			</ol>
		</div>
	</div>

	<form action="{{ route('admin.faqs.update', $faq->id) }}" method="post" enctype="multipart/form-data">
		@csrf
        @method('put')
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Edit Faq's</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="form-group col-md-6">
								<label for="question">Question</label>
								<input type="text" name="question" class="form-control" id="question" placeholder="Question" required="required" value="{{ $faq->question }}">
								@error('question')
									<p class="text-danger">
										{{ $message }}
									</p>
								@enderror
							</div>
							<div class="form-group col-md-6">
								<label for="answer">Answer</label>
								<input type="text" name="answer" class="slug form-control" id="answer" placeholder="Answer" required="required" value="{{ $faq->answer }}">
								@error('answer')
									<p class="text-danger">
										{{ $message }}
									</p>
								@enderror
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary" title="{{ __('Click here to Save Blog Tag') }}">{{ __('Update') }}</button>
						<a href="{{ route('admin.faqs.index') }}" class="btn btn-danger">{{ __('Back') }}</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection

