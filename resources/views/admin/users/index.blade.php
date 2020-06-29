@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
	
</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-striped table-sm">
			<thead>
				<tr class="text-center">
					<th> Nom </th>
					<th> First Name </th>
					<th> Team </th>
					<th> Mobile Phone</th>
					<th> Email </th>
					<th> Is Active</th>
					<th> Rôle </th>
					<th> Actions</th> 
				</tr>
			</thead>
			<tbody> 
				@foreach ($users as $user)
				<tr class="text-center">
					<td>
						<a href="" class="add_style" ><strong class="text-dark">{{$user->name}}</strong></a>
					</td>
					<td>{{$user->firstname}}</td>
					<td>{{$user->team}}</td>
					<td>{{$user->tel1}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->is_active}}</td>
					<td>{{$user->roles->name}}</td>
					@if ($user->roles->id != 4)
						<td style="width: 10rem">
							<div class="btn-group float-right">&nbsp; &nbsp; &nbsp;
								<a class="btn btn-outline-success" href="{{ route('user.edit',$user->id) }}" role="button">Edit</a> &nbsp; &nbsp;
							</div>
						</td>
					@else
						<td style="width: 10rem">
							<div class="btn-group float-right">&nbsp; &nbsp; &nbsp;
								<a class="btn btn-outline-success" href="{{ route('user.edit',$user->id) }}" role="button">Edit</a> &nbsp; &nbsp;
								<a class="btn btn-outline-danger" href="{{ route('user.destroy.alert',$user->id) }}" role="button">Delete</a>
							</div>
						</td>
					@endif
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
