@extends('layouts.master_dashboard')


@section('content_dashboard') 
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
					<th> title</th>
					<th> Body</th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($posts as $post)
				<tr>
					<td>
						<a href="" class="add_style" ><strong>{{$post->title}}</strong></a>
					</td>

					<td>{{$post->body}}</td>
					
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

