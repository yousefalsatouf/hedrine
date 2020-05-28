@extends('layouts.master_dashboard')
@section('content_title')
	Plantes
@endsection
@section('content_dashboard')
	<div class="row" id="listerByAlphabetic">
    	<div class="col-12">
        	<div class="card">
				<div class="card-body">
					<h5 class="card-title">
						<ul class="nav justify-content-center">
							@foreach (range('A', 'Z') as $char) 
								<li class="nav-item">
									<a class="nav-link listAlphabet" href="" onclick="document.getElementById('location.href='pageurl.html';').innerHTML=Date()">
										{{ $char }}
									</a>
								</li>
							@endforeach
						</ul>
					</h5>
				</div>
			</div>
	 	</div>
		<div class="col-12">
			<div class="card-body " style="background-color: #fff">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th> Name</th>
							<th> Sci Name</th>
							<th> Forme(s) de la plante</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($herbs as $herb)
							<tr>
								<td>
									<a href="{{route('herbs.details', $herb->id)}} " class="add_style" ><strong>{{$herb->name}}</strong></a>
								</td>

								<td>{{$herb->sciname}}</td>
								
								<td>
									@foreach ($herb->herb_forms as $herb_form)
										@if(count ($herb->herb_forms ) == 0)
											{{ $herb_form->name }}
										@else
											{{ $herb_form->name }} 
										@endif
									@endforeach
								</td>
							</tr>
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

@section('alfab-js')
	<script>
		$(function() {
			$(document).ready(function() {
				$('#listerByAlphabetic thead tr').clone(true).appendTo( '#listerByAlphabetic thead' );
				$('#listerByAlphabetic thead tr:eq(1) th').each( function (i) {
					var title = $(this).text();
					$(this).html( '<input type="text" placeholder="Search '+title+'" />' );
			
					$( 'input', this ).on( 'keyup change', function () {
						if ( table.column(i).search() !== this.value ) {
							table
								.column(i)
								.search( this.value )
								.draw();
						}
					} );
				} );
			
				var table = $('#listerByAlphabetic').DataTable( {
					orderCellsTop: true,
					fixedHeader: true
				} );
			} );
		})
	</script>
@endsection