<footer>
    <div>
        <div class="footer-d-grid" id="contact">
            <div>
                <h3>Liens utiles</h3>
                <div class="footer-link">
                    <a href="">Acceuil</a>
                    <a href="">Nos offres</a>
                    <a href="">Candidature</a>
                    <a href="">Actualités</a>
                    <a href="">Actualités</a>
                    <a href="">Guides et ressources</a>
                    <a href="">Resultats</a>
                    <a href="">Concours d'admission</a>
                    <a href="">Bourses disponibles</a>
                    <a href="">Galeries</a>
                </div>
            </div>
            <div class="footer-separator"></div>
            <div>
                <h3>Contacts</h3>
                <div class="footer-contacts">
                    <div class="space">
                        Téléphone <br>
                        <div class="contacts">(228) 91 78 21 80</div>
                    </div>
                    <div class="space">
                        Email <br>
                        <div class="contacts">diagbadoe@gmail.com</div>
                    </div>

                    <div class="space">
                        Nos horaires d'ouverture <br>
                        <div class="contacts">
                            De lundi à vendredi, de 08 heures à 20h 30. <br>
                            Samedi, de 09 heures à 15h 00.
                        </div>
                    </div>
                    <div class="space">
                        Quartier ou adresse complète <br>
                        <div class="contacts">Akodéssewa, pharmacie grain d'or Lomé - TOGO.</div>
                    </div>
                </div>
            </div>
            <div class="footer-separator"></div>

            <div>
                <h3>Réseaux sociaux</h3>
                <div class="footer-link2--">
                    <div class="footer-link2">
                        <a href="">
                            <img src="{{ URL::asset('images/facebook.png') }}" alt="" width="40">
                            <div>Facebook</div>
                        </a>
                    </div>
                    <div class="footer-link2">
                        <a href="">
                            <img src="{{ URL::asset('images/x.png') }}" alt="" width="40">
                            <div>whatsapp</div>
                        </a>
                    </div>

                    <div class="footer-link2">
                        <a href="">
                            <img src="{{ URL::asset('images/linkedin.png') }}" alt="" width="40">
                            <div>LinkedIn</div>
                        </a>
                    </div>
                    <div class="footer-link2">
                        <a href="">
                            <img src="{{ URL::asset('images/icons8-instagram-48.png') }}" alt="" width="40">
                            <div>Instagram</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        {{-- <div class="full-footer-separator2">
            <div class="footer-separator2"></div>
            <div class="footer-separator3"></div>     
        </div><br><br> --}}

        <div class="bottom-footer">
            <div>
                <img src="{{ URL::asset('images/e-candidat-iphone-removebg-preview.png') }}" alt=""
                    width="600">
            </div>

            <form action="">
                <div class="foot">
                    <div class="send-email">
                        <label for="">Nom</label>
                        <input type="text" name="name" id="name" placeholder="Votre nom">
                    </div>
    
                    <div class="send-email">
                        <label for="">E-mail</label>
                        <input type="text" name="name" id="name" placeholder="Votre E-mail">
                    </div>
    
                    <div class="send-email">
                        <label for="">Message</label>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Votre message"></textarea>
                    </div>
    
                    <button type="submit">ENVOYEZ LE MESSAGE</button>
                </div>
            </form>

            <div>
                <img src="{{ URL::asset('images/e-candidat-iphone-removebg-preview.png') }}" alt=""
                    width="300">
            </div>
        </div>
    </div>
</footer>
