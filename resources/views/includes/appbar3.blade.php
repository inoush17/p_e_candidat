<header>
    <div class="second-header">
        <div class="nav">
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Acceuil</a></li>
                    <li><a href="{{ route('ouroffers') }}">Nos offres</a></li>
                    <li><a href="{{ route('form1') }}">Candidature</a></li>
                    <li><a href="">Autres</a><br><br>
                        <div class="other">
                            <a href="">Evènements</a>
                            <a href="">Guides et ressources</a>
                            <a href="">Concours d'admission</a>
                            <a href="">Bourses disponibles</a>
                            <a href="">Galeries</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="right2">
            <div class="right1"><a href="#contact">Nous contacter</a></div>
            <a href=""><img src="{{ URL::asset('images/profil.png') }}" alt="" width="35" class="profil"></a>
            <a href=""><img src="{{ URL::asset('images/icons8-notification-48.png') }}" alt="" width="35" class=""></a>
        </div>
    </div>
</header>