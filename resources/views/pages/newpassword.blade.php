@extends('layout.base')

@section('layout')
    @include('includes.appbar')


    <div class="login-container">
        <div class="separator2"></div>

        <div class="login">
            <div class="login-title">
                <h1>Création du nouveau mot de passe</h1>

                <p>Veuillez renseignez les champs et confirmer votre <br> nouveau mot de passe</p>
            </div>

            <form action="{{ route('newpassword.process') }}" method="POST">

                @csrf
                <div class="form-container">
                    <div class="new-space">
                        <label for="password">Mot de passe actuel</label>
                        <input type="password" name="password" id="password"
                            placeholder="Saisir le mot de passe actuel ici ...">
                    </div>

                    <div class="login-space">
                        <label for="password">Nouveau mot de passe</label>
                        <input type="password" name="password" id="password"
                            placeholder="Saisir le nouveau mot de passe  ici ...">
                    </div>

                    <div class="login-space">
                        <label for="passwordconfirm">Confirmer le mot de passe</label>
                        <input type="password" name="passwordconfirm" id="passwordconfirm"
                            placeholder="Confirmer le nouveau mot de passe ici ...">
                    </div>

                    <button type="submit" class="btn3">Soumettre</button>
                </div>
            </form>
        </div>

        <div class="separator"></div>
    </div>
@endsection
