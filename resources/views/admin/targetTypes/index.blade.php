@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
	@if(Route::currentRouteName() === 'target_type.index')
		<a class="btn btn-light" href="{{ route('target_type.create') }}" role="button">Créer un nouveau type de target</a>
	@endif
</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-striped table-sm">
			<thead>
				<tr class="text-center">
					<th> Name </th>
					<th> Rank </th>
					<th> Description </th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($target_types as $target_type)
				<tr class="text-center">
					<td>
						<a href="" class="add_style" ><strong class="text-dark">{{$target_type->name}}</strong></a>
					</td>
					<td>{{$target_type->rank}}</td>
					<td>{{$target_type->description }}</td>
					<td style="width: 10rem">
						<div class="btn-group float-center">
							<a class="btn btn-outline-success align-self-center p-2" href="{{ route('target_type.edit',$target_type->id) }}" role="button">Edit</a>
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
