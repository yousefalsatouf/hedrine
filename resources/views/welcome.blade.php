<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Page d'acceuil</title>
        @include('cookieConsent::index')
    </head>
    <body>
        <header>
           
        </header>
        <div class="container-fluid mb-3">
           <div class="text-center">
                <img src="{{ asset('images/ulb-icon.png') }}" class="img-fluid d-block mx-auto mx-md-0" alt="Responsive image">
                <img src="{{ asset('images/hedrine6b.png') }}" class="img-fluid" alt="Responsive image">
            </div>
        </div>



        <div class="container-fluid">
            <div class="container">
                <h5>
                    
                    HEDRINE recense les études cliniques et cas rapportés (case reports) d'interactions entre des plantes médicinales
                    et des médicaments allopathiques. Figurent également des interactions potentielles via des mécanismes
                    pharmacodynamiques ou pharmacocinétiques.
                </h5>
                <p>
                    Hedrine est toujours en cours de developpement. Merci de votre patience.
                </p>

                <div class="row">
                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                        <h4 style="color:#ff0000">
                            Sources
                        </h4>
                        <p>Littérature scientifique, articles parus dans des revues internationales avec comité de lecture ou
                            professionnelles (monographies Thériaque®, ...)
                        </p>
                    </article>

                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                        <h4 style="color:#ff0000">
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
                        <h4 style="color:red">
                            Accès
                        </h4>
                        <p>
                            Site hébergé par l'Université Libre de Bruxelles.
                            Accés limité aux professionnels de santé.
                        </p>
                        <p>
                            - Renseignements : hedrine [a] ulb.be
                        </p>
                    </article>

                    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                        
                        <div class="row text-center">
                          
                            <div class='col-lg-3'>
                              <div class="btn-group buttons"><a href="login"><button type="button" class="btn btn-success btn-lg"id="target1">Connexion</button></a></div>
                            </div>
                            <div class='col-lg-3'>
                              <div class="btn-group buttons"><a href="register"><button type="button" class="btn btn-success btn-lg">S'enregistrer</button></a></div>
                            </div>
                            
                          </div>
                        
                        
                        
                    </article>
                </div>
            </div>
        </div>

        <footer class="bg-info container-fluid h-75 d-inline-block">
            <a class="navbar-brand" href="#" style="color: white">Hedrine : Herb Drug Interaction Database brand</a>
            <ul class="nav justify-content-end" id="icon">
                <li nav-item><img src="{{ asset('images/Plant-icon_32.png') }}" alt=""></li>&nbsp; &nbsp;
                <li nav-item><img src="{{ asset('images/pills-5-icon_32.png') }}" alt=""></li>&nbsp; &nbsp;
                <li nav-item><img src="{{ asset('images/Refresh-bicolor-icon_32.png') }}" alt=""></li>&nbsp; &nbsp;
                <li nav-item><img src="{{ asset('images/Document-icon_32.png') }}" alt=""></li>
            </ul>
        </footer>
        @include('sweetalert::alert')
       
    </body>
</html>
