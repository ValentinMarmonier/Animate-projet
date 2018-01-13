<?php
// TRAITER LE FORMULAIRE
// AVEC SYMFONY ON VA UTILISER UN OBJET DE LA CLASSE Request
// FOURNI PAR SYMFONY QUAND ON RAJOUTE LE PARAMETRE DANS MA METHODE contact
if ($objetRequest->get("codebarre", "") == "contact")
{
    $objetTraitementForm = new App\Controller\TraitementForm;
    $objetTraitementForm->traiterContact($objetRequest, $objetConnection);
}
?>
                    </div>
                </form>
            </section>
            
            <section class="">
                <h3 class="">Vous pouvez nous situer :</h3>
                <div id="EmplacementDeMaCarte" style="width:60%; height:300px;"></div>

        	    <noscript>
        			<p>Attention : </p>
        			<p>Afin de pouvoir utiliser Google Maps, JavaScript doit être activé.</p>
        			<p>Or, il semble que JavaScript est désactivé ou qu'il ne soit pas supporté par votre navigateur.</p>
        			<p>Pour afficher Google Maps, activez JavaScript en modifiant les options de votre navigateur, puis essayez à nouveau.</p>
        		</noscript>
    		</section>
    		
    		<script>
			function initialisation(){
				var optionsCarte = {
					zoom: 8,
					center: new google.maps.LatLng(43.3440915, 5.431467500000053)
				}
				var maCarte = new google.maps.Map(document.getElementById("EmplacementDeMaCarte"), optionsCarte);
			}
		    </script>
		
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTRXwU5HMtlVMwdNfOeY6k6L8NVQhuuiE&callback=initialisation"
            type="text/javascript">
            </script>       
            <section>
            <h3>Section contact</h3>
                <article class="contact">
                    <div class="formulaire">
                    <form method="GET" action="">
                    
                    <input type="text" name="nom" required placeholder="Nom">
                    <input type="texte" name="mail" required placeholder="adresse@maboite.com">
                    <textarea name="article" placeholder="VOTRE MESSAGE" rows="5" cols="60" required></textarea>
                    
                    <button type="submit">ENVOYER</button>
                    
                    </form>
                    </div>
                    
                </article>
        </section>