@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
    <div class="separator-j1"></div>

    <div class="home-admin">
        <h2>Bienvenue dans votre espace admin {{Auth::user()->name}}</h2>
        <a  href="">Création de ressource</a>
        <div class="home-admin1">
            <div class="border datatable-cover">
                <table id="datatable" class="stripe">
                    <thead>
                        <tr>
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
                                    {{ $folder->status }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection