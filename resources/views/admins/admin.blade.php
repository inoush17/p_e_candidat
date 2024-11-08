@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
    <div class="separator-j1"></div><br><br>

    <div class="home-admin">
        <h2>Bienvenue dans votre espace admin {{Auth::user()->email}}</h2><br><br>

        <a  href="{{ route('indexOffers') }}">Création des offres</a>
        <a  href="{{ route('index') }}">Création de ressource</a>
        <div class="home-admin1"><br>
            <div class="border datatable-cover">
                <table id="datatable" class="stripe">
                    <thead>
                        <tr>
                            <th style="display: none">Id</th>
                            <th>Nom</th>
                            <th>Prénoms</th>
                            <th>Date de naissance</th>
                            <th>Sexe</th>
                            <th>Nationalité</th>
                            <th>statuts</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($folders as $folder)
                            <tr>
                                <td style="display: none !important">
                                    {{ $folder->id }}
                                </td>
                                <td>
                                    {{ $folder->last_name }}
                                </td>
                                <td>
                                    {{ $folder->first_name }}
                                </td>
                                <td>
                                    {{ $folder->date_of_birth }}
                                </td>
                                <td>
                                    {{ $folder->sex }}
                                </td>
                                <td>
                                    {{ $folder->nationality }}
                                </td>
                                <td>
                                    {{ $folder->statuts }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection