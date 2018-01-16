           
            <section>
                <h3>Contactez l'équipe AniMate&reg;</h3>
                <form method="post" action="" class="formContact">
                    <input type="email" name="email" required placeholder="VOTRE EMAIL">
                    <input type="text" name="nom" required placeholder="VOTRE NOM">
                    <textarea type="text" name="message" required placeholder="VOTRE MESSAGE"></textarea>
                    <button type="submit">ENVOYER LE MESSAGE</button>
                    <input type="hidden" name="codebarre" value="contact">
                    <div class="response">
<?php
// TRAITER LE FORMULAIRE
// AVEC SYMFONY JE VAIS UTILISER UN OBJET DE LA CLASSE Request
// FOURNI PAR SYMFONY QUAND JE RAJOUTE LE PARAMETRE DANS MA METHODE contact
if ($objetRequest->get("codebarre", "") == "contact")
{
    $objetTraitementForm = new App\Controller\TraitementFormController;
    $objetTraitementForm->traiterContact($objetRequest, $objetConnection);
}
?>
                    </div>
                </form>
            </section>
              
                   
                    
                    
            
            <section class="map-contact">
                <h3 class="">Vous pouvez nous situer :</h3>
                <div id="maCarte" style="width:60%; height:300px;"></div>

        	    <noscript>
        			<p>Attention : </p>
        			<p>Afin de pouvoir utiliser Google Maps, JavaScript doit être activé.</p>
        			<p>Or, il semble que JavaScript est désactivé ou qu'il ne soit pas supporté par votre navigateur.</p>
        			<p>Pour afficher Google Maps, activez JavaScript en modifiant les options de votre navigateur, puis essayez à nouveau.</p>
        		</noscript>
    		</section>
    		
    		<script>
			function initMap(){
			    var myLatLng= new google.maps.LatLng(43.3440915,5.431467500000053)
				var optionsCarte = {
					zoom: 8,
					center: myLatLng
				}
				var maCarte = new google.maps.Map(document.getElementById("maCarte"), optionsCarte);
				var marker = new google.maps.Marker(
				    {
				        position: myLatLng,
                         map: maCarte,
                         title: 'Animate'
                    });
                 marker.setMap(maCarte);   
			}
			
                
		    </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTRXwU5HMtlVMwdNfOeY6k6L8NVQhuuiE&callback=initMap"
            type="text/javascript">
            </script>  
		     
            
            