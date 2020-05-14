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
						<li class="nav-item">
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
						</li>
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
					</tr>
				</thead>
				<tbody>
					@foreach ($herbs as $herb)
					<tr>
						<td>
							<a href="" class="add_style" ><strong>{{$herb->name}}</strong> </a>
						</td>
						<td>{{$herb->sciname}}</td>
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
	  });
	});
  </script>
@endsection
