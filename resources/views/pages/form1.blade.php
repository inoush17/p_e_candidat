@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
    <div class="separator-j1"></div>


    <form action="{{route('form1.process')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="specifics-full-container">
            <h1>Bienvenue dans votre espace de candidature</h1>
            <h3>Veuillez remplir tous les champs</h3>

            <div class="space1">

                <div>
                    <input type="text" name="last_name" value="" placeholder="Nom"><br>
                    <input type="text" name="first_name" value="" placeholder="Prénom(s)"><br>
                    <input type="text" name="date_of_birth" value="" placeholder="Date de naissance"><br>
                    <input type="tel" name="phone_number" value="" placeholder="Numéro de téléphone"><br>
                    <input type="text" name="nationality" value="" placeholder="Nationalité"><br>
                    <div>
                        <input type="radio" name="sexe" id="Homme" value="Homme">Homme
                        <input type="radio" name="sexe" id="Femme" value="Femme">Femme
                    </div><br>

                    <select name="marital_status">
                        <option value="">Choississez votre situation matrimoniale</option>
                        <option value="Célibataire">Célibataire sans enfant</option>
                        <option value="Célibataire">Célibataire avec enfant</option>
                        <option value="Marié(e)">Marié(e)</option>
                    </select>
                </div>

            </div><br><br>

            <div class="link">
                <a href="{{ route('form2') }}">Page Suivante</a>
            </div>


        </div><br><br>

        <div class="specifics-full-container">
            <h1>Bienvenue dans votre espace de candidature</h1>
            <h3>Veuillez remplir tous les champs</h3>

            <h2>Importation des fichiers</h2>

            <div class="specifics-container">
                <div class="space2">


                    <div class="space2-container">
                        <label for="">Acte de naissance</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="space2-container">
                        <label for="">Nationalité</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="space2-container">
                        <label for="">Dernier bulletin</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="space2-container">
                        <label for="">Lettre de motivation</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="space2-container">
                        <label for="">Acte de naissance</label>
                        <input type="file" name="" id="">
                    </div>
                    <div class="space2-container">
                        <label for="">Annexe [ Facultatif ]</label>
                        <input type="file" name="" id="">
                    </div>

                </div>

                <div class="link-flex">
                    <div class="link">
                        <a href="">Page précédente</a>
                    </div>
                    <div>
                        <button type="submit">Envoyer le dossier</button>
                    </div>
                </div>
            </div><br><br><br><br>
        </div>
    </form>
@endsection
