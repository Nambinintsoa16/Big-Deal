<script type="text/javascript">

	$('document').ready(function(){
		var nomb=$('#special #champ-1').val();
	$('#special #p').on('click',function(){
		nomb++;
		$('#special #champ-1').val(nomb);
		});
		
		$('#special #m').on('click',function(){
			if(nomb=='0'){
			
			 
		}else{

			nomb--;
			$('#special #champ-1').val(nomb);
		}
	
			});
		}
	);
</script>
<?php
include_once('connect/connect.php');
if(isset($_GET['id'])){
$id=$_GET['id'];	
$sql = $db->prepare("SELECT * FROM products  where id = ?");
$sql->execute(array($id));
while ($resultat=$sql->fetch()) {
	
?> 
	<div id="wrapper-cont-sing">
			<div id="entete-singl">
				<div id="img-desc" class="entete-singl img-thumbnail">
				<?php echo '<img src="image/'.$resultat['id'].'.png" ';?>
				</div>
			</div>
	<div id="desc" class="entete-singl">		
	 <ol> 
	 	<li><h1><?php echo $resultat['name'];?></h1></li>
	 	<li>Prix : MGA <?php echo $resultat['price'];?></li>
	 	<li>En stock : <?php echo $resultat['catid'];?></li>
	 </ol> 
	</div>
<div id="video-tem" class="entete-singl">
<ol>
	<li>
		video Témoinagnge :
	</li>
	<li> 
		<?php echo '<video class="img-thumbnail" src="video/'.$resultat['id'].'.mp4"'.'controls width="350" height="190"'?>
	</li>
</ol></div>

</div>
<div id="special">
	<input type="button" class="bt" id="m" value="-">
	<input type="text" name="" id="champ-1" value="0" style="text-align: center;">
	<input type="button" class="bt" id="p" value="+">
	<a href="panier.php" id="p1">Ajouter au panier</a>
	<strong>Partager :</strong><a href="#" id="img-fb"><img src="image/facebook-logo-png-.jpg"></img></a>

</div>



<div id="info">

<h2>Déscription</h2>

		<p>
		<?php
			  echo $resultat['description'];
		?>
		

<h2>Mode d'utilisation</h2>
	
		<p>
		<?php
			  echo $resultat['use'];
		?>
</div>

</div>
<?php
	}
}
?>
