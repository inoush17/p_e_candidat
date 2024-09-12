@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2') 
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
<div class="separator-j1"></div>
    <div class="home-full-container">
        <h1>Parcourez la page pour voir tout ce qui concerne l'école</h1><br><br><br>
        
        <div class="home-container">

            <div class="home-d-grid">
                <div class="direction">
                    <h2>A propos</h2>
                    <p>e-Candidat est une plateforme dédiée pour <br>gérer les candidatures des élèves. <br> Elle permet aux
                    candidats de soumettre leurs <br>demandes d'inscription en ligne pour divers <br>programmes</p>
                </div>
                <img src="{{ URL::asset('images/liv.png') }}" alt="" width="" class="img1">
            </div>

            <div class="home-d-grid">
                <img src="{{ URL::asset('images/liv.png') }}" alt="" width="" class="img1">
                <div class="direction">
                    <h2>Nos objectis</h2>
                    <p>e-Candidat est une plateforme dédiée pour <br>gérer les candidatures des élèves. <br> Elle permet aux
                    candidats de soumettre leurs <br>demandes d'inscription en ligne pour divers <br>programmes</p>
                </div>
            </div>

            <div class="home-d-grid">
                <div class="direction">
                    <h2>Nos objectis</h2>
                <p>e-Candidat est une plateforme dédiée pour <br>gérer les candidatures des élèves. <br> Elle permet aux
                    candidats de soumettre leurs <br>demandes d'inscription en ligne pour divers <br>programmes</p>
                </div>
                <img src="{{ URL::asset('images/liv.png') }}" alt="" width="" class="img1">
            </div>

            <div class="home-d-grid">
                <img src="{{ URL::asset('images/liv.png') }}" alt="" width="" class="img1">
                <div class="direction">
                    <h2>Nos objectis</h2>
                <p>e-Candidat est une plateforme dédiée pour <br>gérer les candidatures des élèves. <br> Elle permet aux
                    candidats de soumettre leurs <br>demandes d'inscription en ligne pour divers <br>programmes</p>
                </div>
            </div>

            <div class="home-d-grid">
                <div class="direction">
                    <h2>Nos objectis</h2>
                <p>e-Candidat est une plateforme dédiée pour <br>gérer les candidatures des élèves. <br> Elle permet aux
                    candidats de soumettre leurs <br>demandes d'inscription en ligne pour divers <br>programmes</p>
                </div>
                <img src="{{ URL::asset('images/liv.png') }}" alt="" width="" class="img1">
            </div>
        </div><br><br><br><br>

        <div>
            <div class="partenaire-home">
                <h1>Nos partenaires</h1>

                <div class="full-separator-home">
                    <div class="home-separator"></div>
                    <div class="home-separator2"></div>
                    <div class="home-separator3"></div>
                </div>
            </div><br><br><br><br>

            <div class="partenaire-logo" id="contact">
                <img src="{{ URL::asset('images/golfe1.png') }}" alt="" width="150">
                <img src="{{ URL::asset('images/simplom.co.png') }}" alt="" width="250">
                <img src="{{ URL::asset('images/wascal.jpeg') }}" alt="" width="150">
                <img src="{{ URL::asset('images/unesco.jpeg') }}" alt="" width="250">
                <img src="{{ URL::asset('images/ecobank1.png') }}" alt="" width="200">
                <img src="{{ URL::asset('images/golfe1.png') }}" alt="" width="150">
                <img src="{{ URL::asset('images/ecobank1.png') }}" alt="" width="200">
                <img src="{{ URL::asset('images/simplom.co.png') }}" alt="" width="250">
                <img src="{{ URL::asset('images/golfe1.png') }}" alt="" width="150">
                <img src="{{ URL::asset('images/ecobank1.png') }}" alt="" width="200">
            </div>
        </div><br><br><br><br>
    </div>

    @include('includes.footer') <br>
    <div class="copyright">E-Candidat School© 2024 - Powered & designed by Ines-Diana GBADOE</div><br>
@endsection
