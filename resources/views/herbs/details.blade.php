
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
						{{$plante->name}}
					</td>
					<td>
						{{$plante->sciname}}
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
				
				<tr>
					<td>
						
					</td>
					<td>
						{{$plante->sciname}}
					</td>
					<td>
						{{$plante->name}}
					</td>
					<td>
						{{$plante->name}}
					</td>
					<td>
						{{$plante->name}}
					</td>
				</tr>
				
			</tbody>
		</table>
	</div>
 </div>

 
	


@endsection


