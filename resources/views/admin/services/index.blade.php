{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

<div class="container-fluid">
	<div class="row page-titles mx-0">
		<div class="col-sm-6 p-0">
			<div class="welcome-text">
				<h4>Services</h4>
				<span>Services List</span>
			</div>
		</div>
		<div class="col-sm-6 p-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.services.index') }}">Services</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">All Services</a></li>
			</ol>
		</div>
	</div>

	<div class="row">
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="card-title">Search Services</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.services.index') }}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 m-sm-0 form-group">
                                <input type="search" name="title" class="form-control" placeholder="Title" value="{{ old('title', request()->input('title')) }}">
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                <input type="submit" name="search" value="{{ __('Search') }}" class="btn btn-primary me-2">
                                <a href="{{ route('admin.services.index') }}" class="btn btn-danger">{{ __('Reset') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

	<div class="row">
		<!-- Column starts -->
		<div class="col-xl-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Services</h4>
                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add Services</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-responsive-lg mb-0">
							<thead>
								<tr>
									<th> <strong> {{ __('S.N.') }} </strong> </th>
									<th> <strong>Title</strong> </th>
									<th> <strong>Description</strong> </th>
									<th> <strong> {!! DzHelper::dzSortable('created_at', __('Created')) !!} </strong> </th>
                                    <th class="text-center"> <strong> {{ __('Actions') }} </strong> </th>
								</tr>
							</thead>
							<tbody>
								@forelse ($services as $service)
									<tr>
										<td> {{ $loop->iteration }} </td>
										<td> {{ $service->title }} </td>
										<td> {{ $service->description }} </td>
										<td> {{ $service->created_at }} </td>
										<td class="text-center d-flex justify-content-center">
                                            <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary shadow btn-xs sharp me-1" title="{{ __('Edit') }}"><i class="fas fa-pencil-alt"></i></a>
                                            <form method="POST" action="{{ route('admin.services.destroy', $service->id) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="button" class="btn btn-danger btn-xs sharp delete-record" title="{{ __('Delete') }}"><i class="fa fa-trash"></i></button>
                                            </form>
										</td>
									</tr>
								@empty
									<tr><td class="text-center" colspan="6"><p>No Data Available</p></td></tr>
								@endforelse

							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					{{ $services ? $services->onEachSide(1)->appends(Request::input())->links() : '' }}
				</div>
			</div>
		</div>
	</div>

</div>
@endsection

@push('inline-scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(".delete-record").click(function(e){
            e.preventDefault();
            if (confirm('Are you sure you want to delete ?')) {
                $(this).closest('form').submit();
            }
        });
    </script>
@endpush
