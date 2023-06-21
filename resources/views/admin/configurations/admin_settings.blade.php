{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

<div class="container-fluid">
    <div class="row page-titles mx-0 mb-3">
        <div class="col-sm-6 p-0">
            <div class="welcome-text">
                <h4>{{ __('Configurations') }}</h4>
                <span>{{ Str::ucfirst($prefix) }} {{ __('configuration') }}</span>
            </div>
        </div>
        <div class="col-sm-6 p-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.configurations.admin_index') }}">{{ __('Configurations') }}</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">{{ Str::ucfirst($prefix) }}</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{ __('Settings') }}</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('admin.configurations.admin_settings') }}" method="post">
                       	 	@csrf
                            <div class="form-group row">
                            	<div class="col-sm-12 form-group">	                                					
									<div class="form-check">
										<input type="checkbox" class="form-check-input" name="storage_link" id="storage_link">
										<label class="form-check-label" for="storage_link">{{ __('Storage Link (If images are not show than go to root public folder and delete storage folder if available after check and submit)') }}</label>
									</div>
																																		
									<div class="form-check">
										<input type="checkbox" class="form-check-input" name="clear_cache" id="clear_cache">
										<label class="form-check-label" for="clear_cache">{{ __('Clear Cache') }}</label>
									</div>
                          	  	</div>
                            </div>
                            <div class="form-group row ">
                            	<div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection