@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
    <div class="separator-j1"></div><br><br>

    <div class="specifics-full2-container-ressource-list">
        <h2>Ressources</h2>
        <div class="specifics-full-container-ressource-list">
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
            <div class="border datatable-cover">
                <table id="datatable" class="stripe">
                    <thead>
                        <tr>
                            <th>Nom du fichier</th>
                            <th>Fichier</th>
                            <th>Télécharger</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ressources as $ressource)
                            <tr>
                                <td>
                                    {{ $ressource->name }}
                                </td>
                                <td>
                                    {{ $ressource->path }}
                                </td>
                                <td>
                                    <a href={{ 'storage/uploaded_files/' . $ressource->path }}>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m9 13.5 3 3m0 0 3-3m-3 3v-6m1.06-4.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                        </svg>

                                    </a>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
