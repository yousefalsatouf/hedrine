@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
	@if(Route::currentRouteName() === 'herb.index')
		<a class="btn btn-primary" href="{{ route('herb.create') }}" role="button">Créer une nouvelle plante</a>
	@endif
</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-bordered table-hover table-sm">
			<thead>
				<tr>
					<th> nom</th>
					<th>Sciname</th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($herbs as $herb)
				<tr>
					<td>
						<a href="" class="add_style" ><strong>{{$herb->name}}</strong></a>
					</td>
					<td>
						<a href="" class="add_style" ><strong>{{$herb->sciname}}</strong></a>
					</td>
					<td>
						<div class="btn-group float-right">
						&nbsp; &nbsp; &nbsp;<a class="btn btn-primary" href="" role="button"><i class="far fa-eye"></i>  View</a>  &nbsp; &nbsp;
							<a class="btn btn-success" href="{{ route('herb.edit',$herb->id) }}" role="button"><i class="fas fa-edit"></i> Edit </a> &nbsp; &nbsp;
							<a class="btn btn-danger" href="{{ route('herb.destroy.alert',$herb->id) }}" role="button"><i class="far fa-trash-alt"></i> Delete </a>

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
