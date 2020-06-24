<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/hedrine.css') }}">
        <title>Page d acceuil</title>
        @include('cookieConsent::index')
    </head>
    <body>

            <div class="container-fluid" style="padding-top: 2rem;">
                <div class="row justify-content-end ">
                    <div class="col-3">
                        <img src="{{ asset('images/ulb-icon.png') }}" class="img-fluid d-block mx-auto mx-md-0" alt="Responsive image">
                    </div>
                     <div class="col-5">
                        &nbsp;&nbsp;
                     </div>
                    <div class="col-4 ">
                        <img src="{{ asset('images/universite-grenoble.png') }}" class="img-fluid" style="width: 45%;margin-left:12rem" alt="Responsive image">
                    </div>
                </div>
            </div>

        <div class="container-fluid mb-3">
           <div class="text-center">
                <img src="{{ asset('images/hedrine6b.png') }}" class="img-fluid" alt="Responsive image">
            </div>
        </div>



        <div class="container-fluid">
            <div class="container">
                <h5>

                    HEDRINE recense les études cliniques et cas rapportés (case reports) d interactions entre des plantes médicinales
                    et des médicaments allopathiques. Figurent également des interactions potentielles via des mécanismes
                    pharmacodynamiques ou pharmacocinétiques.
                </h5>
                <p>
                    Hedrine est toujours en cours de developpement. Merci de votre patience.
                </p>

                <div class="row">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                        <h4 class="text-success">
                            Sources
                        </h4>
                        <p>Littérature scientifique, articles parus dans des revues internationales avec comité de lecture ou
                            professionnelles (monographies Thériaque®, ...)
                        </p>
                    </article>

                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                        <h4 class="text-success">
                            Contrôles et validation
                        </h4>
                        <p>
                            Site réalisé et maintenu par F. Souard (Maitre de Conférences en Pharmacognosie - UGA) et A.
                            Fortuné (Ingénieur Pharmacie - UGA).
                            Ce site est dédié à Céline Villier (Praticien Hospitalier, Centre Régional de Pharmacovigilance de Grenoble).
                        </p>
                    </article>
                </div>

                <div class="row">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                        <h4 class="text-success">
                            Accès
                        </h4>
                        <p>
                            Site hébergé par l Université Libre de Bruxelles.
                            Accés limité aux professionnels de santé.
                        </p>
                        <p>
                            - Renseignements : hedrine [a] ulb.be
                        </p>
                    </article>

                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">

                        <div class="row">

                            <div class='col-6 col-sm-6 col-md-6 col-lg-6'>
                              <div class="btn-group buttons">
                                  <a href="login"><button type="button" class="btn btn-outline-success btn-lg" id="target1">Connexion</button></a>
                              </div>
                            </div>
                            <div class='col-6 col-sm-6 col-md-6 col-lg-6'>
                              <div class="btn-group buttons"><a href="register"><button type="button" class="btn btn-outline-info btn-lg">S'enregistrer</button></a></div>
                            </div>

                        </div>
                        <br>
                    </article>
                </div>
            </div>
        </div>


        <footer class="bg-info container-fluid d-inline-block footer">
           <div class="container" id="footerDiv">
               <div class="row" id="test">
                   <div class="col-12 col-sm-6 col-md-6 align-middle">
                       <a class="navbar-brand" href="#" style="color: white">Hedrine : Herb Drug Interaction Database brand</a>
                    </div>
                    <div class="col-9 col-sm-6 col-md-6 align-middle" id="test">
                        <ul class="nav justify-content-end align-middle" id="icon">
                            <li nav-item><img src="{{asset('images/Plant-icon_32.png')}}" alt="plantes"></li>
                            <li>{{$validatedHerb->count()}}</li>&nbsp; &nbsp;
                            <li nav-item><img src="{{asset('images/pills-5-icon_32.png')}}" alt="drugs"></li>
                            <li>{{$drugs->count()}}</li>&nbsp; &nbsp;
                            <li nav-item><img src="{{asset('images/Refresh-bicolor-icon_32.png')}}" alt="targets"></li>
                            <li>{{$targets->count()}}</li>&nbsp; &nbsp;
                            <li nav-item><img src="{{asset('images/Document-icon_32.png')}}" alt="references"></li>
                            <li>{{$references->count()}}</li>
                        </ul>
                    </div>
               </div>
           </div>
        </footer>
        @include('sweetalert::alert')
    </body>
</html>
