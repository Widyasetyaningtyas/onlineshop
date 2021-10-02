<!DOCTYPE html>
<html>
<head>
	<title>ARBREDESIGNCO | SHOP</title>
</head>
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		  <title>ARBRE DESIGN CO</title>
		  <!-- Template CSS -->
		  <link rel="stylesheet" href="assets/css/style-starter.css">
		  <!-- Template CSS -->
		  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
		  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
<body>
	<div class="w3l-ecommerce-main">
		
		<div class="ecom-contenthny py-5">
			<div class="container py-lg-5">
				<h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
				<p class="text-center">Handpicked Favourites just for you</p>
				<!-- /row-->
				
				<div class="ecom-products-grids row mt-lg-5 mt-3">
					@foreach ($product as $data)
					<div class="col-lg-3 col-6 product-incfhny mt-4">
						<div class="product-grid2 transmitv">
							<div class="product-image2">
								<a href="#">
									<img class="pic-1 img-fluid" src="{{$data->gambar1}}">
									<img class="pic-2 img-fluid" src="{{$data->gambar2}}">
								</a>
								<ul class="social">
										<li><a href="#" data-tip="Quick View"><span class="fa fa-eye"></span></a></li>

										<li><a href="#" data-tip="Add to Cart"><span class="fa fa-shopping-bag"></span></a>
										</li>
								</ul>
								<div class="transmitv single-item">
								<form action="#" method="post">
										<input type="hidden" name="cmd" value="_cart">
										<input type="hidden" name="add" value="{{$data->id}}">
										<input type="hidden" name="transmitv_item" value="{{$data->nama_barang}}">
										<input type="hidden" name="amount" value="{{$data->harga}}">
										<button type="submit" class="transmitv-cart ptransmitv-cart add-to-cart">
											Add to Cart
										</button>
									</form>
								</div>
							</div>
							<div class="product-content">
								<h3 class="title"><a href="#">{{$data->nama_barang}}</a></h3>
								<span class="price">Rp. {{number_format($data->harga)}}</span>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<!-- //row-->
			</div>
		</div>
	</div>
</body>
</html>