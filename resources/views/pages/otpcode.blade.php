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

                @if ($email = Session::get('email'))
                    <ul class="alert alert-danger ">
                        <li>{{ $email }}</li>
                    </ul>
                @endif

                @if ($message = Session::get('success'))
                    <ul class="alert alert-success">
                        <li>{{ $message }}</li>
                    </ul>
                @endif

                {{ session()->get("email") }}

                <div class="form-container">
                    <div class="login-space">
                        <input type="hidden" name="email" value="{{ session()->get("email") }}">
                        <input type="text" class="carre" name="code">
                        <button type="submit" class="btn3">Soumettre</button>
                    </div>

                </div>
            </form>
        </div>
        <div class="separator"></div>
    </div>
@endsection
