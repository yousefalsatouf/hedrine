@extends('layouts.master_dashboard')
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
						@foreach (range('A', 'Z') as $char) 
							<li class="nav-item">
								<a class="nav-link listAlphabet" href="">
									{{ $char }}
								</a>
							</li>
						@endforeach
						{{-- <li class="nav-item">
							<a class="nav-link " href="#">A</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">B</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">C</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">D</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">E</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">F</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">G</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">H</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">I</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">J</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">K</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">L</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">M</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">N</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">O</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">P</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Q</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">R</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">S</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">T</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">U</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">V</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">W</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">X</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">Y</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Z</a>
						</li> --}}
					</ul>
				</h5>
			</div>
		</div>
	 </div>
	 <div class="col-12">
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
					@foreach ($targets as $target)
					<tr>
                  <td class="style_table">{{ $target->targetype->name }}</td>
						<td>
							<a class="style_a" href=""><strong>{{$target->name}}</strong> </a>
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
