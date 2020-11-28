<!-- shopping Cart Section -->
		<section id="cart" class="py-3">
			<div class="container-fluid w-75">
				<h5 class="font-rubik font-size-20"> Shopping Cart</h5>


				<!-- shopping cart items-->
				<div class="row">
					<div class="col-sm-9">
						<!--cart item-->
						<div class="row border-top py-3 mt-3">
							<div class="col-sm-2">
								<img src="./assets/products/Samsung-Galaxy-J6.jpg" alt="img" class="img-fluid" style="height: 120px;">
							</div>
							<div class="col-sm-8">
								<h5 class="font-baloo font-size-20">Samsung Galaxy J6</h5>
								<small>by Samsung</small>
								<!-- rating -->
								<div class="d-flex">
									<div class="rating text-warning font-size-12">
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="far fa-star"></i></span>
									</div>
									<a href="#" class="px-2 font-raleway font-size-12">19,0987 ratings</a>
								</div>
								<!-- !rating -->
								<!-- product quantity -->
								<div class="qty d-flex pt-2">
									<div class=" d-flex font-raleway w-25">
										<button class="qty-up border bg-light" data-id="pro1"><i class="fa fa-angle-up"></i></button>
										<input type="text" data-id="pro1" class="qty-input border px-2 w-100 bg-light"disabled value="1" placeholder="1">
										<button data-id="pro1" class="qty-down border bg-light"><i class="fa fa-angle-down"></i></button>
									</div>
									<button type="submit" class="btn font-baloo text-danger px-3 border-right">delete</button>
									<button type="submit" class="btn font-baloo text-danger">save for later</button>
								</div>
								<!-- !product quantity -->
							</div>

							<div class="col-sm-2 text-right">
								<div class="font-size-20 text-danger font-baloo">
									$ <span class="product_price">150</span>
								</div>
							</div>
						</div>
						<div class="row border-top py-3 mt-3">
							<div class="col-sm-2">
								<img src="./assets/products/redmi.jpg" alt="img" class="img-fluid" style="height: 120px;">
							</div>
							<div class="col-sm-8">
								<h5 class="font-baloo font-size-20">Redmi</h5>
								<small>by Redmi</small>
								<!-- rating -->
								<div class="d-flex">
									<div class="rating text-warning font-size-12">
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="far fa-star"></i></span>
									</div>
									<a href="#" class="px-2 font-raleway font-size-12">20,1987 ratings</a>
								</div>
								<!-- !rating -->
								<!-- product quantity -->
								<div class="qty d-flex pt-2">
									<div class=" d-flex font-raleway w-25">
										<button class="qty-up border bg-light"><i class="fa fa-angle-up"></i></button>
										<input type="text" class="qty-input border px-2 w-100 bg-light"disabled value="1" placeholder="1">
										<button  class="qty-down border bg-light"><i class="fa fa-angle-down"></i></button>
									</div>
									<button type="submit" class="btn font-baloo text-danger px-3 border-right">delete</button>
									<button type="submit" class="btn font-baloo text-danger">save for later</button>
								</div>
								<!-- !product quantity -->
							</div>

							<div class="col-sm-2 text-right">
								<div class="font-size-20 text-danger font-baloo">
									$ <span class="product_price">150</span>
								</div>
							</div>
						</div>
						<!--!cart item-->
					</div>

					<!--subtotal section-->
					<div class="col-sm-3">
						<div class="sub-total border py-3 mt-2 text-center">
							<h6 class="font-size-12 font-raleway text-success"><i class="fas fa-check "></i>Your Order is eligible for <strong>FREE</strong> delivery</h6>
							<div class="border-top py-4">
								<h5 class="font-baloo font-size-14">SubTotal(2 item):&nbsp;<span class="text-danger">$<span class="text-danger" id="deal-price">300.00</span></span></h5>
								<button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
							</div>
						</div>
					</div>
					<!--!subtotal section-->
				</div>
				<!-- !shopping cart items-->
			</div>
		</section>
		<!-- !shopping Cart Section -->
