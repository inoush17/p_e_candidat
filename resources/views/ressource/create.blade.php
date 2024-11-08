@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
    <div class="separator-j1"></div><br><br><br>

    <div class="specifics-full2-container-ressource">
        <h1>Création des ressources</h1>
        <div class="specifics-full-container-ressource">
            <form action="{{ route('create.process') }}" method="POST" enctype="multipart/form-data">
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

                <div class="ressource-container-">
                    <input type="text" name="name"  placeholder="Nom du fichier">
                    <input type="file" name="file">
                    <button type="submit">Créer</button>
                </div>
            </form>
        </div>
    </div>
@endsection
