@extends('dashboard.layout')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->
@section('content_title')
	DCI
@endsection
@section('content_dashboard')
	<div class="row">
    <div class="col-12">
        <div class="card">
			<div class="card-body">
				<h5 class="card-title">

                    <ul class="nav">
                        {{--these go to DrugController with new function called filterByChar--}}
                        <li class="nav-item all">
                            <a class="nav-link listAlphabet {{isset($drug)&&$drug?'':'active-char'}}" href="{{url('drug')}}">
                                ALL
                            </a>
                        </li>
                        @foreach (range('A', 'Z') as $char)
                            <li class="nav-item"style="max-width: 3.4%">
                                <a class="nav-link {{in_array($char, $resultChars)?'listAlphabet':'disabled-char'}} {{isset($drugChar) && $drugChar===$char?"active-char":""}}" href="{{url('drug/'.$char)}}">
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
            <h1 class="m-0 text-dark">DCI</h1>
        </div><!-- /.col -->
		<div class="card-body " style="background-color: #fff">
            <table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th> Nom</th>
						<th> Famille</th>
					</tr>
				</thead>
				<tbody>
					@foreach (isset($drug)?$drug:$drugs as $drug)
					<tr>
						<td>
							<a href="{{route('drugs.details', $drug->id)}}" class="add_style" ><strong class="text-success">{{$drug->name}} <span>({{$drug->routes->name}})</span></strong> </a>
						</td>
					<td>{{optional($drug->drug_family)->name}}</td>
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
