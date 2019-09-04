<?php include("header.php");
?>
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="">Home</a>
				<?php // $_SERVER['REQUEST_URI']?>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- cart section end -->
  <section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 order-2 order-lg-1">
					<form class="checkout-form">
						<div class="cf-title">Cadastrar-se</div>
						<div class="row">
						</div>
						<div class="row address-inputs">
							<div class="col-md-9">
								<input type="text" placeholder="Nome">
								<input type="text" placeholder="email">
								<input type="text" placeholder="CPF">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Telefone">
							</div>
              <div class="col-md-4 ">
              <button class="site-btn submit-order-btn">Enviar</button>
            </div>
						</div>
					</form>
        </div>
				<div class="col-lg-5 order-1 order-lg-2">
					<form class="checkout-form">
						<div class="cf-title">login</div>
						<div class="row">
						</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<input type="text" placeholder="email">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="senha">
							</div>
              <div class="col-md-4 ">
              <button class="site-btn submit-order-btn">Enviar</button>
            </div>
						</div>
					</form>
        </div>
		</div>
	</section>
	<?php include("footer.php");
	?>
