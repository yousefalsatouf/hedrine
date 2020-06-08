@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
	@if(Route::currentRouteName() === 'target.index')
		<a class="btn btn-primary" href="{{ route('target.create') }}" role="button">Créer une nouveau target</a>
	@endif
</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-bordered table-hover table-sm">
			<thead>
				<tr class="text-center">
					<th> Name</th>
					<th>Long Name</th>
					<th>Notes</th>
					<th>Type</th>
					<th>Editor</th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($targets as $target)
				<tr class="text-center">
					<td>
						<a href="" class="add_style" ><strong>{{$target->name}}</strong></a>
					</td>
					<td>
						{{$target->long_name}}
					</td>
					<td>
						{{$target->notes}}
					</td>
					<td>
						{{$target->targetype->name}}
					</td>
					<td>
						{{$target->user->name}}
					</td>
					<td>
						<div class="btn-group float-right">
						&nbsp; &nbsp; &nbsp;<a class="btn btn-primary" href="" role="button"><i class="far fa-eye"></i>  View</a>  &nbsp; &nbsp;
							<a class="btn btn-success" href="{{ route('target.edit',$target->id) }}" role="button"><i class="fas fa-edit"></i> Edit </a> &nbsp; &nbsp;
							<a class="btn btn-danger" href="{{ route('target.destroy.alert',$target->id) }}" role="button"><i class="far fa-trash-alt"></i> Delete </a>

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
