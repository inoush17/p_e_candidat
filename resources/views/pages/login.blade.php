@extends('layout.base')

@section('layout')
    @include('includes.appbar')

    <div class="login-container">
        <div class="separator2"></div>

        <div class="login">
            <div class="login-title">
                <h1>Se Connecter</h1>

                <p>Veuillez renseignez vos paramètres de connexion dans les <br> champs enfin de pouvoir accéder au
                    plateforme</p>
            </div>
            <form action="{{ route('login.process') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <ul class="alert alert-danger">
                        {!! implode('', $errors->all('<li>:message</li>')) !!}
                    </ul>
                @endif

                @if ($message = Session::get('error'))
                    <ul class="alert alert-danger ">
                        <li>{{ $message }}</li>
                    </ul>
                @endif

                @if ($message = Session::get('success'))
                    <ul class="alert alert-success">
                        <li>{{ $message }}</li>
                    </ul>
                @endif
                <div class="form-container">
                    <div class="login-space">
                        <label for="">E_mail</label>
                        <input type="text" name="email" id="email" placeholder="Saisir l'e_mail ici ...">
                    </div>

                    <div class="login-space">
                        <label for="">Mot De Passe</label>
                        <input type="password" name="password" id="password" placeholder="Saisir le mot de passe ici ...">
                    </div>

                    <div class="flex1">
                        <p>Mot de passe oublié ? </p>
                        <a href="{{ route('forgottenpassword') }}"> Réinitialisez-le</a>
                    </div>

                    <button type="submit" class="btn3">Se Connecter</button>

                    <div class="flex1">
                        <p>Pas encore inscrit.e ? </p>
                        <a href="{{ route('registration') }}"> S'inscrire</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="separator"></div>
    </div>
@endsection
