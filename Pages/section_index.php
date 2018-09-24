
<div class="container">
	<div id="cont-lien">
	
			<ol id="lien-2">
				<li> <a href="#">
					<div class="text-lien" id="bt-1">
						<img src="image/btn1.png" id="bt-ef-1">
						<img src="image/btn2.png" id="bt-ef-2">
					</div></a>

				</li>
				<li> <a href="#"><div class="text-lien" id="bt-2"></div></a></li>
				<li> <a href="#"><div class="text-lien" id="bt-3"></div></a></li>
				<li> <a href="#"><div class="text-lien" id="bt-4"></div></a></li>
			</ol>
		</div>
   </div>
<div>
<div class="container">
				<div class="raw" style="margin-bottom:3%;">
						<div class="col-md-11">
							Produits les plus populaires
					</div>
								
						<div class="col-md-1">
							<span><a href="#">Voir plus</a> </span>
						</div>
				</div>
		

		
<div class="row" style="padding-left:1%;margin-top:20px; margin-bottom:20px;">
<?PHP
include_once('connect/connect.php');
$sql = $db->prepare("SELECT * FROM products ");
$sql->execute();
while ($resultat=$sql->fetch()) {
?>
				<div class="col-md-2 col-sm-12">
					<?php echo '<a href="Index.php?page=singl-page&id='.$resultat['id'].'"> <img src="image/'.$resultat['id'].'.png"  class="img-thumbnail responsive" style="width:150px;height:150px;"> </a>';?>
				</div>	

<?PHP
}
?>
	</div>

</div>