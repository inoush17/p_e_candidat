@extends('layout.base')

<div>
    <h2 class="information-title">Les informations détaillées
        {{-- {{ $last_name }} --}}
    </h2><br><br>
    <div><br>
        <div class="full-show-information">
            <div class="show-information">
                <div><span class="spam">Nom ::</span> {{ $folder->last_name }}</div>
                <div><span class="spam">Prénom(s) ::</span> {{ $folder->first_name }}</div>
                <div><span class="spam">Date de naissance ::</span> {{ $folder->date_of_birth }}</div>
                <div><span class="spam">Numéro de téléphone ::</span> {{ $folder->phone_number }}</div>
                <div><span class="spam">Nationalité ::</span> {{ $folder->nationality }}</div>
                <div><span class="spam">Quartier ::</span> {{ $folder->neighborhood }}</div>
                <div><span class="spam">Situation matrimoniale ::</span> {{ $folder->marital_status }}</div>
                <div><span class="spam">Sexe ::</span> {{ $folder->sex }}</div>
                <div><span class="spam">Acte de naissance ::</span> {{ $folder->birth_certificate }}</div>
                <div><span class="spam">Nationalité ::</span> {{ $folder->identity_card }}</div>
                <div><span class="spam">Dernier bulletin ::</span> {{ $folder->identity_card }}</div>
                <div><span class="spam">Lettre de motivation ::</span> {{ $folder->cover_letter }} </div>
                <div><span class="spam">Annexe[ Facultatif ] ::</span> {{ $folder->file_annex }}</div>
            </div>
            <div class="show-full-bottom">
                <form action="{{ route('folder.reject', $folder->id) }}" method="POST">
                    @csrf
                    <button type="submit">Rejeté</button>
                </form>

                <form action="{{ route('folder.accept', $folder->id) }}" method="POST">
                    @csrf
                    <button type="submit">Accepté</button>
                </form>
            </div>
        </div>
    </div><br><br><br>
