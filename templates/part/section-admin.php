

    <div class="container-fluid">
      <div class="row">
        

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

    
