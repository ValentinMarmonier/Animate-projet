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