@extends('admin.layout')

@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('main') 
    <div class="row justify-content-end" style="padding-bottom: 0.75rem">
		@if(Route::currentRouteName() === 'post.index')
			<a class="btn btn-primary" href="{{ route('post.create') }}" role="button">Créer un nouveau post</a>
		@endif
    </div>
  <div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-bordered table-hover table-sm">
			<thead>
				<tr>
					<th> id</th>
					<th> Name</th>
					<th> Family</th>
					<th> Editor</th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($drugs_and_families as $drug)
				<tr>
					<td>
						<a href="" class="add_style" ><strong>{{$drug->id}}</strong></a>
					</td>

					<td>{{$drug->name}}</td>
					<td>{{$drug->nom}}</td>
					<td>{{ }}</td>
					
					<td>
						<div class="btn-group float-right">
						&nbsp; &nbsp; &nbsp;<a class="btn btn-primary" href="" role="button"><i class="far fa-eye"></i>  View</a>  &nbsp; &nbsp;
							<a class="btn btn-success" href="{{ route('post.edit',$post->id) }}" role="button"><i class="fas fa-edit"></i> Edit </a> &nbsp; &nbsp;
							<a class="btn btn-danger" href="{{ route('post.destroy.alert',$post->id) }}" role="button"><i class="far fa-trash-alt"></i> Delete </a>
							
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
 </div>
@endsection

@section('js') 
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> 
  
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

