@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
	@if(Route::currentRouteName() === 'drug.index')
		<a class="btn btn-light" href="{{ route('drug.create') }}" role="button">Créer un nouveau DCI</a>
	@endif
</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-striped table-sm">
			<thead>
				<tr>
					<th> Name </th>
					<th> Team </th>
					<th> Email </th>
					<th> Tel 1 </th>
					<th> Tel 2 </th>
					<th> Email verified </th>
					{{-- <th> Actions</th> --}}
				</tr>
			</thead>
			<tbody>
				@foreach ($allNewUsers as $pending_user) 
				<tr class="text-center">
					<td>
						<a href="" class="add_style" ><strong class="text-dark">{{$pending_user->name}} {{$pending_user->firstname}}</strong></a>
					</td>
					<td>{{$pending_user->team}}</td> 
					<td>{{$pending_user->email}}</td>
					<td>{{$pending_user->tel1}}</td>
					<td>{{$pending_user->tel2}}</td>
					<td>
						@if ($pending_user->email_verified_at)
							<strong><i class="fa fa-check-circle text-success"></i> Oui</strong>
						@else
							<strong><i class="fa fa-cross text-danger"></i> No</strong>
						@endif 
					</td> 
					{{-- <td style="width: 10rem">
						<div class="btn-group float-right">&nbsp; &nbsp; &nbsp;
							<a class="btn btn-outline-success text align-self-center p-2" href="{{ route('pending_user.edit',$pending_user->id) }}" role="button">Edit</a> &nbsp; &nbsp;
							<a class="btn btn-outline-danger text align-self-center p-2" href="{{ route('pending_user.destroy.alert',$pending_user->id) }}" role="button">Delete
							</a>

						</div>
					</td> --}}
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
 </div>
@endsection

@section('dashboard-js')

	<script>
		$(function () {

		$('#example1').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": true,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
			"language":
			{
				"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
			}
		});
		});
	</script>
@endsection
