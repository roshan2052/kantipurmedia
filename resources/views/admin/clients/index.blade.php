{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

<div class="container-fluid">
	<div class="row page-titles mx-0">
		<div class="col-sm-6 p-0">
			<div class="welcome-text">
				<h4>Clients</h4>
				<span>Clients List</span>
			</div>
		</div>
		<div class="col-sm-6 p-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="{{ route('admin.clients.index') }}">Clients</a></li>
				<li class="breadcrumb-item active"><a href="javascript:void(0)">All Clients</a></li>
			</ol>
		</div>
	</div>

	<div class="row">
		<!-- Column starts -->
		<div class="col-xl-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Clients</h4>
                    <a href="{{ route('admin.clients.create') }}" class="btn btn-primary">Add Clients</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-responsive-lg mb-0">
							<thead>
								<tr>
									<th> <strong> {{ __('S.N.') }} </strong> </th>
									<th> <strong>Name</strong> </th>
									<th> <strong>Image</strong> </th>
									<th> <strong> {!! DzHelper::dzSortable('created_at', __('Created')) !!} </strong> </th>
                                    <th class="text-center"> <strong> {{ __('Actions') }} </strong> </th>
								</tr>
							</thead>
							<tbody>
								@forelse ($clients as $client)
									<tr>
										<td> {{ $loop->iteration }} </td>
										<td> {{ $client->name ?? '-' }} </td>
										<td>
                                            <img src="{{ asset('storage/clients/'.$client->logo) }}" class="img-responsive img-rounded"  alt="{{ __('Image') }}" style="height: 50px; width: 50px">
                                        </td>
										<td> {{ $client->created_at }} </td>
                                        <td class="text-center d-flex">
                                            <a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-primary shadow btn-xs sharp me-1" title="{{ __('Edit') }}"><i class="fas fa-pencil-alt"></i></a>
                                            <form method="POST" action="{{ route('admin.clients.destroy', $client->id) }}">
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
					{{ $clients ? $clients->onEachSide(1)->appends(Request::input())->links() : '' }}
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
