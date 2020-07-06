@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
    @if((Route::currentRouteName() === 'herb.index') && (auth()->user()->role_id == 1) || (auth()->user()->role_id == 2) || (auth()->user()->role_id == 3) )
    <a class="btn btn-light" href="{{ route('herb.create') }}" role="button">Créer une nouvelle plante</a>
@endif
</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-striped table-sm">
			<thead>
				<tr class="text-center">
					<th> Name </th>
					<th> Family </th>
					<th> AtcLevel4 </th>
					<th> Route </th>
					<th> Editor </th>
                    @if((auth()->user()->role_id == 1) || (auth()->user()->role_id == 2) || (auth()->user()->role_id == 3))
                    <th> Actions</th>
                    @endif
				</tr>
			</thead>
			<tbody>
				@foreach ($drugs as $drug)
				<tr class="text-center">
					<td>
						<a href="" class="add_style" ><strong class="text-dark">{{$drug->name}}</strong></a>
					</td>
					<td>{{optional($drug->drug_family)->name}}</td>
					<td>{{ $drug->atc_level4s->name }}</td>
					<td>{{ $drug->routes->name }}</td>
                    <td>{{ optional($drug->user)->name }}</td>

                    @if((auth()->user()->role_id == 1) || (auth()->user()->role_id == 2) || (auth()->user()->role_id == 3))
                        <td style="width: 10rem">
                            <div class="btn-group float-right">&nbsp; &nbsp; &nbsp;
                                <a class="btn btn-outline-success text align-self-center p-2" href="{{ route('drug.edit',$drug->id) }}" role="button">Edit</a> &nbsp; &nbsp;
                            </div>
                        </td>
                    @endif
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
