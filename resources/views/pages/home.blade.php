@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
    <div class="separator-j1"></div>

    <header class="barniere">
        <div class="TITLE">
            <h1>WELCOME</h1>
        </div>
    </header>

    <div class="home-full-container">
        <h1 class="animated">Parcourez la page pour voir tout ce qui concerne l'école</h1><br><br><br>

        <div class="home-container">

            <div class="home-d-grid">
                <div class="direction">
                    <h2>Notre Vision</h2>
                    <p>e-Candidat est une plateforme dédiée pour <br>gérer les candidatures des élèves. <br> Elle permet aux
                        candidats de soumettre leurs <br>demandes d'inscription en ligne pour divers <br>programmes</p>
                </div>
                <img src="{{ URL::asset('images/e-candidat-couverture.avif') }}" alt="" width=""
                    class="img1">
            </div>

            <div class="home-d-grid">
                <img src="{{ URL::asset('images/liv.png') }}" alt="" width="" class="img1">
                <div class="direction">
                    <h2>Notre Mission</h2>
                    <p>e-Candidat est une plateforme dédiée pour <br>gérer les candidatures des élèves. <br> Elle permet aux
                        candidats de soumettre leurs <br>demandes d'inscription en ligne pour divers <br>programmes</p>
                </div>
            </div>

            <div class="home-d-grid">
                <div class="direction">
                    <h2>Nos Objectifs</h2>
                    <p>e-Candidat est une plateforme dédiée pour <br>gérer les candidatures des élèves. <br> Elle permet aux
                        candidats de soumettre leurs <br>demandes d'inscription en ligne pour divers <br>programmes</p>
                </div>
                <img src="{{ URL::asset('images/e-candidat-valeurs.avif') }}" alt="" width="" class="img1">
            </div>

            <div class="home-d-grid">
                <img src="{{ URL::asset('images/e-candidat-line.avif') }}" alt="" width="" class="img1">
                <div class="direction">
                    <h2>Nos Actions</h2>
                    <p>e-Candidat est une plateforme dédiée pour <br>gérer les candidatures des élèves. <br> Elle permet aux
                        candidats de soumettre leurs <br>demandes d'inscription en ligne pour divers <br>programmes</p>
                </div>
            </div>

            <div class="home-d-grid">
                <div class="direction">
                    <h2>Notre Histoires</h2>
                    <p>e-Candidat est une plateforme dédiée pour <br>gérer les candidatures des élèves. <br> Elle permet aux
                        candidats de soumettre leurs <br>demandes d'inscription en ligne pour divers <br>programmes</p>
                </div>
                <img src="{{ URL::asset('images/LIVRE.png') }}" alt="" width="" class="img1">
            </div>
        </div><br><br><br><br>

        <div>
            <h1 class="partenaire-home">À Propos</h1>

            <div class="about">
                <div class="about-mask">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio autem fugiat placeat architecto
                        nihil,<br> itaque ad voluptas? At deleniti autem explicabo deserunt quia. Sapiente iste in quasi
                        deleniti mollitia quod.
                        <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio autem fugiat placeat
                        architecto nihil,<br> itaque ad voluptas? At deleniti autem explicabo deserunt quia. Sapiente iste
                        in quasi deleniti mollitia quod.
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio autem fugiat placeat architecto
                        nihil,<br> itaque ad voluptas? At deleniti autem explicabo deserunt quia. Sapiente iste in quasi
                        deleniti mollitia quod.</p>
                </div>
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

            <div class="partenaire-logo">
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

        <div class="activity-section">
            <h1>Nos activités scolaires</h1>
            <div class="activity-section--">
                <div class="activity-section---">
                    <img src="{{ URL::asset('images/LIVRE.png') }}" alt="" width="">
                    <a href="">Voir détails</a>
                </div>
                <div class="activity-section---">
                    <img src="{{ URL::asset('images/LIVRE.png') }}" alt="" width="">
                    <a href="">Voir détails</a>
                </div>
                <div class="activity-section---">
                    <img src="{{ URL::asset('images/LIVRE.png') }}" alt="" width="">
                    <a href="">Voir détails</a>
                </div>
                <div class="activity-section---">
                    <img src="{{ URL::asset('images/LIVRE.png') }}" alt="" width="">
                    <a href="">Voir détails</a>
                </div>
                <div class="activity-section---">
                    <img src="{{ URL::asset('images/LIVRE.png') }}" alt="" width="">
                    <a href="">Voir détails</a>
                </div>

            </div><br><br><br>
            {{-- <div class="activity-section--">
                <div class="activity-section---">
                    <img src="{{ URL::asset('images/LIVRE.png') }}" alt="" width="">
                    <a href="">En Savoir plus</a>
                </div>
                <div class="activity-section---">
                    <img src="{{ URL::asset('images/LIVRE.png') }}" alt="" width="">
                    <a href="">En Savoir plus</a>
                </div>
                <div class="activity-section---">
                    <img src="{{ URL::asset('images/LIVRE.png') }}" alt="" width="">
                    <a href="">En Savoir plus</a>
                </div>
                <div class="activity-section---">
                    <img src="{{ URL::asset('images/LIVRE.png') }}" alt="" width="">
                    <a href="">En Savoir plus</a>
                </div>
                <div class="activity-section---">
                    <img src="{{ URL::asset('images/LIVRE.png') }}" alt="" width="">
                    <a href="">En Savoir plus</a>
                </div>
            </div> --}}
        </div>
    </div><br><br><br><br>

    @include('includes.footer') <br>
    <div class="copyright">E-Candidat School© 2024 - Powered & designed by <span class="copyright-span">Ines-Diana Houévi
            GBADOE</span></div><br>
@endsection
