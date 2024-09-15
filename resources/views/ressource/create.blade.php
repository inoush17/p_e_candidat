@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
    <div class="separator-j1"></div>

    <div>
        <div>
            Création des ressources
        </div>
        <form action="">
            @csrf
            <input type="text" name="" placeholder="Nom du fichier">
            <input type="file" name="" id=""><br>
            <button type="submit">Soumettre</button>
        </form>
    </div>
@endsection