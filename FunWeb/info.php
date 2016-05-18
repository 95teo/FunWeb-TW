<!DOCTYPE HTML>
 <html lang="en">
<HEAD>
<TITLE>
</TITLE>
   <meta charset="utf-8">
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="menu.css">
<script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

</HEAD>
<BODY>
  <form id = "Modificare_formular" class="form-horizontal" role="form">

      <p class="text-center">Informaţiile contului sunt disponibile pentru actualizare!  </p>
<hr>
    <div class="form-group">
      <label class="control-label col-sm-2" for="nume"> Numele: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nume" placeholder="Nume">
      </div>
     
    </div>
     <hr>
    <div class="form-group">
      <label class="control-label col-sm-2" for="prenume"> Prenumele: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="prenume" placeholder="Prenume">
      </div>
    </div>
    <hr>
    <div class="form-group">
      <label class="control-label col-sm-2" for="user"> Utilizator: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user" placeholder="Nume de utilizator">
      </div>
    </div>
     <hr>
    <div class="form-group">
      <label class="control-label col-sm-2" for="data_nastere"> Data Nastere: </label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="data_nastere" placeholder="Data nastere">
      </div>
    </div>
     <hr>
    <div class="form-group">
      <label class="control-label col-sm-2" for="telefon"> Telefon: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="telefon" placeholder="Telefon">
      </div>
    </div>
     <hr>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email"> Email: </label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Email">
      </div>
    </div>
    <hr>
    <p class="text-center">Modificare parolă</p>
<div class="form-group">
      <label class="control-label col-sm-2" for="user"> Parola Veche: </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user" placeholder="Introdu parola veche">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="parola"> Parola Nouă: </label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="parola" placeholder="Introdu noua parolă">
      </div>
    </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="rescrie_parola"> Confirmă Parola Nouă: </label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="rescrie_parola" placeholder="Confirmă noua parolă">
      </div>
    </div>

     <hr>
   
    <div id= "inregistrare" class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" id="inregistrare_buton" class="btn btn-default"> Salvare modificări </button>
      </div>
    </div>
     <hr>
  </form>



</BODY>
</HTML>