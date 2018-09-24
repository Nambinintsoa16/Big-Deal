<?php
session_start();
require_once 'connect/connect.php';
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
?>


	<!-- SHOP CONTENT -->
	<section id="content">
		<div class="content-blog">
			<div class="container">
				<div class="row">
					<div class="page_header text-center">
						<h2>Votre Panier</h2>
					</div>
					<div class="col-md-12">

<table class="cart-table table table-bordered">
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>&nbsp;</th>
						<th>PRODUIT</th>
						<th>PRIX</th>
						<th>Quantité</th>
						<th>Totale</th>
					</tr>
				</thead>
				<tbody>
				<?php
					//print_r($cart);
				$total = 0;
					foreach ($cart as $key => $value) {
						//echo $key . " : " . $value['quantity'] ."<br>";
						$cartsql = "SELECT * FROM products WHERE id=$key";
						$cartres = mysqli_query($connection, $cartsql);
						$cartr = mysqli_fetch_assoc($cartres);


				 ?>
					<tr>
						<td>
							<a class="remove" href="delcart.php?id=<?php echo $key; ?>"><i class="fa fa-times"></i></a>
						</td>
						<td>
							<a href="#"><img src="admin/<?php echo $cartr['thumb']; ?>" alt="" height="90" width="90"></a>
						</td>
						<td>
							<a href="single.php?id=<?php echo $cartr['id']; ?>"><?php echo substr($cartr['name'], 0 , 30); ?></a>
						</td>
						<td>
							<span class="amount">MGA<?php echo $cartr['price']; ?>.00/-</span>
						</td>
						<td>
							<div class="quantity"><?php echo $value['quantity']; ?></div>
						</td>
						<td>
							<span class="amount">MGA<?php echo ($cartr['price']*$value['quantity']); ?>.00/-</span>
						</td>
					</tr>
				<?php
					$total = $total + ($cartr['price']*$value['quantity']);
				} ?>
					<tr>
						<td colspan="6" class="actions">
							<div class="col-md-6">
							<!--	<div class="coupon">
									<label>Coupon:</label><br>
									<input placeholder="Coupon code" type="text"> <button type="submit">Apply</button>
								</div> -->
							</div>
							<div class="col-md-6">
								<div class="cart-btn">
									<!-- <button class="button btn-md" type="submit">Update Cart</button> -->
									<a href="checkout.php" class="button btn-md" >Passez au payment</a>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>

			<div class="cart_totals">
				<div class="col-md-6 push-md-6 no-padding">
					<h4 class="heading">Totale</h4>
					<table class="table table-bordered col-md-6">
						<tbody>
							<tr>
								<th>Sous total du panier</th>
								<td><span class="amount">MGA <?php echo $total; ?>.00/-</span></td>
							</tr>
							<tr>
								<th>Livraison</th>
								<td>
									Livraison Gratuite
								</td>
							</tr>
							<tr>
								<th>Total du commande</th>
								<td><strong><span class="amount">MGA <?php echo $total; ?>.00/-</span></strong> </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

					</div>
				</div>
			</div>
		</div>
	</section>

