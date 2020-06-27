@extends('dashboard.layout')

@section('content_dashboard')

    <div class="container">

        <div class="card bg-light">
            <h5 class="card-header">Votre plante</h5>
            <div class="card-body">

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Vous ne pouvez modifier que le nom et le nom scientifique  de votre plante.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                @if(session()->has('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <form method="POST" action="{{ route('herbs.update', $herb->id) }}">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name"  required>{{ old('name', isset($value) ? $value : $herb->name) }}
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="texte">Sciname</label>
                        <textarea class="form-control{{ $errors->has('sciname') ? ' is-invalid' : '' }}" id="sciname" name="sciname" rows="3" required>{{ old('sciname', isset($value) ? $value : $herb->sciname) }}</textarea>
                        @if ($errors->has('sciname'))
                            <div class="invalid-feedback">
                                {{ $errors->first('sciname') }}
                            </div>
                        @endif
                    </div>

                    <br>

                    <button type="submit" class="btn btn-primary">Sauvagarde</button>
                </form>

            </div>
        </div>
    </div>

@endsection




