
@extends('layouts.master_dashboard')
@section('content_dashboard')

<div class="container">
    
	<h2 style="color: #e32;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;">Mécanisme</h2>
	<br>
    <dl class="row" style="background: #f4f4f4">
		<dt class="col-sm-2" >Nom</dt>
		<dd class="col-sm-3"> {{ $target->name }}</dd>
			
	</dl>
	<dl class="row">
		<dt class="col-sm-2" >Nom long</dt>
		 <dd class="col-sm-3"> {{ $target->long_name }}</dd>
	</dl>

	<dl class="row" style="background: #f4f4f4">
		<dt class="col-sm-2" >Type de cible</dt>
		 <dd class="col-sm-3"> {{ $target->targetype->description }} ({{ $target->targetype->name }})</dd>
	</dl>
	 
	<dl class="row">
		<dt class="col-sm-2" >Notes</dt>
		 <dd class="col-sm-6"> {{ $target->notes }}</dd>
	</dl>
	<br>
	<div class="col-12">
		<h3 style="color: #2c6877;">DCI concernées</h3>
	
		<div class="card-body table-responsive" style="background-color: #fff" >
			<table id="dci_concern" class="display responsive " width="100%">
				<thead>
					<tr>
						<th>Noms</th>
						<th>Effets</th>
						<th>Intensité</th>
						<th>Notes</th>
						<th>Références</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($target->dinteractions as $dinteraction)
						@foreach ($dinteraction->effects as $effect)
							@foreach ($dinteraction->references as $reference)
								<tr>
									<th scope="row">
										{{$dinteraction->targets->name}}
										<h6>({{$dinteraction->targets->targetype->name}})</h6>
									</th>
									<td >{{$effect->name}}
									</td>
									<td >

											{{$dinteraction->forces->name}}
														
									</td>
									<td >
											{{$dinteraction->notes}}
									</td>
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
	<div class="col-12">
		<h3 style="color: #2c6877;">Plantes concernées</h3>
		<br>
		<div class="card-body table-responsive" style="background-color: #fff" >
			<table id="hci_concern" class="display responsive " width="100%">
				<thead>
					<tr>
						<th>Noms</th>
						<th>Effets</th>
						<th>Intensité</th>
						<th>Notes</th>
						<th>Références</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($target->hinteractions as $hinteraction)
						@foreach ($hinteraction->effects as $effect)
							@foreach ($hinteraction->references as $reference)
								<tr>
									<th scope="row">
										{{$hinteraction->targets->name}}
										<h6>({{$hinteraction->targets->targetype->name}})</h6>
									</th>
									<td >{{$effect->name}}
									</td>
									<td >

											{{$hinteraction->forces->name}}
														
									</td>
									<td >
											{{$hinteraction->notes}}
									</td>
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
</div>
@endsection

@section('dashboard-js')
<script>
	$(function () {

	  $('#dci_concern').DataTable({
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

	$(function () {

	$('#hci_concern').DataTable({
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

