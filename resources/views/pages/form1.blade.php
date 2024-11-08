@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
    <div class="separator-j1"></div><br><br><br>


    <form action="{{ route('form1.process') }}" method="POST" enctype="multipart/form-data">

        @csrf
        @if ($errors->any())
            <ul class="alert alert-danger">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </ul>
        @endif

        @if ($message = Session::get('error'))
            <ul class="alert alert-danger">
                <li>{{ $message }}</li>
            </ul>
        @endif

        @if ($message = Session::get('success'))
            <ul class="alert alert-success">
                <li>{{ $message }}</li>
            </ul>
        @endif
        <div class="specifics-full-container" id="part1">
            <h1>Bienvenue dans votre espace de candidature</h1>
            <h3>Veuillez remplir tous les champs</h3>

            <div class="space1">
                <input type="text" name="last_name" value="" placeholder="Nom"><br>
                <input type="text" name="first_name" value="" placeholder="Prénom(s)"><br>
                <input type="text" name="email" id="email" placeholder="Email"><br>
                <input type="date" name="date_of_birth" value="" placeholder="Date de naissance"><br>
                <input type="tel" name="phone_number" value="" placeholder="Numéro de téléphone"><br>
                <input type="text" name="nationality" value="" placeholder="Nationalité"><br>
                <input type="text" name="neighborhood" value="" placeholder="Quartier"><br>
                <select name="marital_status">
                    <option value="">Choississez votre situation matrimoniale</option>
                    <option value="Célibataire">Célibataire sans enfant</option>
                    <option value="Célibataire">Célibataire avec enfant</option>
                    <option value="Marié(e)">Marié(e)</option>
                </select><br>
                <div>
                    <input type="radio" name="sexe" id="Homme" value="Homme">Homme
                    <input type="radio" name="sexe" id="Femme" value="Femme">Femme
                </div>

            </div><br><br>

            <div class="link-buttom">
                <button type="submit" id="suivant">Page Suivante</button>
                {{-- <a href="{{ route('form2') }}" ></a> --}}
            </div>
        </div><br><br>



        <div class="specifics-full-container" id="part2">
            <h1>Bienvenue dans votre espace de candidature</h1>
            <h3>Veuillez remplir tous les champs</h3>

            <h2>Importation des fichiers</h2>

            <div class="specifics-container">
                <div class="space2">
                    <div class="space2-container">
                        <label for="">Acte de naissance</label>
                        <input type="file" name="birth_certificate" id="" required>
                    </div>
                    <div class="space2-container">
                        <label for="identity_card">Nationalité</label>
                        <input type="file" name="identity_card" required>
                    </div>
                    <div class="space2-container">
                        <label for="latest_bulletin">Dernier bulletin</label>
                        <input type="file" name="latest_bulletin" required>
                    </div>
                    <div class="space2-container">
                        <label for="cover_letter">Lettre de motivation</label>
                        <input type="file" name="cover_letter">
                    </div>
                    {{-- <div class="space2-container">
                        <label for="">Acte de naissance</label>
                        <input type="file" name="" id="">
                    </div> --}}
                    <div class="space2-container">
                        <label for="file_annex">Annexe [ Facultatif ]</label>
                        <input type="file" name="file_annex">
                    </div>

                </div> <br><br>

                <div class="link-flex">
                    <div class="link">
                        <a href="" id="precedent" >Page précédente</a>
                    </div>
                    <div class="link-buttom">
                        <button type="submit">Envoyer le dossier</button>
                    </div>
                </div>
            </div><br><br><br><br>
        </div>
    </form>

@endsection
