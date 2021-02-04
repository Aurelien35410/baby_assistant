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
<div class="horizontal-layout horizontal-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-col="1-column">
    <div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
    <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
        <div class="card-header border-0">
            <div class="card-title text-center">
              <!--  <img src="public\img\logo.png" alt="branding logo"> -->
            </div>
            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Baby Assistant</span></h6>
        </div>
        <div class="card-content">
            <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Connection</span></p>
            <div class="card-body">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    @csrf
                    <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" class="form-control" id="email" placeholder="E-Mail" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="form-control-position">
                            <i class="feather icon-user"></i>
                        </div>
                    </fieldset>
                    <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control" id="password" placeholder="Mot de Passe" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-control-position">
                            <i class="fa fa-key"></i>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                            <fieldset>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                            <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right">
                            @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié?') }}
                                        </a>
                                    @endif
                            </div>
                    </div>
                    <button type="submit" class="btn btn-outline-primary btn-block"><i class="feather icon-unlock"></i> Login</button>
                </form>
            </div>
            <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Pas encore incrit?</span></p>
        <div class="card-body">
            <a href="{{ route('register') }}" class="btn btn-outline-danger btn-block"><i class="feather icon-user"></i> Register</a>
        </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
