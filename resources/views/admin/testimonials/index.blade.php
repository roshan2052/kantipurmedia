{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

<div class="container-fluid">
	<div class="row page-titles mx-0">
		<div class="col-sm-6 p-0">
			<div class="welcome-text">
				<h4>Testimonials</h4>
				<span>Testimonials List</span>
			</div>
		</div>
		<div class="col-sm-6 p-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.faqs.index') }}">Testimonials</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">All Testimonials</a></li>
			</ol>
		</div>
	</div>

	<div class="row">
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="card-title">Search Testimonials</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.testimonials.index') }}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 m-sm-0 form-group">
                                <input type="search" name="client_name" class="form-control" placeholder="Client Name" value="{{ old('client_name', request()->input('client_name')) }}">
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                <input type="submit" name="search" value="{{ __('Search') }}" class="btn btn-primary me-2">
                                <a href="{{ route('admin.testimonials.index') }}" class="btn btn-danger">{{ __('Reset') }}</a>
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
					<h4 class="card-title">Testimonials</h4>
					@can('Controllers > BlogTagsController > admin_create')
						<a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary">Add Testimonial</a>
					@endcan
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-responsive-lg mb-0">
							<thead>
								<tr>
									<th> <strong> {{ __('S.N.') }} </strong> </th>
									<th> <strong>Client Name</strong> </th>
									<th> <strong>Designation</strong> </th>
									<th> <strong>Company Name</strong> </th>
									<th> <strong> {!! DzHelper::dzSortable('created_at', __('Created')) !!} </strong> </th>
                                    <th class="text-center"> <strong> {{ __('Actions') }} </strong> </th>
								</tr>
							</thead>
							<tbody>
								@forelse ($testimonials as $testimonial)
									<tr>
										<td> {{ $loop->iteration }} </td>
										<td> {{ $testimonial->client_name }} </td>
										<td> {{ $testimonial->client_designation }} </td>
										<td> {{ $testimonial->company_name }} </td>
										<td> {{ $testimonial->created_at }} </td>
                                        <td class="text-center d-flex justify-content-center">
                                            <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-primary shadow btn-xs sharp me-1" title="{{ __('Edit') }}"><i class="fas fa-pencil-alt"></i></a>
                                            <form method="POST" action="{{ route('admin.testimonials.destroy', $testimonial->id) }}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger shadow btn-xs sharp delete-record" title="{{ __('Delete') }}"><i class="fa fa-trash"></i></button>

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
					{{ $testimonials ? $testimonials->onEachSide(1)->appends(Request::input())->links() : '' }}
				</div>
			</div>
		</div>
	</div>

</div>
@endsection

@push('inline-scripts')

<script>
    $('.delete-record').click(function(e){
        e.preventDefault()
        if (confirm('Are you sure?')) {
            $(e.target).closest('form').submit();
        }
    });
</script>

@endpush
