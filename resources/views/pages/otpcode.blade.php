@extends('layout.base')

@section('layout')
    @include('includes.appbar')


    <div class="login-container">
        <div class="separator2"></div>
        <div class="login">
            <div class="login-title">
                <h1>OTP Code</h1>

                <p>Un code vous a été envoyé dans votre boîte mail. <br>Vérifiez-le et saisissez-le</p>
            </div>

            <form action="{{ route('otpcode.process') }}" method="POST">
                @csrf
                <div class="form-container">
                    <div class="login-space">
                        <input type="text" class="carre">
                        <button type="submit" class="btn3">Soumettre</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="separator"></div>
    </div>
@endsection
