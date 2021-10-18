<!DOCTYPE html>
<html>
<head>
    <title>ARBRE DESIGN CO | CHECK OUT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- library validate -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.js"></script>
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
	<style type="text/css">
		body {
		    font-family: Arial;
		    font-size: 15px;
		    padding: 8px;
		}
		h2{
		    text-align:left;
		}

		* {
		    box-sizing: border-box;
		}

		.error {
		    color: #ff7315;
		    border-color: #ff7315;
		}

		.row {
		    display: -ms-flexbox; /* IE10 */
		    display: flex;
		    -ms-flex-wrap: wrap; /* IE10 */
		    flex-wrap: wrap;
		    margin: 0 -10px;
		}

		.col-25 {
		    -ms-flex: 25%; /* IE10 */
		    flex: 25%;
		}

		.col-50 {
		    -ms-flex: 50%; /* IE10 */
		    flex: 50%;
		}

		.col-75 {
		    -ms-flex: 55%; /* IE10 */
		    flex: 55%;
		}

		.col-25,.col-50,.col-75 {
		    padding: 0 16px;
		}

		.container {
		    background-color: #FFFFFF;
		    padding: 3px 18px 13px 18px;
		    border-radius: 3px;
		    box-shadow: 0 0 2rem 0 rgba(168, 180, 194, 0.37);
		}


		input[type=text] {
		    width: 100%;
		    margin-bottom: 20px;
		    padding: 12px;
		    border: 1px solid rgb(130, 26, 26);
		    border-radius: 1px;
		}

		input[type=number] {
		    width: 100%;
		    margin-bottom: 20px;
		    padding: 12px;
		    border: 1px solid rgb(130, 26, 26);
		    border-radius: 1px;
		}

		select[type=text] {
		    width: 100%;
		    margin-bottom: 20px;
		    padding: 12px;
		    border: 1px solid rgb(130, 26, 26);
		    border-radius: 1px;
		    font-size: 14px;"
		}

		label {
		    margin-bottom: 10px;
		    display: block;
		}

		.icon-container {
		    margin-bottom: 20px;
		    padding: 7px 0;
		    font-size: 24px;
		}

		.btn {
		    background-color: #01BAEF;
		    color: white;
		    padding: 12px;
		    margin: 10px 0;
		    border: none;
		    width: 100%;
		    border-radius: 3px;
		    cursor: pointer;
		    font-size: 17px;
		    box-shadow: 0 0 1rem 0 rgba(99, 123, 150, 0.329);

		}

		.btn:hover {
		    background-color: #0CBABA;
		}

		a {
		    color: #2196F3;
		}

		hr {
		    border: 1px solid lightgrey;
		}

		span.price {
		    float: right;
		    color: grey;
		}

		/* Responsive layout - when the screen is less than 800px wide, make the two columns 
		    stack on top of each other instead of next to each other (also change the direction 
		    - make the "cart" column go on top) 
		*/
		@media (max-width: 800px) {
		    .row {
		        flex-direction: column-reverse;
		    }
		    .col-25 {
		        margin-bottom: 20px;
		    }
		}

		.w3l-ecommerce-main .product-grid2 .add-to-cart {
		  color: #fff;
		  background-color: #232020;
		  font-size: 13px;
		  font-weight: 600;
		  text-align: center;
		  padding: 7px 7px;
		  left: 0;
		  bottom: -100%;
		  transition: all .3s;
		}

		.w3l-ecommerce-main .product-grid2 .add-to-cart:hover {
		  background-color: #ff7315;
		  text-decoration: none;
		}

		.w3l-ecommerce-main .product-grid2:hover .add-to-cart {
		  bottom: 0;
		}
	</style>
	<div class="container">
		<h2 style="margin: 10px;"><b>CHECK<span style=" color: #ff7315">OUT</span></b></h2>
		<div class="row">
		    <div class="col-75 card w3l-ecommerce-main ">
		        <div class="card-body product-grid2">
		            <form id="validate" action="{{url('/history/store')}}" method="GET">
		                {{csrf_field()}}
		                <div class="row">
		                    <div class="col-50">
		                        <h3 class="mt-2">Shipping Address</h3>
		                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
		                        <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
		                        <label for="provinsi">
		                        	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
								  	<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></svg> Provinsi</label>
		                        <input type="text" id="provinsi" name="provinsi" placeholder="Provinsi" required>
		                        <label for="kabupaten">
		                        	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
								  	<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></svg> Kabupaten</label>
		                        <input type="text" id="kabupaten" name="kabupaten" placeholder="Kabupaten" required>
		                        <label for="kecamatan">
		                        	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
								  	<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></svg> Kecamatan</label>
		                        <input type="text" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required>
		                        <label for="alamat_rumah">
		                        	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
		  							<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/></svg> Alamat Rumah</label>
		                        <input type="text" id="alamat_rumah" name="alamat_rumah" placeholder="Alamat" required>
		                        <label for="no_hp"><i class="fa fa-phone"></i> Phone</label>
		                        <input type="number" id="no_hp" name="no_hp" placeholder="Phone" required>
		                    </div>

		                    <div class="col-50">
		                        <h3 class="mt-2">Payment</h3>
		                        <label for="metode">Payment Method</label>
		                        <select  type="text" id="metode" name="metode">
		                        	<option></option>
		                        	<option value="1" >COD</option>
		                        	<option value="2">Kirim Suatu Alamat</option>
		                        </select>
		                        
		                    </div>
		                </div>
		                	<input type="submit" class="btn btn-md transmitv-cart ptransmitv-cart add-to-cart btn-block mt-2" value="Buat Pesanan">
		            
		        </div>
			    </div>
			    <div class="col-25">
			        <div class="container" style="font-size: 14px;">
			            <div class="alert alert-danger mt-2" role="alert" style="font-size: 13px;">
						  	Segera Lakukakn Pembayaran Sebelum Tanggal<br>
						  	<b>
							  <?php
			                    $pinjam            = date("d-m-Y");
			                    $tujuh_hari        = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
			                    $kembali           = date("d-m-Y", $tujuh_hari);
			                    echo "$kembali";
			                  ?>
			          		</b>
						</div>
			            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>
			            <p>
			            	<input type="" name="input_nama_barang" id="input_nama_barang" value="{{ $keranjang->product->nama_barang }}" hidden="">
			            	{{ $keranjang->product->nama_barang }}
			            	<input type="" name="input_harga" id="input_harga" value="Rp. {{ number_format($keranjang->product->harga) }}" hidden="">
			            	<span class="price">Rp. {{ number_format($keranjang->product->harga) }}</span></p>
			            <p>Jumlah Beli
			            	<input type="" name="input_jumlah" id="input_jumlah" value="{{ $keranjang->jumlah }}" hidden="">
			            	<span id="jumlah" name="jumlah" class="price">{{ $keranjang->jumlah }}</span></p>
			            <p>Berat<span class="price">{{ $keranjang->product->berat }}</span></p>
			            <hr>
			            <input type="" name="input_jumlah_harga"  id="input_jumlah_harga" value="{{ $keranjang->jumlah_harga }}" hidden="">
			            <p>Sub Total <span class="price" style="color:black" id="jumlah_harga" name="jumlah_harga">{{ $keranjang->jumlah_harga }}</span></p>
			            <p>Biaya Pengiriman 
			            	<input type="" id="input_ongkir" name="input_ongkir" value="0" hidden="">
			            	<span  class="price" style="color:black;" id="ongkir" name="ongkir"><small>0</small></span></p>
			            <p>Total 
			            	<input type="" name="input_total" id="input_total" hidden="">
			            	<span class="price total" style="color:black" id="total" name="total"><strong></strong></span></p>
			        </div>
			    </div>
			</form>
		</div>
	</div>
<!-- script validate js -->
<script>
    $('#validate').validate({
        roles: {
            fullname: {
                required: true,
            },
            kabupaten: {
                required: true,
            },
            provinsi: {
                required: true,
            },
            kecamatan: {
                required: true,
            },
            alamat_rumah: {
                required: true,
            },
            no_hp: {
                required: true,
            },
            metode: {
                required: true,
            },
            cardnumber: {
                required: true,
            },
            expmonth: {
                required: true,
            },
            expyear: {
                required: true,
            },
            cvv: {
                required: true,
            },
           
        },
        messages: {
            fullname:"Please input Full Name*",
            kabupaten:"Please input Kabupaten*",
            provinsi:"Please input Provinsi*",
            kecamatan:"Please input Kecamatan*",
            alamat_rumah:"Please input Alamat Rumah*",
            no_hp:"Please input Phone*",
            metode:"Please input Metode*",
            cardnumber:"Please input card number*",
            expmonth:"Please input exp month*",
            expyear:"Please input exp year*",
            cvv:"Please input cvv*",
        },
    });
</script>
</body>
</html>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#metode").change(function() {
			var metode = $(this).val();
			

			if (metode == 1) {
				var ongkir = 0;
				$("small").html(ongkir);
			} else{
				var ongkir = "{{ $keranjang->product->berat }}"*"10";
				$("small").html(ongkir);
			}

			var jml=document.getElementById('input_jumlah_harga').value;
			var jumlah=document.getElementById('input_jumlah').value;
			var nama_barang=document.getElementById('input_nama_barang').value;
			var harga=document.getElementById('input_harga').value;
			document.getElementById('input_ongkir').value=ongkir;
			var total=parseInt(jml)+parseInt(ongkir);
			document.getElementById('input_total').value=total;
			$(".total").html(total);

			// window.alert(total);

		});
	});
	// $("#total").keyup(function(){
	// 	var jumlah_harga = parseInt($("#jumlah_harga").val())
	// 	var ongkir = parseInt($("#ongkir").val())
	// 	var total = jumlah_harga + ongkir;
	// 	$("#total").attr("value",total);

	// 	console.log(total);
	// });
	// function total(){
	// 	var jml=document.getElementById('jumlah_harga').value;
	// 	var ong=document.getElementById('ongkir').value;
	// 	var total=jml+ong;
	// 	document.getElementById('total').value=total;
	// 	console.log(total);
	// }

	// function jml_beli(id){
	// 	jml=document.getElementById('jumlah_harga'+id).value;
	// 	ong=document.getElementById('ongkir'+id).value;
	// 	total= jml+ong;

	// 	console.log(jml);
	// 	console.log(ong);
	// 	console.log(total);

</script>