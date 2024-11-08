@extends('layout.base')

@section('layout')
    @include('includes.appbar')


    <div class="login-container">
        <div class="separator2"></div>

        <div class="login">
            <div class="login-title">
                <h1>Création du nouveau mot de passe</h1>

                <p>Veuillez renseignez les champs et confirmer votre <br>
                    nouveau mot de passe</p>
            </div>

            <form action="{{ route('newpassword.process') }}" method="POST">
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
                        <label for="">Nouveau mot de passe</label>
                        <input type="password" name="password" id="password" placeholder="Saisir le nouveau mot de passe  ici ...">
                    </div>

                    <div class="login-space">
                        <label for="">Confirmer le mot de passe</label>
                        <input type="password" name="password" id="password"
                            placeholder="Saisir à nouveau le nouveau mot de passe ici ...">
                    </div>

                    <button type="submit" class="btn3">Soumettre</button>
                </div>
            </form>
        </div>

        <div class="separator"></div>
    </div>
@endsection
