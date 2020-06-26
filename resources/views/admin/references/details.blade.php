
@extends('dashboard.layout')
@section('content_dashboard')

<div class="container">

	<h2 style="color: #e32;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;">DCI</h2>
	<br>
    <dl class="row" style="background: #f4f4f4">
		<dt class="col-sm-2" >Title</dt>
		<dd class="col-sm-3"> {{ $reference->title }}</dd>
	</dl>
	<dl class="row">
		<dt class="col-sm-2" >Authors</dt>
		 <dd class="col-sm-3"> {{ $reference->users->name }}</dd>
	</dl>
	<dl class="row" style="background: #f4f4f4">
		<dt class="col-sm-2" >Year</dt>

		 <dd class="col-sm-3"> {{ $reference->year }}</dd>
	</dl>
	<dl class="row">
		<dt class="col-sm-2" >Url</dt>
		 <dd class="col-sm-3"> {{ $reference->url }}</dd>
	</dl>

	<br>

    <div class="col-12">
			<h3 style="color: #2c6877;">Mécanismes impliqués</h3>

			<div class="card-body table-responsive" style="background-color: #fff" >
				<table id="dataTable_details" class="display responsive  table table-striped " width="100%">
					<thead>
						<tr>
							<th>Drug Name</th>
							<th>Target Name</th>
							<th>Effets</th>
							<th>Force</th>
							<th>Notes</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach ($reference->dinteraction_has_references as $dinteraction_has_reference)
							@foreach ($dinteraction_has_reference->dinteractions as $dinteraction)
								@foreach ($dinteraction->effects as $effect)
									@foreach($dinteractions->forces as $force)
									<tr>
										<th scope="row">
											{{$dinteractions->references->name}}
											<h6>({{$dinteractions->targets->name}})</h6>
										</th>
										<td >{{$effect->name}}</td>
										<td>{{$dinteractions->forces->title}}</td>
										<td>{{$dinteractions->notes}}</td>
										{{-- <td >
											<a href="">
												{{$reference->year}} , {{$reference->edition}};<br>
											</a>
											<a href=" {{$reference->url}} ">
												<i class="fas fa-globe-europe"></i>
											</a>
										</td> --}}
									</tr>
								@endforeach
							@endforeach
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

@endsection

@section('dashboard-js')
<script>
	$(function () {

	  $('#dataTable_details').DataTable({ 
		"paging": false,
		"lengthChange": true,
		"searching": true,
		"ordering": true,
		"info": false,
		"autoWidth": true,
		"responsive": true,
		"language":
		{
			"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
        }
	  });
	});
  </script>
@endsection


