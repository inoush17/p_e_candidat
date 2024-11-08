@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
    <div class="separator-j1"></div><br><br>

    <div class="specifics-full2-container-offers-list">
        <h2>Formations disponibles chez E_Candidat</h2>
        <div>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    {!! implode('', $errors->all('<li>:message</li>')) !!}
                </ul>
            @endif

            @if ($message = Session::get('error'))
                <ul class="alert alert-danger ">
                    <li>{{ $message }}</li>
                </ul>
            @endif
            @if ($message = Session::get('success'))
                <ul class="alert alert-success">
                    <li>{{ $message }}</li>
                </ul>
            @endif


            <div class="create-offers">
                @foreach ($offers as $offer)
                    <div class="off">
                        <h3 class="title-h3">{{ $offer->name }}</h3>
                    <a href="{{route('specifics', $offer->id)}}"  class="create-offers-link">
                        voir détails</a>
                    </div>
                @endforeach
                
            </div>

        </div>
        {{-- <div class="border datatable-cover">
                <table id="datatable" class="stripe">
                    <thead>
                        <tr>
                            <th>Nom de la formation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($offers as $offer)
                            <tr>
                                <td>
                                    {{ $offer->name }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> --}}
    </div>
@endsection
