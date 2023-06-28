{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

<div class="container-fluid">
	<div class="row page-titles mx-0">
		<div class="col-sm-6 p-0">
			<div class="welcome-text">
				<h4>Teams</h4>
				<span>Teams List</span>
			</div>
		</div>
		<div class="col-sm-6 p-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.teams.index') }}">Teams</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">All Teams</a></li>
			</ol>
		</div>
	</div>

	<div class="row">
        <!-- Column starts -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="card-title">Search Teams</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.teams.index') }}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 m-sm-0 form-group">
                                <input type="search" name="question" class="form-control" placeholder="Question" value="{{ old('question', request()->input('question')) }}">
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                <input type="submit" name="search" value="{{ __('Search') }}" class="btn btn-primary me-2">
                                <a href="{{ route('admin.teams.index') }}" class="btn btn-danger">{{ __('Reset') }}</a>
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
					<h4 class="card-title">Teams</h4>
					@can('Controllers > BlogTagsController > admin_create')
						<a href="{{ route('admin.teams.create') }}" class="btn btn-primary">Add Team</a>
					@endcan
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-responsive-lg mb-0">
							<thead>
								<tr>
									<th> <strong> {{ __('S.N.') }} </strong> </th>
									<th> <strong>Member Name</strong> </th>
									<th> <strong>Designation</strong> </th>
									<th> <strong>Member Info</strong> </th>
									<th> <strong> {!! DzHelper::dzSortable('created_at', __('Created')) !!} </strong> </th>
									@canany(['Controllers > BlogTagsController > admin_edit', 'Controllers > BlogTagsController > admin_destroy'])
										<th class="text-center"> <strong> {{ __('Actions') }} </strong> </th>
                                    @endcanany
								</tr>
							</thead>
							<tbody>
								@forelse ($teams as $team)
									<tr>
										<td> {{ $loop->iteration }} </td>
										<td> {{ $testim->member_name }} </td>
										<td> {{ $testim->designation }} </td>
										<td> {{ $testim->member_info }} </td>
										<td> {{ $testim->created_at }} </td>
                                        <td class="text-center d-flex justify-content-center">
                                            <a href="{{ route('admin.teams.edit', $testim->id) }}" class="btn btn-primary shadow btn-xs sharp me-1" title="{{ __('Edit') }}"><i class="fas fa-pencil-alt"></i></a>
                                            <form method="POST" action="{{ route('admin.teams.destroy', $testim->id) }}">
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
					{{ $teams ? $teams->onEachSide(1)->appends(Request::input())->links() : '' }}
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
