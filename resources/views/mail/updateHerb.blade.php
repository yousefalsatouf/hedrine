@extends('layouts.appmail')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 text-center">
            <div class="card">
                <div class="card-header"> <h2>Bonjour<strong> {{$username}},</strong></h2> </div>
                <div class="card-title">
                    <h3>  Nous estimons qu il manque quelques précisions sur les points ci-dessus :
                        (<small>Veuillez corriger les erreurs et soumettre votre plante à nouveau</small>)
                    </h3>
                </div>
                <div class="card-body">
                    <hr>
                    <blockquote class="blockquote">
                      <p class="mb-0">
                          <h3>{{ $msg }}</h3>
                        </p>
                        <div>
                            <a href="route('herb.show', $herb->id)" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Voir cette plante</a>
                        </div>
                    </blockquote>
                    <hr>
                    <h3><strong>Cordialement,</strong></h3>
                </div>
                <div class="card-footer">
                    <h3>{{$admin->name}} {{$admin->firstname}}</h3>
                    <img src="{{ asset('images/pharma.png') }}" style="margin-top: -19px" class="img-fluid d-block mx-auto mx-md-0"  alt="Responsive image">
                    <address style="color: green">
                        <h3>Hedrine</h3>
                       <ins>ULB- Faculte de Pharmacie</ins><br>
                       Télephone: 026505335<br>
                        Boulevard du Triomphe, 9040, 1O50 Ixelles<br>
                        Bruxelles - Belgique
                    </address>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
