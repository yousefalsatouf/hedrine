@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center" id="register">
        <div class="col-md-8">
            <div class="card">
                <h4 class="card-header bg-success awesome-font">{{ __('Register') }}</h4>

                <div class="card-body">
                    <div class="alert alert-info alert-dismissible fade show text-danger">
                        <strong><i class="fa fa-info-circle info text-danger" id="required-msg"></i></strong> champ obligatoire!
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('firstname') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="team" class="col-md-4 col-form-label text-md-right">{{ __('team') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="team" type="text"  class="form-control @error('team') is-invalid @enderror" name="team" value="{{ old('team') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel1" class="col-md-4 col-form-label text-md-right">{{ __('tel1') }}</label>

                            <div class="col-md-6">
                                <input id="tel1" type="text" class="form-control @error('tel1') is-invalid @enderror" name="tel1" value="{{ old('tel1') }}"  autocomplete="tel1" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel2" class="col-md-4 col-form-label text-md-right">{{ __('tel2') }}</label>

                            <div class="col-md-6">
                                <input id="tel2" type="text" class="form-control @error('tel2') is-invalid @enderror" name="tel2" value="{{ old('tel2') }}"  autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}<i class="fa fa-info-circle info text-danger" id="required-msg"></i></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-1! offset-md-1">
                                <blockquote class="text-info">
                                    <i class="fa fa-info-circle info text-danger" id="required-msg"></i>
                                    « L'Université libre de Bruxelles traite vos données afin de permettre votre inscription sur ce site. Pour en savoir plus sur la manière dont vos données personnelles sont traitées et conservées ainsi que pour exercer vos droits,
                                    <button type="button" class="btn btn-outline-info text-dark awesome-font" data-toggle="modal" data-target="#exampleModal">reportez-vous à l'information disponible ici </button>»
                                </blockquote>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-light">
                                                <h3 class="modal-title" id="exampleModalLabel">
                                                    <img src="{{ asset('images/hedrine6b.png') }}" class="img-fluid" alt="Responsive image">
                                                </h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body scroll text-dark">
                                                <h4 class="text-success text-center">RGPD : Hedrine</h4>
                                                <hr>
                                                @include('auth.terms')
                                            </div>
                                            <div class="modal-footer m-footer bg-light">
                                                <div class="condtions">
                                                    <!-- Button trigger modal -->
                                                    <label for="RGPD" id="checkboxContent">
                                                        <input type="checkbox" name="RGPD" id="check-me" class="@error('RGPD') is-invalid @enderror" required value="1">  En cochant cette case, j’accepte la politique de confidentialité de ce site
                                                    </label>
                                                    @error('RGPD')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror

                                                </div>
                                                <input type="button" class="btn btn-outline-danger" data-dismiss="modal" required value="Je refuse">
                                                <i class="far fa-smile-wink"></i>
                                                <input type="button" class="btn btn-outline-success" data-dismiss="modal" required value="J'accepte" id="accept">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <small> </small>
                                <button type="submit" id="registerBtn" class="btn btn-outline-success register">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
