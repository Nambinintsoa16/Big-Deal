<!DOCTYPE html>
<html>
<head>
  <title>Big Deal</title>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <script type="text/javascript" src="../JS/jquery-3.3.1.slim.min.js"></script> 
  <script type="text/javascript" src="../JS/popper.min.js"></script> 
  <script type="text/javascript" src="../JS/bootstrap.min.js"></script> 
  <script type="text/javascript" src="../JS/fonction.js"></script>
  <link rel="stylesheet" type="text/css" href="../Styles/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Styles/style-connection.css">
  
</head>
<body>
 <div id="wrapper-connect">
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
</body>
</html>

