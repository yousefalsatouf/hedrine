@extends('layouts.master_dashboard')

<!-- @yield('content_title') créé dans la view master_dashboard.blade.php-->

@section('content_dashboard')
	<div class="row">
    
	 <div class="col-12">
		<section class="content">
			<div class="container-fluid">
			  <div class="row">
				<!-- left column -->
				<div class="col-md-6">
				  <!-- general form elements -->
				  <div class="card card-primary">
					<div class="card-header">
					  <h3 class="card-title">Ajouter un nouveau poste</h3>
					</div>
					<!-- /.card-header -->
					<!-- form start -->
				<form role="form" method="POST" action="add_post">
					  <div class="card-body">
						<div class="form-group">
						  @csrf
						  <label for="title">Titre du poste</label>
						  <input type="text" class="form-control" id="title" name="title" placeholder="Titre du poste" required>
						</div>
						<div class="form-group">
						  <label for="body">Message du poste</label>
						  <textarea rows="10" cols="15" class="form-control" id="body" name="body" placeholder="Texte du poste" required></textarea>
						</div>
						
						
					  <!-- /.card-body -->
	  
					  <div class="card-footer">
						<button type="submit" class="btn btn-primary">Ajouter le nouveau poste</button>
					  </div>
					</form>
				  </div>
				  <!-- /.card -->
	 </div>
  </div>
@endsection

