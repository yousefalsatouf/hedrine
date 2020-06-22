@extends('dashboard.layout')
@section('content_dashboard')
  <div class="container-fluid">
    <form id="deleteproduct" action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: none;">
      @csrf
      @method('DELETE')
    </form>
    <div class="row">
      <div class="col-sm-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
        <div class="card text-danger bg-light mb-3">
          <div class="card-body">
            <h5 class="card-title text-center mb-3">Vous êtes sur le point de supprimer "<strong class="text-danger">{{ $user->name }}</strong>"</h5>
              <p class="card-text">
                <a class="btn btn-outline-danger btn-lg btn-block" href="#" role="button"
                  onclick="event.preventDefault();
                  $('#deleteproduct').submit();">Je confirme la suppression</a>
                <a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('user.index') }}" role="button"></i> J'annule la suppression</a>
              </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
