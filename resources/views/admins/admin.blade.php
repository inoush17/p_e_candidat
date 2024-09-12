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
        <a href="">Création de ressource</a>
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
                    {{-- <tbody>
                        @foreach ()
                            <tr>
                                <td>
                                    {{ $product->name }}
                                </td>
                                <td>
                                    {{ number_format($product->price, 0, " ") }} F CFA
                                </td>
                                <td>
                                    {{ $product->quantity }}
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('products.edit', $product->id) }}" class="icon-button primary">
                                        <i class="fas fa-pen-to-square"></i>
                                    </a>
                                    &nbsp;
                                    <form class="d-inline" action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr(e) de vouloir supprimer le produit {{ $product->name }} ? Cette action sera irréversible !')">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="icon-button error">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
    </div>
@endsection