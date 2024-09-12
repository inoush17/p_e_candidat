@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
    <div class="separator-j1"></div>

    <div class="ouroffers-full-container">
        <h1>Les series disponibles</h1><br><br><br>
        <div class="ouroffers-container">
            <div>
                <h2>Serie Littéraire</h2>
                <div class="details-offers">
                    <h3 class="alignement">Serie A4</h3>
                    <a href="">Voir détails</a>
                </div>
            </div>

            <div>
                <h2>Serie Scientifiques</h2>
                <div class="details-offers-flex">
                    <div class="details-offers">
                        <h3 class="alignement">Serie C</h3>
                        <a href="">Voir détails</a>
                    </div>
                    <div class="details-offers">
                        <h3 class="alignement">Serie D</h3>
                        <a href="{{route('specifics')}}">Voir détails</a>
                    </div>
                </div>
            </div>

            <div class="details-offers-flex2">
                <h2>Serie Techniques</h2>
                <div class="details-offers-flex">
                    <div class="details-offers">
                        <h3 class="alignement">Serie F1</h3>
                        <a href="">Voir détails</a>
                    </div>
                    <div class="details-offers">
                        <h3 class="alignement">Serie F2</h3>
                        <a href="">Voir détails</a>
                    </div>
                    <div class="details-offers">
                        <h3 class="alignement">Serie F3</h3>
                        <a href="">Voir détails</a>
                    </div>
                </div>
                <div class="details-offers-flex">
                    <div class="details-offers">
                        <h3 class="alignement">Serie F1</h3>
                        <a href="">Voir détails</a>
                    </div>
                    <div class="details-offers">
                        <h3 class="alignement">Serie F2</h3>
                        <a href="">Voir détails</a>
                    </div>
                    <div class="details-offers">
                        <h3 class="alignement">Serie F3</h3>
                        <a href="">Voir détails</a>
                    </div>
                </div>
                <div class="details-offers-flex">
                    <div class="details-offers">
                        <h3 class="alignement">Serie F1</h3>
                        <a href="">Voir détails</a>
                    </div>
                    <div class="details-offers">
                        <h3 class="alignement">Serie F2</h3>
                        <a href="">Voir détails</a>
                    </div>
                    <div class="details-offers">
                        <h3 class="alignement">Serie F3</h3>
                        <a href="">Voir détails</a>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </div>
@endsection
