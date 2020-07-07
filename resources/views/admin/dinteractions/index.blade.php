@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">

    <a class="btn btn-light" href="{{ route('newDrugTarget') }}" role="button">Créer une nouvelle Dinteraction Target</a>

</div>
<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-striped table-sm">
			<thead>
				<tr class="text-center">

					<th> Drug Name </th>
					<th> Target Name </th>
					<th> Notes </th>
					<th> Editor </th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($validatedDinteractions as $dinteraction)
				<tr class="text-center">

					<td>{{$dinteraction->drugs->name}}</td>
					<td>{{$dinteraction->targets->name }}</td>
					<td>{{$dinteraction->notes }}</td>
					<td>{{$dinteraction->user->name }}</td>
					<td style="width: 10rem">
						<div class="btn-group float-right">&nbsp; &nbsp; &nbsp;
							<a class="btn btn-outline-success text align-self-center p-2" href="{{ route('dinteraction.edit',$dinteraction->id) }}" role="button">Edit</a> &nbsp; &nbsp;
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
