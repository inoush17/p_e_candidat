@extends('layout.base')

@section('layout')
    @include('includes.appbar')
    <div class="full-container"><br><br>
        
        <div class="container">
            <img src="{{ URL::asset('images/e-candidat5.png') }}" alt="" width="" class="img1">
            <div class="flex">
                <div class="Title">
                    <h4 class="title">E_Candidat</h4>
                    <p class="small-title">Un monde nouveau pour vous</p>
                </div>
                <div>
                    <p class="paragraphe">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Consectetur,
                        ullam corrupti eos dignissimos dolorem, nisi necessitatibus expedita, ad
                        debitis nobis placeat omnis sunt<br> nam consequatur accusantium? Lorem ipsum 
                        dolor sit amet,<br> consectetur adipisicing elit. Officia quisquam earum, <br>
                        nam cupiditate placeat accusantium et eligendi adipisci explicabo <br> nisi 
                        minima aspernatur aliquam reiciendis libero temporibus ipsam voluptatum 
                        possimus voluptatibus?</p>
                </div>
                <div class="btn">
                    <a href="{{ route('login') }}" class="btn1">Connexion</a>
                    <a href="{{ route('registration') }}" class="btn2">S'inscrire</a>
                </div>
            </div>
        </div>

    </div><br><br><br><br>
@endsection
