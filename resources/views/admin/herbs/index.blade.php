@extends('dashboard.layout')

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
	@if(Route::currentRouteName() === 'herb.index')
		<a class="btn btn-primary" href="{{ route('herb.create') }}" role="button">Créer une nouvelle plante</a>
	@endif
</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-bordered table-hover table-sm">
			<thead>
				<tr class="text-center">
					<th> nom</th>
					<th>Sciname</th>
					<th>Formes de la plante</th>
					<th> Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($herbs as $herb)
				<tr>
					<td>
						<a href="" class="add_style" ><strong>{{$herb->name}}</strong></a>
					</td>
					<td>
						<a href="" class="add_style" ><strong>{{$herb->sciname}}</strong></a>
					</td>
					<td>
						<div class="btn-group float-right">
						&nbsp; &nbsp; &nbsp;<a class="btn btn-primary" href="" role="button"><i class="far fa-eye"></i>  View</a>  &nbsp; &nbsp;
							<a class="btn btn-success" href="{{ route('herb.edit',$herb->id) }}" role="button"><i class="fas fa-edit"></i> Edit </a> &nbsp; &nbsp;
							<a class="btn btn-danger" href="{{ route('herb.destroy.alert',$herb->id) }}" role="button"><i class="far fa-trash-alt"></i> Delete </a>

						</div>
					</td>
				</tr>

					<!-- 
					START COMMENT 
					Les variables $lastHerb et $numberOfTimes_herbForms ont été déclarées dans le controleur Herb methode indes
					la $numberOfTimes_herbForms sert à compter le nombre de qu'on a une differente forme de plande pour plant x La $lastHerbe y est stockée l'ID de la dernier herb.
					On verifie si l'ID stocké dans $lastHerb est different de l'Herb recu à chaque boucle, si oui on reinitialise $numberOfTimes_herbForms pour qu'il se reincrémente au tant de fois qu'on a une nouvelle forme de plante
					-->
					@php
						if($lastHerb != $herb->id )
						$lastHerb = $herb->id;
						$numberOfTimes_herbForms = 0;
					@endphp
							
					<tr class="text-center">
						<td>
							<a href="" class="add_style" ><strong>{{$herb->name}}</strong></a>
						</td>
						<td>
							<a href="" class="add_style" ><strong>{{$herb->sciname}}</strong></a>
						</td>
						<td>
							@foreach ($herb->herb_forms as $herb_form)
							<!-- START COMMENT tant que l' Herb ne change $numberOfTimes_herbForms continue à incrémenté au tant de fois q'il des forme herb pour l'Herb Y -->
								@php
									$numberOfTimes_herbForms++; 
								@endphp
							
										
							<!-- START COMMENT 
							On verifie que le nombre de forme herb de Herb Y soit inférieur à 1 et que la $numberOfTimes_herbForms qui s'incremente à cahque nouvelle forme herb de l'Herb Y soit inférieur au nombre de forme herb de l'Herb Y
							et on affiche les noms de la forme herb de l'Herb Y plus "-" sinon on affiche juste les noms de la forme herb de l'Herb Y
							-->
								@if(count ($herb->herb_forms) > 1 && $numberOfTimes_herbForms < count ($herb->herb_forms) )
												{{$herb_form->name}} -
									@else
										{{ $herb_form->name }}
									@endif
							@endforeach
						</td>
						<td>
							<div class="btn-group float-right">
							&nbsp; &nbsp; &nbsp;<a class="btn btn-primary" href="" role="button"><i class="far fa-eye"></i>  View</a>  &nbsp; &nbsp;
								<a class="btn btn-success" href="{{ route('herb.edit',$herb->id) }}" role="button"><i class="fas fa-edit"></i> Edit </a> &nbsp; &nbsp;
								<a class="btn btn-danger" href="{{ route('herb.destroy.alert',$herb->id) }}" role="button"><i class="far fa-trash-alt"></i> Delete </a>
								
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
