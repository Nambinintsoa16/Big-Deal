<html>
<head>
  <title > BIG DEAL</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../Styles/style_1.css">
  <link rel="stylesheet" type="text/css" href="../Styles/style_2.css">
  <link rel="stylesheet" type="text/css" href="../Styles/style_3.css">
  <link rel="stylesheet" type="text/css" href="../Styles/style-singl.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  
  <script type="text/javascript" src="../JS/jquery-3.3.1.slim.min.js"></script> 
  <script type="text/javascript" src="../JS/popper.min.js"></script> 
  <script type="text/javascript" src="../JS/bootstrap.min.js"></script> 
  <script type="text/javascript" src="../JS/fonction.js"></script>
  <link rel="stylesheet" type="text/css" href="../Styles/bootstrap.min.css">
  
  
</head>
<body>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div id="conteneur">
    <div id="cont-entete">
      <ol id="li-tete">
        <li>
      <div id="image-connect"><img src="../image/bigdealLogo.png"></div>
      </li>
      <li>
            <span><h3>Connexion</h3></span>
      </li>

      </div>
<div id="fomul">
<form action="connection-data.php" method="GET">
  <div class="form-group">
    <label for="e-mail">Addresse E-mail </label>
    <input type="email" class="form-control" id="e-mail" name="e-mail" aria-describedby="emailHelp" placeholder="Entre votre adresse e-mail">
  </div>
  <div class="form-group">
    <label for="Password">Mot de passe</label>
    <input type="password" class="form-control" id="Password" name="Password" placeholder="Entre votre mot de passe">
  </div>
  <div class="pull-right">
  <button type="submit" class="btn btn-primary pull-right" >Se connecter</button>
  </div>
</form>
</div>
  <div id="pied-connct">
    <ol>
      <li>
        <a href="#">Crée un compte</a>
      </li>
      <li>
        <a href="#">Mot de passe oubliée ?</a>
      </li>
</div>
<div id="averte">
       <p>
       S'il ne s'agit pas de votre ordinateur, utilisez une fenêtre de navigation privée pour vous connecter.
     </p>
     </div>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>