@extends('layouts.master_dashboard')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
	@if(Route::currentRouteName() === 'drug.index')
		<a class="btn btn-primary" href="{{ route('drug.create') }}" role="button">Créer un nouveau DCI</a>
	@endif
</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-bordered table-hover table-sm">
			<thead>
				<tr>
					<th> Name </th>
					<th> Family </th>
					<th> AtcLevel4 </th>
					<th> Route </th>
					<th> Editor </th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($drugs as $drug)
				<tr>
					<td>
						<a href="" class="add_style" ><strong>{{$drug->name}}</strong></a>
					</td>
					<td>{{$drug->drug_family->name}}</td>
					<td>{{ $drug->atc_level4s->name }}</td>
					<td>{{ $drug->routes->name }}</td>
					<td>{{ $drug->users->name }}</td>
					<td>
						<div class="btn-group float-right">
						&nbsp; &nbsp; &nbsp;<a class="btn btn-primary" href="" role="button"><i class="far fa-eye"></i>  View</a>  &nbsp; &nbsp;
							<a class="btn btn-success" href="{{ route('drug.edit',$drug->id) }}" role="button"><i class="fas fa-edit"></i> Edit </a> &nbsp; &nbsp;
							<a class="btn btn-danger" href="{{ route('drug.destroy.alert',$drug->id) }}" role="button"><i class="far fa-trash-alt"></i> Delete </a>
							
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