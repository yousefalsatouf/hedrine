@extends('dashboard.layout')

@section('content_dashboard')

<div class="container">

	<h2 style="color: #e32;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;">Plante</h2>
	<br>
    <dl class="row" style="background: #f4f4f4">
		<dt class="col-sm-2" >Nom</dt>
		<dd class="col-sm-3"> {{ $herb->name }}</dd>

	</dl>
	<dl class="row">
		<dt class="col-sm-2" >Nom scientifique</dt>
		 <dd class="col-sm-3"> {{ $herb->sciname }}</dd>
	</dl>
	   <br>

	<div class="row">
		<div class="col-md-4 ">
			<h3 style="color: #777;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;font-size: 160%;font-weight: bold">Intensité d interaction</h3>
			<div class="table-responsive-sm">
				<table class="table table-bordered table-hover table-sm text-center">
					<tbody>
						<tr style="background-color: #FF0000">
							<th>Forte</th>
						</tr>
						<tr style="background-color: #FFCC33">
							<th>Moyenne</th>
						</tr>
						<tr  style="background-color: #EEE8AA">
							<th>Faible</th>
						</tr>
						<tr  style="background-color: #CCFF99">
							<th>Aucune</th>
						</tr>
						<tr  style="background-color: #FFCCFF">
							<th>Inconnue</th>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br>



		<div class="col-12">
			<h3 style="color: #2c6877;">Mécanisme impliqués</h3>
			<br>
			<div class="card-body table-responsive" style="background-color: #fff" >
				<table id="dataTable_details" class="table table-striped table-bordered " width="100%">
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
						@foreach ($herb->hinteractions as $hinteraction)

									<tr>
										<th scope="row">
											{{$hinteraction->targets->name}}
											<h6>({{$hinteraction->targets->targetype->name}})</h6>
										</th>
										<td class="
											@if($hinteraction->forces->color == "rouge")
												force
												@elseif($hinteraction->forces->color == "orange")
													moyenne
												@elseif($hinteraction->forces->color == "jaune")
													faible
												@elseif($hinteraction->forces->color == "vert")
													aucune
												@elseif($hinteraction->forces->color == "mauve")
													inconnue
                                            @endif">
                                             @foreach($hinteraction->effects as $effect)
                                                {{ $effect->name}}
                                             @endforeach

										</td>
										<td class="
											@if($hinteraction->forces->color == "rouge")
													force
												@elseif($hinteraction->forces->color == "orange")
													moyenne
												@elseif($hinteraction->forces->color == "jaune")
													faible
												@elseif($hinteraction->forces->color == "vert")
													aucune
												@elseif($hinteraction->forces->color == "mauve")
													inconnue
											@endif">

												{{$hinteraction->forces->name}}

										</td>
										<td class="
											@if($hinteraction->forces->color == "rouge")
												force
												@elseif($hinteraction->forces->color == "orange")
													moyenne
												@elseif($hinteraction->forces->color == "jaune")
													faible
												@elseif($hinteraction->forces->color == "vert")
													aucune
												@elseif($hinteraction->forces->color == "mauve")
													inconnue
											@endif">
												{{$hinteraction->notes}}
										</td>
										<td class="
											@if($hinteraction->forces->color == "rouge")
												force
												@elseif($hinteraction->forces->color == "orange")
												moyenne
												@elseif($hinteraction->forces->color == "jaune")
												faible
												@elseif($hinteraction->forces->color == "vert")
												aucune
												@elseif($hinteraction->forces->color == "mauve")
													inconnue
											@endif">

                                            @foreach($hinteraction->references as $reference)
                                                    <a href="">{{$reference->year}} , {{$reference->edition}};</a>
                                                    <a href=" {{$reference->url}} ">
                                                        <i class="fas fa-globe-europe"></i>
                                                    </a><br>
                                            @endforeach
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


