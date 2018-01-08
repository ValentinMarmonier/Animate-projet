<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    
        <title>Administrateur Animate</title>


    <header>
      <nav class="navbar navbar-inverse navbar-static-top">
        <a class="navbar-brand" href="#">Espace Administrateur Animate</a>
        <p class="navbar-text navbar-right">Dernière modification le (...) sur la page <a href="#" class="navbar-link">(...)</a></p>      
        </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          
          <ul class="nav nav-pills flex-column">
            
            <li class="nav-item">
              <a class="nav-link" href="#!" id="btn-kits">Page Kits</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#!" id="btn-pictos">Page Pictogrammes</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#!" id="btn-blog">Blog</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="#!" id="btn-boutique">Boutique</a>
            </li>
            
          </ul>

        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          
          <div id="modifPage">
            
            <h1>Choisissez la page à modifier</h1>
  
            <section class="row text-center placeholders">
              
              <div class="col-6 col-sm-3 placeholder">
                <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                <h4>Page Kits</h4>
              </div>
              
              <div class="col-6 col-sm-3 placeholder">
                <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                <h4>Page Pictogrammes</h4>
              </div>
              
              <div class="col-6 col-sm-3 placeholder">
                <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                <h4>Blog</h4>
              </div>
              
              <div class="col-6 col-sm-3 placeholder">
                <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                <h4>Boutique</h4>
              </div>
              
            </section>  
            
          </div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

         
        </main>
      </div>
    </div>

<footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    
    <script>

      document.querySelector('#btn-kits').addEventListener('click', function(){
                  const xhr = new XMLHttpRequest();
                  xhr.open("GET", 'admin-form-kits.php');
                  xhr.onload = function(){
                      const formKits = JSON.parse(xhr.responseText);
                      document.querySelector('#modifPage').innerHTML = "";
    //                  formKits.forEach(function(client){
    //                      const clientHTML = `<div class="client">${client.firstName} ${client.lastName}</div>`;
    //                      document.querySelector('#contenu').innerHTML += clientHTML;
    //                  })
                  }
              
              xhr.send()
              })
    </script>
</footer>

    
