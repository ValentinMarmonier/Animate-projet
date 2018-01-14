/* INITIALISATION DE 3 COMPTEURS */

/* INITIALISATION DU 1er COMPTEUR */
console.log(performance.now());            
/* console.log("hello"); */

var compteur1 = 0;            
var timer1 = null;

function attendre1 ()
{
    console.log(performance.now());            
    console.log("attendre1");
    timer1 = setInterval(compter1, 100);
}

function compter1 ()
{
    console.log(performance.now());            
    /* console.log("hello"); */
    document.querySelector("#compteur1").innerHTML = compteur1;
    compteur1++;
    if (compteur1 > 100)
    {
        console.log(performance.now());            
        console.log("stop compteur1" + compteur1);
        clearInterval(timer1);
    }
}

setTimeout(attendre1, 350);


/* INITIALISATION DU 2ème COMPTEUR */
console.log(performance.now());            
/* console.log("hello"); */

var compteur2 = 0;            
var timer2 = null;

function attendre2 ()
{
    console.log(performance.now());            
    console.log("attendre2");
    timer2 = setInterval(compter2, 150);
}


function compter2 ()
{
    console.log(performance.now());            
    /* console.log("hello"); */
    document.querySelector("#compteur2").innerHTML = compteur2;
    compteur2++;
    if (compteur2 > 150)
    {
        console.log(performance.now());            
        console.log("stop compteur2" + compteur2);
        clearInterval(timer2);
    }
}

setTimeout(attendre2, 500);



/* INITIALISATION DU 3 ème COMPTEUR*/
console.log(performance.now());            
/* console.log("hello"); */

var compteur3 = 0;            
var timer3 = null;

function attendre3 ()
{
    console.log(performance.now());            
    console.log("attendre3");
    timer3 = setInterval(compter3, 250);
}

function compter3 ()
{
    console.log(performance.now());            
    /* console.log("hello"); */
    document.querySelector("#compteur3").innerHTML = compteur3;
    compteur3++;
    if (compteur3 > 250)
    {
        console.log(performance.now());            
        console.log("stop compteur3" + compteur3);
        clearInterval(timer3);
    }
}

setTimeout(attendre3, 1000);

/* 1ère MODAL */
            var modal = $('.modal');
            $('.show-modal').click(function() 
            {
             modal.fadeIn();
            });

            $('.close-modal').click(function() 
            {
             modal.fadeOut();
            });

            /* MODAL BENEFICE-1 */
            var modal1 = $('.modal1');
            $('.show-modal1').click(function() 
            {
             modal1.fadeIn();
            });

            $('.close-modal1').click(function() 
            {
             modal1.fadeOut();
            });

            /* MODAL BENEFICE-2 */
            var modal2 = $('.modal2');
            $('.show-modal2').click(function() 
            {
             modal2.fadeIn();
            });

            $('.close-modal2').click(function() 
            {
             modal2.fadeOut();
            });

            /* MODAL BENEFICE-3 */
            var modal3 = $('.modal3');
            $('.show-modal3').click(function() 
            {
             modal3.fadeIn();
            });

            $('.close-modal3').click(function() 
            {
             modal3.fadeOut();
            });
            

var Modal = (function() {

  var trigger = $qsa('.modal__trigger'); // Au clic pour activer le modal
  var modals = $qsa('.modal'); // the entire modal (takes up entire window)
  var modalsbg = $qsa('.modal__bg'); // the entire modal (takes up entire window)
  var content = $qsa('.modal__content'); // le contenu interne du modal
    var closers = $qsa('.modal__close'); // un élément utilisé pour fermer le modal
  var w = window;
  var isOpen = false;
    var contentDelay = 400; // durée après avoir cliqué sur le bouton et attendre que le contenu s'affiche
  var len = trigger.length;

  // le rendre plus facile pour vous-même en n'ayant pas à taper autant pour sélectionner un élément
  function $qsa(el) {
    return document.querySelectorAll(el);
  }

  var getId = function(event) {

    event.preventDefault();
    var self = this;
    // obtenir la valeur de l'attribut data-modal à partir du bouton
    var modalId = self.dataset.modal;
    var len = modalId.length;
    // enlever le '#' de la chaîne de caractères
    var modalIdTrimmed = modalId.substring(1, len);
    // sélectionnez le modal que nous voulons activer
    var modal = document.getElementById(modalIdTrimmed);
    // exécuter la fonction qui crée la div en expansion temporaire
    makeDiv(self, modal);
  };

  var makeDiv = function(self, modal) {

    var fakediv = document.getElementById('modal__temp');

    /**
     * s'il n'y a pas de 'fakediv', 
     nous en créons une et nous l'ajoutons au bouton sur lequel nous avez cliqué. A
     près cela, nous exécutons la fonction 'moveTrig' qui gère les animations.
     */

    if (fakediv === null) {
      var div = document.createElement('div');
      div.id = 'modal__temp';
      self.appendChild(div);
      moveTrig(self, modal, div);
    }
  };

  var moveTrig = function(trig, modal, div) {
    var trigProps = trig.getBoundingClientRect();
    var m = modal;
    var mProps = m.querySelector('.modal__content').getBoundingClientRect();
    var transX, transY, scaleX, scaleY;
    var xc = w.innerWidth / 2;
    var yc = w.innerHeight / 2;

    // cette classe augmente la valeur de l'index z de sorte que le bouton dépasse les autres boutons
    trig.classList.add('modal__trigger--active');

    // ces valeurs sont utilisées pour mettre à l'échelle la div temporaire à la même taille que le modal
    scaleX = mProps.width / trigProps.width;
    scaleY = mProps.height / trigProps.height;

    scaleX = scaleX.toFixed(3); // arrondi à 3 décimales
    scaleY = scaleY.toFixed(3);


    // ces valeurs sont utilisées pour déplacer le bouton au centre de la fenêtre
    transX = Math.round(xc - trigProps.left - trigProps.width / 2);
    transY = Math.round(yc - trigProps.top - trigProps.height / 2);

        // si le modal est aligné vers le haut, nous déplaceons le bouton sur le centre-y du modal au lieu de la fenêtre
    if (m.classList.contains('modal--align-top')) {
      transY = Math.round(mProps.height / 2 + mProps.top - trigProps.top - trigProps.height / 2);
    }


        // traduire le bouton au centre de l'écran
        trig.style.transform = 'translate(' + transX + 'px, ' + transY + 'px)';
        trig.style.webkitTransform = 'translate(' + transX + 'px, ' + transY + 'px)';
        // nous développons la div temporaire à la même taille que le modal
        div.style.transform = 'scale(' + scaleX + ',' + scaleY + ')';
        div.style.webkitTransform = 'scale(' + scaleX + ',' + scaleY + ')';


        window.setTimeout(function() {
            window.requestAnimationFrame(function() {
                open(m, div);
            });
        }, contentDelay);

  };

  var open = function(m, div) {

    if (!isOpen) {
      // nous sélectionnons le contenu dans le modal
      var content = m.querySelector('.modal__content');
      // reveal the modal
      m.classList.add('modal--active');
      // nous révélons le contenu modal
      content.classList.add('modal__content--active');

      /**
        lorsque le contenu modal est terminé la transition, fadeout le temporaire
        expansion div donc quand la fenêtre redimensionne il n'est pas visible (il ne le fait pas
        bouge avec la fenêtre).
       */

      content.addEventListener('transitionend', hideDiv, false);

      isOpen = true;
    }

    function hideDiv() {
      // fadeout div afin qu'elle ne puisse pas être vue lorsque la fenêtre est redimensionnée
      div.style.opacity = '0';
      content.removeEventListener('transitionend', hideDiv, false);
    }
  };

  var close = function(event) {

        event.preventDefault();
    event.stopImmediatePropagation();

    var target = event.target;
    var div = document.getElementById('modal__temp');

    /**
     * make sure the modal__bg or modal__close was clicked, we don't want to be able to click
     * inside the modal and have it close.
     */

    if (isOpen && target.classList.contains('modal__bg') || target.classList.contains('modal__close')) {

      // make the hidden div visible again and remove the transforms so it scales back to its original size
      div.style.opacity = '1';
      div.removeAttribute('style');

            /**
            * iterate through the modals and modal contents and triggers to remove their active classes.
      * remove the inline css from the trigger to move it back into its original position.
            */

            for (var i = 0; i < len; i++) {
                modals[i].classList.remove('modal--active');
                content[i].classList.remove('modal__content--active');
                trigger[i].style.transform = 'none';
        trigger[i].style.webkitTransform = 'none';
                trigger[i].classList.remove('modal__trigger--active');
            }

      // when the temporary div is opacity:1 again, we want to remove it from the dom
            div.addEventListener('transitionend', removeDiv, false);

      isOpen = false;

    }

    function removeDiv() {
      setTimeout(function() {
        window.requestAnimationFrame(function() {
          // remove the temp div from the dom with a slight delay so the animation looks good
          div.remove();
        });
      }, contentDelay - 50);
    }

  };

  var bindActions = function() {
    for (var i = 0; i < len; i++) {
      trigger[i].addEventListener('click', getId, false);
      closers[i].addEventListener('click', close, false);
      modalsbg[i].addEventListener('click', close, false);
    }
  };

  var init = function() {
    bindActions();
  };

  return {
    init: init
  };

}());

Modal.init();


