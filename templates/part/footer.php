        </main>
        
        <footer>
            <section id="cadre-TT">
                <h4 id="titre-cadre-ZZ">Titre h4 :<span id="suite-titre-cadre-WW">Suite titre h4</span></h4>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500.</p>
                <div id="cta-upercase" class="cta-upercase">
                    <a class="bouton cta-bouton"  href="#">Bouton cta</a>
                </div>    
            </section><!-- section#cadre-? -->

            <section id="ressources-tutos" class="">
                <h4 id="titre-ressources-tutoriels"><span>Ressources et tutoriels</span></h4>
                <div id="cta-lowercase" class="cta-lowercase">
                    <a class="" href=""><pan>+</pan></a>
                </div>
            </section><!-- section#ressources-tutos -->

            <section class="bottom-footer">
                <div class="column-1">
                    <div id="contact">
                        <a  href="contact"><span>Contact</span></a>
                    </div>
                    <div id="infos-legales">
                        <a s href="infos-legales"><span>Infos légales</span></a>
                    </div>
                    <div id="cgu">
                        <a href="cgu"><span>Conditions générales d'utilisation</span></a>
                    </div>
                    <div id="cgv">
                        <a href=""><span>Conditions générales de vente</span></a>
                    </div>
                </div><!-- .column-1 -->

                <div class="column-2">
                    <div id="accueil-footer">
                        <a  href="accueil"><span>Accueil</span></a>
                    </div>
                    <div id="produits-footer">
                        <a href="produits"><span>Produits</span></a>
                    </div>
                    <div id="blog-footer">
                        <a href="blog"><span>Blog</span></a>
                    </div>
                    <div id="boutique">
                        <a href="boutique"><span>Boutique</span></a>
                    </div>
                </div><!-- .column-2 -->

                <div class="column-3">
                    <adresse>
                        <div id="tel">
                            <a href="tel:+33608133351"> Appeler la société Animate&reg; </a>
                        </div>
                        <div id="email">
                            <a href="mailto:eric.henryon@animate.fr"> Envoyer un email </a>
                        </div>
                        <div id="bureaux">
                            Technopôle de Château Gombert<br>
                            Hotel Technoptic<br>
                            2, rue Marc Donadille<br>
                            13 013 Marseille
                        </div>
                    </adresse>
                </div><!-- .column-3 -->

                <div class="column-4">
                    <a class="social" href="https://www.facebook.com/Animate.figurine/" alt="facebook">  
                    </a>
                    <a class="social" href="https://www.youtube.com/channel/UC1alssxte9DNlCR_6N9SIxg/" alt="youtube">   
                    </a>
                    <a class="social" href="https://www.instagram.com/figurineanimate/" alt="instagram">
                    </a>
                </div><!-- .column-4 -->
 
            </section><!-- section.bottom-footer -->

        </footer>
        
        <script type="text/javascript" >
           $(window).scroll(function (event) {
    // A chaque fois que l'utilisateur va scroller (descendre la page)
            var y = $(this).scrollTop(); // On récupérer la valeur du scroll vertical
 
    //si cette valeur > à 200 on ajouter la class
                if (y >= 200) {
                    $('.nav').addClass('fixed');
                }   
                else {
      // sinon, on l'enlève
                    $('.nav').removeClass('fixed');
                }
            });
        </script>

    </body>
</html>