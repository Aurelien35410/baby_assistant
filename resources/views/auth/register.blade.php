@extends('layouts.app')


<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/icheck.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/icheck/custom.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="resources\sass\bootstrap.scss">
<link rel="stylesheet" type="text/css" href="resources\sass\bootstrap-extended.scss">
<link rel="stylesheet" type="text/css" href="resources\sass\colors.scss">
<link rel="stylesheet" type="text/css" href="resources\sass\components.scss">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="resources\sass\core\menu\menu-types\horizontal-menu.scss">
<link rel="stylesheet" type="text/css" href="resources\sass\core\colors\palette-gradient.scss">
<link rel="stylesheet" type="text/css" href="resources\sass\pages\login-register.scss">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
<!-- END: Custom CSS-->



@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 pb-0">
                                <div class="card-title text-center">
                               <!--     <img src="public\img\logo.png" alt="branding logo"> -->
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Baby Assistant</span></h6>
                            </div>
                            <div class="card-content">
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Inscription</span></p>
                                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="text" class="form-control" id="name" placeholder="Prénom de votre enfant"@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-control-position">
                                <i class="feather icon-user"></i>
                            </div>
                        </fieldset>

                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="email" class="form-control" id="email" placeholder="Adresse E-Mail" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-control-position">
                                <i class="feather icon-mail"></i>
                            </div>
                        </fieldset>

                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" class="form-control" id="password" placeholder="Mot de Passe @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-control-position">
                                <i class="fa fa-key"></i>
                            </div>
                        </fieldset>

                        <fieldset class="form-group position-relative has-icon-left">
                            <input type="password" class="form-control" id="password-confirm" placeholder="Confirmer Mot de Passe" name="password_confirmation" required autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="form-control-position">
                                <i class="fa fa-key"></i>
                            </div>
                        </fieldset>

                        <button type="submit" class="btn btn-outline-primary btn-block"><i class="feather icon-user"></i>Créer mon compte</button>

                    </form>
                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Vous avez déjà un compte?</span></p>
                    <a href="{{ route('login') }}" class="btn btn-outline-danger btn-block mt-2"><i class="feather icon-unlock"></i> Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</div>
</div>
</div>


@endsection
