/* INITIALISATION DE 3 COMPTEURS */

/* INITIALISATION DU 1er COMPTEUR */
/*console.log(performance.now()); */
/* console.log("hello"); */

var compteur1 = 0;
var timer1 = null;

function attendre1 ()
{
    /*console.log(performance.now()); */
    /*console.log("attendre1");*/
    timer1 = setInterval(compter1, 14);
}

function compter1 ()
{
    /*console.log(performance.now()); */
    /* console.log("hello"); */


    var balise = document.querySelector("#compteur1");
    if(balise)
    {
        balise.innerHTML = compteur1;
        compteur1++;
        if (compteur1 > 100)
        {
            /*console.log(performance.now());*/
            /*console.log("stop compteur1" + compteur1);*/
            clearInterval(timer1);
        }
    }
}

setTimeout(attendre1, 25);


/* INITIALISATION DU 2ème COMPTEUR */
/*console.log(performance.now());
/* console.log("hello"); */

var compteur2 = 0;
var timer2 = null;

function attendre2 ()
{
    /*console.log(performance.now()); */
    /*console.log("attendre2");*/
    timer2 = setInterval(compter2, 20);
}


function compter2 ()
{
    /*console.log(performance.now()); */
    /* console.log("hello"); */
    var balise2 = document.querySelector("#compteur2");
    if(balise2)
    {
      balise2.innerHTML = compteur2;
      compteur2++;
      if (compteur2 > 150)
      {
          /*console.log(performance.now()); */
          /*console.log("stop compteur2" + compteur2);*/
          clearInterval(timer2);
      }
    }
}

setTimeout(attendre2, 25);



/* INITIALISATION DU 3 ème COMPTEUR*/
/*console.log(performance.now());   */
/* console.log("hello"); */

var compteur3 = 0;
var timer3 = null;

function attendre3 ()
{
    /*console.log(performance.now());    */
    /*console.log("attendre3");*/
    timer3 = setInterval(compter3, 8);
}

function compter3 ()
{
    /*console.log(performance.now());    */
    /* console.log("hello"); */
    var balise3 = document.querySelector("#compteur3");
    if(balise3)
    {
      balise3.innerHTML = compteur3;
      compteur3++;
      if (compteur3 > 250)
      {
          /*console.log(performance.now());       */
          /*console.log("stop compteur3" + compteur3);*/
          clearInterval(timer3);
      }
    }
}

setTimeout(attendre3, 25);



/* MODALS */
/* 1ère MODAL */
var modal = $('.modal');
$('.show-modal').click(function(e)
{
    event.preventDefault();
    modal.fadeIn();
});

$('.close-modal').click(function(e)
{
    event.preventDefault();
    modal.fadeOut();
});


/* MODALS BENEFICES */
/* MODAL BENEFICE-1 */
var modal1 = $('.modal1');
$('.show-modal1').click(function(e)
{
    event.preventDefault();
    modal1.fadeIn();
});

$('.close-modal1').click(function(e)
{
    event.preventDefault();
    modal1.fadeOut();
});

/* MODAL BENEFICE-2 */
var modal2 = $('.modal2');
$('.show-modal2').click(function(e)
{
    event.preventDefault();
    modal2.fadeIn();
});

$('.close-modal2').click(function(e)
{
    event.preventDefault();
    modal2.fadeOut();
});

/* MODAL BENEFICE-3 */
var modal3 = $('.modal3');
$('.show-modal3').click(function(e)
{
    event.preventDefault();
    modal3.fadeIn();
});

$('.close-modal3').click(function(e)
{
   event.preventDefault();
    modal3.fadeOut();
});
 /* MODAL BENEFICE-4 */
var modal4 = $('.modal4');
$('.show-modal4').click(function(e)
{
    event.preventDefault();
    modal4.fadeIn();
});

$('.close-modal4').click(function(e)
{
    event.preventDefault();
    modal4.fadeOut();
});
