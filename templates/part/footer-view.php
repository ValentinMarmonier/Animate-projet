</main>
        
        <footer>
            
            
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
                        <a href="<?php echo $urlAccueil ?>">Accueil</a>
                    </div>
                    <div id="produits-footer">
                        <a href="<?php echo $urlProduits ?>">Produits</a>
                    </div>
                    <div id="blog-footer">
                        <a href="<?php echo $urlBlog ?>">Produits</a>
                    </div>
                    <div id="boutique-footer">
                        <a href="<?php echo $urlBoutique ?>">Boutique</a>
                    </div>
                    
                   
                    
                    
                    
                </div><!-- .column-2 -->

                <div class="column-3">
                    <adresse>
                        <div id="tel-footer">
                            <a href="tel:+33608133351"> Appeler la société Animate&reg; </a>
                        </div>
                        <div id="email-footer">
                            <a href="mailto:eric.henryon@animate.fr"> Envoyer un email </a>
                        </div>
                        <div id="adresse-footer">
                            Technopôle de Château Gombert<br>
                            Hotel Technoptic<br>
                            2, rue Marc Donadille<br>
                            13 013 Marseille
                        </div>
                    </adresse>
                </div><!-- .column-3 -->

                <div class="column-4">
                    <a class="social" href="https://www.facebook.com/Animate.figurine/" alt="facebook" target="_blank">
                        <img src="<?php echo $urlAccueil ?>assets/img/facebook.png" />
                    </a>
                    <a class="social" href="https://www.youtube.com/channel/UC1alssxte9DNlCR_6N9SIxg/" alt="youtube" target="_blank"> 
                        <img src="<?php echo $urlAccueil ?>assets/img/youtube.png" />
                    </a>
                    <a class="social" href="https://www.instagram.com/figurineanimate/" alt="instagram" target="_blank">
                        <img src="<?php echo $urlAccueil ?>assets/img/instagram.png" />
                    </a>
                </div><!-- .column-4 -->
 
            </section><!-- section.bottom-footer -->

        </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo $urlAccueil ?>assets/js/script.js"></script>
<script type="text/javascript" src="<?php echo $urlAccueil ?>assets/js/script-modal.js"></script>

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
        <script type="text/javascript" >
          $(function(){
              $('.bxslider').bxSlider({
                mode: 'fade',
                captions: true,
                slideWidth: 600
              });
            });
        </script>
    </body>
</html>