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

        <h2>Importation des fichiers</h2>

        <div class="specifics-container">
            <div class="space2">
                <form action="{{ route('form2.process') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                </form>
            </div>

            <div class="link-flex">
                <div class="link" >
                    <a href="{{ route('form1') }}">Page précédente</a>
                </div>
                <div class="link">
                    <button type="submit">Envoyez le dossier</button>
                </div>
            </div>
        </div><br><br><br><br>
    </div>
@endsection
