<?php
include_once('../connect/connect.php');
if(isset($_GET['e-mail']) AND isset($_GET['Password'])){
$sql=$db->prepare('Select*from users where email like ?');
$sql->execute( array($_GET['e-mail']));
while ($resultat=$sql->fecth()) {
	 die($resultat['email']);
	}
}
?>