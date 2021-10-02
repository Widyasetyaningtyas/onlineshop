<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ARBRE DESIGN CO | MUG</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
</head>
<body>
	<div class="w3l-banner-slider-main">
		<div class="container">
			<a href="{{url('http://127.0.0.1:8000/')}}" class="back-button btn">
				<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
				  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
				</svg>
			</a>
			
		</div>
		<div class="theme theme-detail my-3">
	        <div class="row justify-content-center">
	            <div class="col-11 col-lg-10">
	                <div class="card border-0 mb-3 pb-2 card-theme">
	                    <div class="card-body d-flex">
	                        <!-- start row-->
	                        @foreach ($query as $data)
	                        <div class="row">
	                        	<div class="col-12 col-md-6 pr-4 my-auto">
	                                <img src="{{$data->gambar2}}" alt="" class="card-img align-self-center card-img-lg">
	                            </div>
	                            <div class="col-0 col-md-6 px-3 pb-3">
	                                <h5 class="mt-4 mt-md-0 mb-4 mb-md-4"><span class="lohny">{{$data->nama_kategori}} </span></h5>
	                                <p class="mb-md-5">{{$data->deskripsi_kategori}}</p>
	                            </div>
	                        </div>
	                        @endforeach
	                        <!-- end row -->
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="w3l-ecommerce-main" style="margin-top: -100px;">
			<div class="ecom-contenthny py-5">
				<div class="container py-lg-5">
					<h3 class="hny-title mb-0 text-center">Shop With <span>Us</span></h3>
					<p class="text-center">Handpicked Favourites just for you</p>
					<!-- /row-->
					
					<div class="ecom-products-grids row mt-lg-5 mt-3">
						@foreach ($query as $data)
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

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-2.1.4.min.js"></script>
<!--/login-->
<script>
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
  </script>
<!--//login-->
<script>
// optional
		$('#customerhnyCarousel').carousel({
				interval: 5000
    });
  </script>
 <!-- cart-js -->
 <script src="assets/js/minicart.js"></script>
 <script>
     transmitv.render();

     transmitv.cart.on('transmitv_checkout', function (evt) {
         var items, len, i;

         if (this.subtotal() > 0) {
             items = this.items();

             for (i = 0, len = items.length; i < len; i++) {}
         }
     });
 </script>
 <!-- //cart-js -->
<!--pop-up-box-->
<script src="assets/js/jquery.magnific-popup.js"></script>
<!--//pop-up-box-->
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

  });
</script>
<!--//search-bar-->
<!-- disable body scroll which navbar is in active -->

<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
<script src="assets/js/bootstrap.min.js"></script>