<?php
session_start();
$_SESSION['pannier']=array();
include_once('connect/connect.php');
$pages=scandir("Pages/");
if(isset($_GET['page'])&& !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages)){
  $page=$_GET['page'];
}else{
	$page="section_index";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title > BIG DEAL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Styles/style_1.css">
	<link rel="stylesheet" type="text/css" href="Styles/style_2.css">
	<link rel="stylesheet" type="text/css" href="Styles/style_3.css">
	<link rel="stylesheet" type="text/css" href="Styles/style-singl.css">
	<link rel="stylesheet" type="text/css" href="../Styles/style-connection-2.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="JS/fonction.js"></script>

</head>
<body>
	<div>
<?php
   include_once('Pages/entete.php');
?>
</div>

<div id="section-p">
<?php
  include('Pages/'.$page.'.php');
?>
</div>
<div class="container-fluid" id="pied_de_page">
<?php
include_once('Pages/pied_de_page.php');
?>
</div>
</body>
</html>
