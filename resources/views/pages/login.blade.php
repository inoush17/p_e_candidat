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
