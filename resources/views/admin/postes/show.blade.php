@extends('dashboard.layout')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->

@section('content_dashboard')
	<div class="row">
		<div class="col-12">
			<section class="content">
				<div class="container-fluid">
					@if(session()->has('message'))
						<div class="col s12">
							<div class="card purple darken-3">
								<div class="card-content white-text center-align">
								{{ session('message') }}
								</div>
							</div>
						</div>
					@endif
				    <div class="row">
						<!-- left column -->
						<div class="col-md-8 offset-md-2 ">
						<!-- general form elements -->
						<div class="card card-success">
							<div class="card-header">
								<h3 class="card-title"><strong> Details d un post </strong></h3>
							</div>
							<!-- /.card-header -->
                            <div class="card-body">
                                @foreach($post as $one)
                                    <h2>{{$one->title}}</h2>
                                    <b><i class="fa fa-user-edit"></i> {{$username}}</b>
                                    <hr>
                                    <strong>{{$one->body}}</strong>
                                @endforeach
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <div class="control-group">
                                    <div class="controls">
                                        <a class="btn btn-light" href="{{ route('post.index') }}" role="button"><i class="fas fa-arrow-left"></i> Retour à la liste des postes</a>
                                    </div>
                                </div>
                                <small class="float-right">{{ \Carbon\Carbon::parse($one->created_at)->diffForHumans() }}</small>
                            </div>
					   </div>
					   <!-- /.card -->
					</div>
				</div>
			</div>
		</div>
    </div>
@endsection

