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
                            {{--these go to HerbController with new function called filterByChar--}}
                            <li class="nav-item">
                                {{--this condition is about changing color if all herbs is selected or just by char--}}
                                @if(isset($herb))
                                    <a class="all nav-link listAlphabet" href="{{url('herb')}}">
                                        All
                                    </a>
                                @else
                                    <a class="all nav-link listAlphabet active-char" href="{{url('herb')}}">
                                        <b>All</b>
                                    </a>
                                @endif
                            </li>
                            @foreach (range('A', 'Z') as $char)
                                <li class="nav-item">
                                    <a class="nav-link listAlphabet {{isset($herbChar) && $herbChar===$char?"active-char":""}}" href="{{url('herb/'.$char)}}">
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
                    {{--this foreach is changed according our need to display herbs by  filtering char --}}
						@foreach (isset($herb)?$herb:$herbs as $herb)
						<!--
							START COMMENT

							Les variables $lastHerb et $numberOfTimes_herbForms ont été déclrée dans le controleur Herb methode indes
							la $numberOfTimes_herbForms sert à compter le nombre de qu'on a une differente forme de plande pour plant x
							La $lastHerbe y est stockée l'ID de la dernier herb.
							On verifie si l'ID stocké dans $lastHerb est different de l'Herb recu à chaque boucle, si oui on reinitialise
							$numberOfTimes_herbForms pour qu'il se reincrémente au tant de fois qu'on a une nouvelle forme de plante
						-->
							@php
								if($lastHerb != $herb->id )
									$lastHerb = $herb->id;
									$numberOfTimes_herbForms = 0;
							@endphp
						<!-- END COMMENT -->
							<tr>
								<td>

									<a href="{{route('herbs.details', $herb->id)}} " class="add_style" ><strong class="text-success">{{$herb->name}}</strong></a>
								</td>

								<td>{{$herb->sciname}}</td>

								<td>
									@foreach ($herb->herb_forms as $herb_form)
									<!-- START COMMENT tant que l' Herb ne change $numberOfTimes_herbForms continue à incrémenté au tant de fois q'il des forme herb pour l'Herb Y -->
										@php
											$numberOfTimes_herbForms++;
										@endphp
									<!-- END COMMENT -->

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
        //console.log('hello world');
        //this function is responsible for activating class on clicking on it the class called active-char
        //still work on it
        //start
        $('.listAlphabet').on('click', function(e) {
            //window.localStorage.setItem( 'active', 'active-char');
            let ele = $(e.target);
            //let className = JSON.parse( window.localStorage.getItem( 'active' ));
            //console.log(className);
            ele.addClass('active-char');
        });

        //end

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
