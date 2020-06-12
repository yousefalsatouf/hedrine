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
					<th> Title </th>
					<th> Authors </th>
					<th> Year </th>
					<th> Edition </th>
					<th> URL </th>
					<th> User</th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($references as $reference)
				<tr class="text-center">
					<td>
						<a href="" class="add_style" ><strong class="text-dark">{{$reference->title}}</strong></a>
					</td>
					<td>{{ $reference->authors }}</td>
					<td>{{ $reference->year }}</td>
					<td>{{ $reference->edition }}</td>
					<td>{{ $reference->url }}</td>
					<td>{{ $reference->users->name}}</td>
					<td style="width: 10rem">
						<div class="btn-group float-right">
						&nbsp; &nbsp; &nbsp;<a class="btn btn-outline-primary" href="" role="button"><i class="far fa-eye"></i></a>  &nbsp; &nbsp;
							<a class="btn btn-outline-success" href="{{ route('reference.edit',$reference->id) }}" role="button"><i class="fas fa-edit"></i> </a> &nbsp; &nbsp;
							<a class="btn btn-outline-danger" href="{{ route('reference.destroy.alert',$reference->id) }}" role="button">
								<i class="far fa-trash-alt"></i></a>

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
