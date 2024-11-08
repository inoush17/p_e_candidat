<header>
    <div class="second-header">
        <div class="nav">
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Acceuil</a></li>
                    <li><a href="{{ route('offers.list') }}">Nos offres</a></li>
                    <li><a href="{{ route('form1') }}">Candidature</a></li>
                    <li><a href="{{ route('ressource.list') }}">Ressources</a></li>
                    <li><a href="{{ route('form1') }}">Galeries</a></li>
                    <li><a href="">Autres</a></li>
                </ul>
            </nav>
        </div>

        <div class="right2">
            <div class="right1"><a href="#contact">Nous contacter</a></div>
            <div>
                @if (Auth::user()->profile_image)
                    <a href="{{route('profil')}}"><img src="{{ URL::asset('images/profil.png') }}" alt="" width="35"
                            class="profil"></a>
                @else
                <a href="{{route('profil')}}" class="default-avatar">{{ strtoupper(substr(Auth::user()->name, 0, 2)) }}</a>

                @endif
            </div>
            <a href=""><img src="{{ URL::asset('images/icons8-notification-48.png') }}" alt=""
                width="30" class=""></a>
        </div>
    </div>
</header>

{{-- <div class="profile-picture">
    @if (Auth::user()->profile_image)
        <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Profile Picture">
    @else
        <div class="default-avatar">
            {{ strtoupper(substr(Auth::user()->name, 0, 2)) }}
        </div>
    @endif
</div> --}}
