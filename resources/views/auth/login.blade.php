@extends('layouts.app')

@section('content')
<div class="vertical-align-wrap">
    <div class="vertical-align-middle auth-main">
        <div class="auth-box">
            <div class="top">
                <img src="assets/images/logo-white.svg" alt="Iconic">
            </div>
            <div class="card">
                <div class="header">
                    <p class="lead">Connectez vous à votre compte</p>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('login') }}" class="form-auth-small" action="index.html">
                        @csrf
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Email</label>
                            <input type="email"name="email" class="form-control @error('email') is-invalid @enderror" id="signin-email" value="{{ old('email') }}" placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Mot de passe</label>
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" id="signin-password" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Connexion</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
