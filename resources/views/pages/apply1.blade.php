@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
    <div class="separator-j1"></div>

    <div class="specifics-full-container">
        <h1>Bienvenue dans votre espace de candidature</h1>
        <h3>Veuillez remplir tous les champs</h3>

        <div class="space1">
            <form action="">
                <input type="text" placeholder="Nom"><br>
                <input type="text" placeholder="Prénom(s)"><br>
                <input type="text" placeholder="Date de naissance"><br>
                <input type="tel" name="" id="" placeholder="Numéro de téléphone"><br>
                <input type="text" placeholder="Nationalité"><br>

                <select name="" id="">
                    <option value="">Choississez votre situation matrimoniale</option>
                    <option value="Célibataire">Célibataire sans enfant</option>
                    <option value="Célibataire">Célibataire avec enfant</option>
                    <option value="Marié(e)">Marié(e)</option>
                    <option value="Divorcé(e)">Divorcé(e)</option>
                </select>
            </form>
        </div><br><br>

        <div class="link">
            <a href="{{route('apply2')}}">Page Suivante</a>
        </div>


    </div>
@endsection
