


<?php include("header.php")?>
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Já estamos chegando ao fim :) !</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<form class="checkout-form">
						<div class="cf-title">Endereço para Entrega</div>
						<div class="row">


						</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<input type="text" placeholder="Rua">
								<input type="text" placeholder="Bairro">
								<input type="text" placeholder="Complemento">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Numero">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Telefone">
							</div>
						</div>
						<div class="cf-title">Frete</div>
						<div class="row shipping-btns">
							<div class="col-6">
								<h4>Pac</h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-1">
										<label for="ship-1">R$25</label>
									</div>
								</div>
							</div>
							<div class="col-6">
								<h4>Sedex  </h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-2">
										<label for="ship-2">R$ 50</label>
									</div>
								</div>
							</div>
						</div>
						<div class="cf-title">Forma de Pagamento</div>
						<ul class="payment-list">
							<li>Boleto<a href="#"><img src="../../asset/img/paypal.png" alt=""></a></li>
							<li>Credito<a href="#"><img src="../../asset/img/mastercart.png" alt=""></a></li>
							<li>Débito <a href="#"><img src="../../asset/img/mastercart.png" alt=""></a></li>
						</ul>
						<button class="site-btn submit-order-btn">Finalizar a Compra</button>
					</form>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>Resumo do Pedido</h3>
						<ul class="product-list">
							<li>
								<div class="pl-thumb"><img src="../../asset/img/cart/1.jpg" alt=""></div>
								<h6>Nome do Produto</h6>
								<p>R$45.90</p>
							</li>
							<li>
								<div class="pl-thumb"><img src="../../asset/img/cart/2.jpg" alt=""></div>
								<h6>Nome do Produto</h6>
								<p>R$45.90</p>
							</li>
						</ul>
						<ul class="price-list">
							<li>Total<span>R$99.90</span></li>
							<li>Frete<span>R$50,00</span></li>
							<li class="total">Total<span>R$ 149,00</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- checkout section end -->

	<?php include("footer.php")?>
