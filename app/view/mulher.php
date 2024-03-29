
<?php include("header.php");
?>

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>BEM VINDA</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Shop</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Categoria</h2>
						<ul class="category-menu">
							<li><a href="#">Vestido</a>
								<ul class="sub-menu">
									<li><a href="#">Vestido Curto <span>(2)</span></a></li>
									<li><a href="#">Vestido Rodado<span>(56)</span></a></li>
									<li><a href="#">Vestido Longo<span>(36)</span></a></li>
								</ul>
							</li>
							<li><a href="#">Blusas</a>
								<ul class="sub-menu">
									<li><a href="#">T-shirt<span>(2)</span></a></li>
									<li><a href="#">Regata<span>(56)</span></a></li>
									<li><a href="#">Moletom<span>(36)</span></a></li>
									<li><a href="#">Blazer<span>(36)</span></a></li>
								</ul></li>
								<li><a href="#">Calças</a>
									<ul class="sub-menu">
							<li><a href="#">Calça Leg<span>(2)</span></a></li>
							<li><a href="#">Jeans<span>(2)</span></a></li>
							<li><a href="#">Social<span>(2)</span></a></li>
							<li><a href="#">Bengaline<span>(2)</span></a></li>
							<li><a href="#">Jardineira<span>(2)</span></a></li>
						</ul></li>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">Filtrar por Preço</h2>
						<div class="price-range-wrap">
							<h4>Até qual preço deseja:</h4>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
								</span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
								</span>
							</div>
							<div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">Filtrar por Cor</h2>
						<div class="fw-color-choose">
							<div class="cs-item">
								<input type="radio" name="cs" id="gray-color">
								<label class="cs-gray" for="gray-color">
									<span>(3)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="orange-color">
								<label class="cs-orange" for="orange-color">
									<span>(25)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="yollow-color">
								<label class="cs-yollow" for="yollow-color">
									<span>(112)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="green-color">
								<label class="cs-green" for="green-color">
									<span>(75)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="purple-color">
								<label class="cs-purple" for="purple-color">
									<span>(9)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="blue-color" checked="">
								<label class="cs-blue" for="blue-color">
									<span>(29)</span>
								</label>
							</div>
						</div>
					</div>
					<div class="filter-widget mb-0">
						<h2 class="fw-title">Filtrar por Tamanho</h2>
						<div class="fw-size-choose">
							<div class="sc-item">
								<input type="radio" name="sc" id="xs-size">
								<label for="xs-size">PP</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="s-size">
								<label for="s-size">P</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="m-size"  checked="">
								<label for="m-size">M</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="l-size">
								<label for="l-size">G</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xl-size">
								<label for="xl-size">GG</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xxl-size">
								<label for="xxl-size">36</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xxl-size">
								<label for="xxl-size">38</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xxl-size">
								<label for="xxl-size">40</label>
							</div><div class="sc-item">
								<input type="radio" name="sc" id="xxl-size">
								<label for="xxl-size">41</label>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<div class="col-lg-4 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
									<div class="tag-sale">ON SALE</div>
									<img src="../../asset/img/product/8.jpg" alt="">
									<div class="pi-links">
										<a href="produtodetalhado.php" class="add-card"><i class="flaticon-bag"></i><span>Comprar</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$35,00</h6>
									<p>Black and White Stripes Dress</p>
								</div>
							</div>
						</div>



						</div>
						<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->


	<?php include("footer.php");
	?>
