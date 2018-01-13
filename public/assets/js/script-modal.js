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

        /* si le modal est aligné vers le haut, 
       nous déplaceons le bouton sur le centre-y du modal au lieu de la fenêtre */
    if (m.classList.contains('modal--align-top')) {
      transY = Math.round(mProps.height / 2 + mProps.top - trigProps.top - trigProps.height / 2);
    }


        // nous traduisons le bouton au centre de l'écran
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
        lorsque le contenu modal est terminé la transition, 
        quand la fenêtre redimensionne il n'est pas visible 
        (=> il ne le fait pas bougé avec la fenêtre).
       */
      content.addEventListener('transitionend', hideDiv, false);

      isOpen = true;
    }

    function hideDiv() {
      /* fadeout div afin qu'elle ne puisse pas être vue 
         lorsque la fenêtre est redimensionnée */
      div.style.opacity = '0';
      content.removeEventListener('transitionend', hideDiv, false);
    }
  };

  var close = function(event) {

        event.preventDefault();
    event.stopImmediatePropagation();

    var target = event.target;
    var div = document.getElementById('modal__temp');

    /*
     nous nous assurons que le modal__bg ou modal__close a été cliqué, 
     ne voulons pas être en mesure de cliquer à l'intérieur du modal 
     de l'avoir à proximité.
     */

    if (isOpen && target.classList.contains('modal__bg') || target.classList.contains('modal__close')) {

      /* 
        nousrendons le div caché à nouveau visible et 
        supprimons les transformations afin qu'il retrouve sa taille d'origine */
      div.style.opacity = '1';
      div.removeAttribute('style');

            /*
             Nous retirons le css en ligne du déclencheur 
       pour le remettre dans sa position d'origine.
            */

            for (var i = 0; i < len; i++) {
                modals[i].classList.remove('modal--active');
                content[i].classList.remove('modal__content--active');
                trigger[i].style.transform = 'none';
        trigger[i].style.webkitTransform = 'none';
                trigger[i].classList.remove('modal__trigger--active');
            }

      /*
      quand la div temporaire est opacité= 1 encore, 
      nous l'enlevons du dom
      */
            div.addEventListener('transitionend', removeDiv, false);

      isOpen = false;

    }

    function removeDiv() {
      setTimeout(function() {
        window.requestAnimationFrame(function() {
          // retirer le div temp du dom avec un léger retard pour que l'animation soit bonne
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