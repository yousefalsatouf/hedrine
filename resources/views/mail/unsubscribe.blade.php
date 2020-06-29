@extends('layouts.appmail')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11 text-center">
                <div class="card">
                    <div class="card-title">
                        <h2>Bonjour<strong> {{$username}},</strong></h2>
                    </div>
                    <div class="card-body">
                        <hr>
                        <blockquote class="blockquote">
                            <p class="mb-0">
                            <h4>
                                Nous vous envoyons ce dernier mail suite à la suppression de votre compte sur le portail Hedrine.

                                En tant que lecteur, vos données  à caractère personnel ont été définitivement supprimé.

                                Si vous souhaitez à nouveau utiliser le portail Hedrine, vous devrez créer un nouveau compte.

                                Nous vous remercions d’avoir utilisé le portail Hedrine.

                                L’équipe Hedrine
                            </h4>
                            </p>
                        </blockquote>
                        <hr>
                        <h3><strong>Cordialement,</strong></h3>
                    </div>
                    <div class="card-footer">
                        <h3>Adminstrateur du site</h3>
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
