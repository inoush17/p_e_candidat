@extends('layout.base')

@section('layout')
    @include('includes.appbar')


    <div class="login-container">
        <div class="separator2"></div>
        <div class="login">
            <div class="login-title">
                <h1>Réinitialisation de mot de passe</h1>

                <p>Veuillez renseignez le champs pour le réinitialisation du mot de passe</p>
            </div>

            <form action="{{ route('forgottenpassword.process') }}" method="POST">
                @csrf

                <div class="form-container">

                    <div class="login-space">
                        <label for="">E_mail</label>
                        <input type="text" name="email" id="email" placeholder="Saisir l'e_mail ici ...">
                    </div>

                    <button type="submit" class="btn3">Soumettre</button>
                </div>
            </form>
        </div>
        <div class="separator"></div>
    </div>
@endsection