@extends('dashboard.layout')
@section('content_title')
	Plantes
@endsection
@section('content_dashboard')
   <div class="row">
    <div class="col-12">
        <div class="card">
			<div class="card-body">
				<h5 class="card-title">
					<ul class="nav justify-content-center">
                        {{--these go to TargetController with new function called filterByChar--}}
                        <li class="all nav-item">
                            <a class="nav-link listAlphabet {{isset($target)&&$target?'':'active-char'}}" href="{{url('target')}}">
                                ALL
                            </a>
                        </li>
                        @foreach (range('A', 'Z') as $char)
                            <li class="nav-item" style="max-width: 3.4%">
                                <a class="nav-link {{in_array($char, $resultChars)?'listAlphabet':'disabled-char'}} {{isset($targetChar) && $targetChar===$char?"active-char":""}}" href="{{url('target/'.$char)}}">
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
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Targets</h1>
        </div><!-- /.col -->
		<div class="card-body " style="background-color: #fff">

            <table id="target" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th> Type</th>
						<th> Nom</th>
						<th> Nom Long</th>
						<th> Notes</th>
					</tr>
				</thead>
				<tbody>
					@foreach (isset($target)?$target:$validTargets as $target)
					<tr>
                  <td class="style_table">{{ $target->targetype->name }}</td>
						<td>
							<a class="style_a" href="{{route('targets.details', $target->id)}}"><strong class="text-success">{{$target->name}}</strong> </a>
						</td>
						<td>{{$target->long_name}}</td>
						<td>{{$target->notes}}</td>
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

	  $('#target').DataTable({
		"paging": true,
		"lengthChange": false,
        "searching": true,
        "order": [[ 1, "asc" ]],
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
