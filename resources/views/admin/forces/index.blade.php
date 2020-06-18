@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
	@if(Route::currentRouteName() === 'force.index')
		<a class="btn btn-light" href="{{ route('force.create') }}" role="button">Créer une nouvelle force</a>
	@endif
</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-striped table-sm">
			<thead>
				<tr class="text-center"> 
					<th> Name </th>
					<th> color </th>
					<th> Rang </th>
					<th> Visible </th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($forces as $force) 
				<tr class="text-center">
					<td>
						<a href="" class="add_style" ><strong class="text-dark">{{$force->name}}</strong></a>
					</td>
					<td>{{ $force->color}}</td> 
					<td>{{ $force->rang }}</td>
					<td>{{ $force->visible }}</td>
					<td style="width: 10rem">
						<div class="btn-group float-center">&nbsp; &nbsp; &nbsp;
							<a class="btn btn-outline-success text align-self-center p-2" href="{{ route('force.edit',$force->id) }}" role="button">Edit</a> &nbsp; &nbsp;
						</div>
					</td>
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
