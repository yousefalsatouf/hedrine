@extends('dashboard.layout')
@section('content_dashboard')
  <div class="container-fluid">
    <form id="deleteproduct" action="{{ route('reference.destroy', $reference->id) }}" method="POST" style="display: none;">
      @csrf
      @method('DELETE')
    </form>
    <div class="row">
      <div class="col-sm-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
        <div class="card text-white bg-light mb-3">
          <div class="card-body">
            <h5 class="card-title text-center mb-3">Vous êtes sur le point de supprimer la référence "<strong>{{ $reference->name }}</strong>"</h5>
            <p class="card-text">
              <a class="btn btn-outline-danger btn-lg btn-block" href="#" role="button"
              onclick="event.preventDefault();
              $('#deleteproduct').submit();"
              >Je confirme la suppression</a>
              <a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('reference.index') }}" role="button">J'annule la suppression</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
