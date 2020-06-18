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
				<tr class="text-center"> 
					<th> Name </th>
					<th> First Name </th>
					<th> Team </th>
					<th> Email </th>
					<th> Is Active </th>
					<th> Role </th>
					<th> Tel1 </th>
					<th> Tel2 </th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				@forelse (isset($singleNewUser)&&$singleNewUser?$singleNewUser:$allNewUsers as $user)
					<tr>
						<td>
							<strong class="text-success">{{$user->name}} {{$user->firstname}}</strong>
                        </td>
                        <td>
                        	<strong>{{$user->forstname}}</strong>
                        </td>
                        <td>
                        	<strong>{{$user->team}}</strong>
                        </td>
                        <td>
                        	<strong>{{$user->email}}</strong>
                        </td>
                        <td>
                        	<strong>{{$user->roles->name}}</strong>
                        </td>
                        <td>
                        	<strong>{{$user->tel1}}</strong>
                        </td>
                        <td>
                        	<strong>{{$user->tel2}}</strong>
                        </td>
                    </tr>
                @endforelse
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
