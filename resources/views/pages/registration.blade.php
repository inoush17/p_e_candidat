@extends('layout.base')

@section('layout')
    @include('includes.appbar')


    <div class="login-container">
        <div class="separator2"></div>

        <div class="login">
            <div class="login-title">
                <h1>Création de compte</h1>

                <p>Veuillez renseignez les champs d'inscription enfin de
                    pouvoir <br> accéder au plateforme</p>
            </div>

            <form action="{{ route('registration.process') }}" method="POST">
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
                    <div class="form-flex">
                        <div class="login-space">
                            <label for="">Nom d'utilisateur</label>
                            <input type="text" name="name" id="name"
                                placeholder="Saisir le nom d'utilisateur ici ....">
                        </div>

                        <div class="login-space">
                            <label for="">E_mail</label>
                            <input type="text" name="email" id="email" placeholder="Saisir l'e_mail ici ...">
                        </div>
                    </div>

                    <div class="login-space">
                        <label for="">Mot De Passe</label>
                        <input type="password" name="password" id="password" placeholder="Saisir le mot de passe ici ...">
                    </div>

                    <div class="login-space">
                        <label for="">Confirmer le mot de passe</label>
                        <input type="password" name="password" id="password"
                            placeholder="Saisir à nouveau le mot de passe ici ...">
                    </div>

                    <button type="submit" class="btn3">S'inscrire</button>

                    <div class="flex1">
                        <p>Déjà inscrit.e ? </p>
                        <a href="{{ route('login') }}"> Se connecter</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="separator"></div>
    </div>
@endsection
