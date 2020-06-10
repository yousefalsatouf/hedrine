@extends('dashboard.layout')
@section('content_dashboard')

<div class="container">

	<h2 style="color: #e32;font-family: 'Gill Sans','lucida grande', helvetica, arial, sans-serif;">Classe Therapeutique</h2>
	<br>
    <dl class="row" style="background: #f4f4f4">
		<dt class="col-sm-2" >Nom</dt>
		<dd class="col-sm-10"> {{ $drugfamily->name }}</dd>

	</dl>
</div>
<div class="col-12">
	<h2 style="color: #2c6877;">DCI</h2>

</div>

@endsection




