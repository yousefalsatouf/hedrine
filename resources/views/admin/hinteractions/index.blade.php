@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">

    <a class="btn btn-light" href="{{ route('newHerbTarget') }}" role="button">Créer une nouvelle Hinteraction Target</a>

</div>
<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-striped table-sm">
			<thead>
				<tr class="text-center">

					<th> Herb Name </th>
					<th> Target Name </th>
					<th> Notes </th>
					<th> Editor </th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($validatedHinteractions as $hinteraction)
				<tr class="text-center">

					<td>{{$hinteraction->herbs->name}}</td>
					<td>{{$hinteraction->targets->name }}</td>
					<td>{{$hinteraction->notes }}</td>
					<td>{{$hinteraction->users->name }}</td>
					<td style="width: 10rem">
						<div class="btn-group float-right">&nbsp; &nbsp; &nbsp;
							<a class="btn btn-outline-success text align-self-center p-2" href="{{ route('hinteraction.edit',$hinteraction->id) }}" role="button">Edit</a> &nbsp; &nbsp;
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
