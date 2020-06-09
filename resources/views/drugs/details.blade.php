
@extends('dashboard.layout')
@section('content_dashboard')

<div class="container">

	<h2 style="color: #e32;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;">DCI</h2>
	<br>
    <dl class="row" style="background: #f4f4f4">
		<dt class="col-sm-2" >Nom</dt>
		<dd class="col-sm-3"> {{ $drug->name }}</dd>

	</dl>
	<dl class="row">
		<dt class="col-sm-2" >Voie</dt>
		 <dd class="col-sm-3"> {{ $drug->route }}</dd>
	</dl>
	<dl class="row" style="background: #f4f4f4">
		<dt class="col-sm-2" >Famille</dt>

		 <dd class="col-sm-8"> <strong><a href="{{route('drugs.family', $drug->id)}}" style="color: #003d4c; text-decoration: underline; font-weight: bold;">{{ $drug->drug_family->name }}</a></strong></dd>
	</dl>

	<br>

    <div class="col-12">
			<h3 style="color: #2c6877;">Mécanismes impliqués</h3>

			<div class="card-body table-responsive" style="background-color: #fff" >
				<table id="dataTable_details" class="display responsive  table table-striped " width="100%">
					<thead>
						<tr>
							<th></th>
							<th>Effets</th>
							<th>Intensité</th>
							<th>Notes</th>
							<th>Références</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($drug->dinteractions as $dinteractions)
							@foreach ($dinteractions->effects as $effect)
								@foreach ($dinteractions->references as $reference)
									<tr>
										<th scope="row">
											{{$dinteractions->targets->name}}
											<h6>({{$dinteractions->targets->targetype->name}})</h6>
										</th>
										<td >{{$effect->name}}</td>
										<td>{{$dinteractions->forces->name}}</td>
										<td>{{$dinteractions->notes}}</td>
										<td >
											<a href="">
												{{$reference->year}} , {{$reference->edition}};<br>
											</a>
											<a href=" {{$reference->url}} ">
												<i class="fas fa-globe-europe"></i>
											</a>
										</td>
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


