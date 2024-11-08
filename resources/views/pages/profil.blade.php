@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
    </div>
    <div class="separator-j1"></div>

    <div class="profil-container login">
        <div class="login-title">
            <h1>Modifier le profil</h1>
        </div>
        <form action="{{ route('profil.process') }}" method="POST">
            @csrf
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

            <div class="edit-profil">
                {{-- <img src="{{ URL::asset('images/profil.png') }}" alt=""> --}}
                @if (Auth::user()->profile_image)
                    <img src="{{ URL::asset('images/profil.png') }}" alt="" class="profil">
                @else
                    <div class="default-avatar2">{{ strtoupper(substr(Auth::user()->name, 0, 2)) }}</div>
                @endif
                <div>

                </div>
                <label class="icon" for="edit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </label>
            </div><br><br>
            <input type="file" name="" id="edit" hidden>




            <div class="form-container">
                <div class="form-flex">
                    <div class="login-space">
                        <label for="">Nom d'utilisateur</label>
                        <input type="text" name="name" id="name" value={{ auth()->user()->name }}
                            placeholder="Saisir le nom d'utilisateur ici ....">
                    </div>

                    <div class="login-space">
                        <label for="">E_mail</label>
                        <input type="text" name="email" id="email" value={{ auth()->user()->email }}
                            placeholder="Saisir l'e_mail ici ...">
                    </div>
                </div>

                <div class="login-space">
                    <label for="">Mot De Passe Actuel</label>
                    <input type="password" name="password" id="password" placeholder="Saisir le mot de passe ici ...">
                </div>

                <div class="login-space">
                    <label for="password">Nouveau Mot De Passe</label>
                    <input type="password" name="password" id="password"
                        placeholder="Saisir le nouveau mot de passe  ici ...">
                </div>

                <div class="full-profil-button">
                    <button type="submit" class="profil-button">Modifier</button>
                </div>
            </div>
        </form>
    </div>
@endsection
