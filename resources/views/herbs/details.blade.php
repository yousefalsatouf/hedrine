
@extends('layouts.master_dashboard')
@section('content_title')


<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>  Nom </th>
					<th>  Nom scientifique</th>
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<td>
						{{$informations_plante[0]->hname}}
					</td>
					<td>
						{{$informations_plante[0]->sciname}}
					</td>
				</tr>
			</tbody>
		</table>
	</div>
 </div>

<div class="col-12">
	<div class="card-body " style="background-color: #fff">
		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th> </th>
					<th> Effets</th>
					<th> Intensité</th>
					<th> Note</th>
					<th> Références</th>
				</tr>
			</thead>
			<tbody>
				@foreach($informations_plante as $information_plante)
				<tr>
					<td>
						{{$information_plante->targetname}}
					</td>
					<td>
						@foreach ($hinteractions_has_effects as $effect)
							{{$effect->name}}	
						@endforeach
					</td>
					<td>
						{{$information_plante->force_name}}
					</td>
					<td>
						{{$information_plante->note}}
					</td>
					<td>
						
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
 </div>

 
	


@endsection


