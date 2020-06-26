@extends('dashboard.layout')
@section('content_title')
	Plantes
@endsection

@section('content_dashboard')
<div class="row justify-content-end" style="padding-bottom: 0.75rem">
	@if(Route::currentRouteName() === 'herb.index')
		<a class="btn btn-light" href="{{ route('herb.create') }}" role="button">Créer une nouvelle plante</a>
	@endif
</div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-striped table-sm">
			<thead>
				<tr class="text-center">
					<th> nom</th>
					<th>Sciname</th>
                    <th>Formes de la plante</th>
                    <th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($validatedHerb as $herb)
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
							<a href="" class="add_style" ><strong class="text-dark">{{$herb->name}}</strong></a>
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
<<<<<<< HEAD
                        @if((auth()->user()->role_id == 1) || (auth()->user()->role_id == 2) || (auth()->user()->role_id == 3))
                            <td style="width: 10rem">
                                    <div class="btn-group float-right">
                                        <a class="btn btn-outline-success text-center text align-self-center p-2" href="{{ route('herb.edit',$herb->id) }}" role="button">Edit</a> &nbsp; &nbsp;
                                    </div>
                            </td>
                        @endif
						</td>
=======

                        <td style="width: 10rem">
                            <div class="btn-group float-right">
                                <a class="btn btn-outline-success text-center text align-self-center p-2" href="{{ route('herb.edit',$herb->id) }}" role="button">Edit</a> &nbsp; &nbsp;
                                @if(!auth()->user()->role_id == 3)
                                    <a class="btn btn-outline-danger text align-self-center p-2" href="{{ route('herb.destroy.alert',$herb->id) }}" role="button">Delete</a>
                                @endif
                            </div>
                        </td>
>>>>>>> aef1f9ab40eeeccda4e95ade1a2b7c08cf4745e0
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
