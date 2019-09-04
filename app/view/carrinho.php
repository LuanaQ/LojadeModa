<?php include("header.php");
?>

	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Produto no seu carrinho :) </h3>
						<div class="cart-table-warp">
							<table>
							<thead>
								<tr>
									<th class="product-th">Produto</th>
									<th class="quy-th">Quantidade</th>
									<th class="size-th">Tamanho</th>
									<th class="total-th">Preço</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="product-col">
										<img src="../../asset/img/cart/1.jpg" alt="">
										<div class="pc-title">
											<h4>Animal Print Dress</h4>
											<p>$45.90</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="1">
											</div>
                    					</div>
									</td>
									<td class="size-col"><h4>Size M</h4></td>
									<td class="total-col"><h4>$45.90</h4></td>
								</tr>
								<tr>
									<td class="product-col">
										<img src="../../asset/img/cart/2.jpg" alt="">
										<div class="pc-title">
											<h4>Ruffle Pink Top</h4>
											<p>$45.90</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="1">
											</div>
                    					</div>
									</td>
									<td class="size-col"><h4>Size M</h4></td>
									<td class="total-col"><h4>$45.90</h4></td>
								</tr>
								<tr>
									<td class="product-col">
										<img src="../../asset/img/cart/3.jpg" alt="">
										<div class="pc-title">
											<h4>Skinny Jeans</h4>
											<p>$45.90</p>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="1">
											</div>
                    					</div>
									</td>
									<td class="size-col"><h4>Size M</h4></td>
									<td class="total-col"><h4>$45.90</h4></td>
								</tr>
							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Total <span>$99.90</span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<form class="promo-code-form">
						<input type="text" placeholder="Codigo de desconto">
						<button>Aplicar</button>
					</form>
					<a href="finalizarcompra.php" class="site-btn">Finalizar</a>
					<a href="" class="site-btn sb-dark">Continuar Comprando</a>
				</div>
			</div>
		</div>
	</section>
	<!-- cart section end -->
	<?php include("footer.php");
	?>
