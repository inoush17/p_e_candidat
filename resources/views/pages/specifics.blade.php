@extends('layout.base')

@section('layout')
    <div class="position">
        @include('includes.appbar2')
        <div class="separator-j"></div>
        @include('includes.appbar3') <br>
    </div>
    <div class="separator-j1"></div><br><br><br>

    <div class="specifics-full-container">

        <h1>{{ $offer->name }}</h1><br><br><br>

        <div class="specifics-full-container2">
            <div class="specifics-container">
                <div class="specifics-container2">
                    <h4>La ... c'est quoi ?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ullam quibusdam modi ratione
                        corporis
                        repudiandae magnam, quisquam libero sunt, corrupti tenetur debitis deleniti veritatis esse quam
                        doloremque
                        vero! Beatae, ex.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam, debitis dolores architecto
                        voluptates enim magnam necessitatibus eius eaque ut, minus sint aspernatur, hic ex soluta saepe
                        omnis
                        adipisci quia.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi voluptatum, inventore fugit
                        dignissimos
                        necessitatibus, nostrum accusamus consequatur est labore impedit itaque nemo nesciunt provident,
                        modi
                        vero
                        totam reiciendis optio rerum?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi officiis fugit, tempora repudiandae
                        ipsa
                        atque iusto magnam eligendi veritatis doloremque officia quasi ullam laborum voluptates maiores id
                        numquam
                        harum adipisci?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, quia ab amet a nisi esse nam
                        est
                        quos
                        voluptates unde nostrum magni animi, sed nobis alias illo! Assumenda, soluta magni.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti mollitia consequuntur at adipisci
                        illo
                        rem
                        enim ducimus. Commodi cum dignissimos sunt repellendus, ut ratione minima deserunt quae molestias.
                        Labore,
                        blanditiis.
                    </p>
                </div>

                <div class="specifics-container2">
                    <h4>La ... c'est quoi ?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ullam quibusdam modi ratione
                        corporis
                        repudiandae magnam, quisquam libero sunt, corrupti tenetur debitis deleniti veritatis esse quam
                        doloremque
                        vero! Beatae, ex.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam, debitis dolores architecto
                        voluptates enim magnam necessitatibus eius eaque ut, minus sint aspernatur, hic ex soluta saepe
                        omnis
                        adipisci quia.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi voluptatum, inventore fugit
                        dignissimos
                        necessitatibus, nostrum accusamus consequatur est labore impedit itaque nemo nesciunt provident,
                        modi
                        vero
                        totam reiciendis optio rerum?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi officiis fugit, tempora repudiandae
                        ipsa
                        atque iusto magnam eligendi veritatis doloremque officia quasi ullam laborum voluptates maiores id
                        numquam
                        harum adipisci?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, quia ab amet a nisi esse nam
                        est
                        quos
                        voluptates unde nostrum magni animi, sed nobis alias illo! Assumenda, soluta magni.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti mollitia consequuntur at adipisci
                        illo
                        rem
                        enim ducimus. Commodi cum dignissimos sunt repellendus, ut ratione minima deserunt quae molestias.
                        Labore,
                        blanditiis.
                    </p>
                </div>

                <div class="specifics-container2">
                    <h4>La ... c'est quoi ?</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, ullam quibusdam modi ratione
                        corporis
                        repudiandae magnam, quisquam libero sunt, corrupti tenetur debitis deleniti veritatis esse quam
                        doloremque
                        vero! Beatae, ex.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam, debitis dolores architecto
                        voluptates enim magnam necessitatibus eius eaque ut, minus sint aspernatur, hic ex soluta saepe
                        omnis
                        adipisci quia.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi voluptatum, inventore fugit
                        dignissimos
                        necessitatibus, nostrum accusamus consequatur est labore impedit itaque nemo nesciunt provident,
                        modi
                        vero
                        totam reiciendis optio rerum?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi officiis fugit, tempora repudiandae
                        ipsa
                        atque iusto magnam eligendi veritatis doloremque officia quasi ullam laborum voluptates maiores id
                        numquam
                        harum adipisci?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, quia ab amet a nisi esse nam
                        est
                        quos
                        voluptates unde nostrum magni animi, sed nobis alias illo! Assumenda, soluta magni.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti mollitia consequuntur at adipisci
                        illo
                        rem
                        enim ducimus. Commodi cum dignissimos sunt repellendus, ut ratione minima deserunt quae molestias.
                        Labore,
                        blanditiis.
                    </p>
                </div><br><br>

                <div class="link">
                    <a href="{{ route('form1') }}">Postulez maintenant</a>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </div>
@endsection
