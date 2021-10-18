<!DOCTYPE html>
<html>
<head>
	<title>ARBRE DESIGN CO | HISTORY</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<body>
	<style type="text/css">
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
		<div class="content-header mt-4 mb-4">
			<p style="padding: 10px; font-size: 2em; font-family: sans-serif; font-weight: 600; "><b>Your Order <span style=" color: #ff7315">HISTORY</span></b></p>
		</div>
		<div class="content w3l-ecommerce-main">
	            <!-- /.box-header -->
	            <div class="box-body no-padding product-grid2">
	            	<div class="card mb-4">
	            		<div class="card-body">
	            			<p style="font-size: 1.4em; font-family: sans-serif; font-weight: 600; "><b>Success <span style=" color: #ff7315">Order</span></b></p>
	            			<p style="font-size: 1em; font-family: sans-serif;">Pesanan anda sudah sukses dipesan salanjutnya untuk pembayaran silahkan transfer di rekening <strong>Bank BRI Nomor Rekening : 47658-335741-984</strong></p>
	            		</div>
	            	</div>
	            	@if(count($checkout)>0)
		              <table class="table table-striped table-hover">
		                <tr>
		                	<th>No</th>
		                  <th>Nama Barang</th>
		                  <th>Harga</th>
		                  <th>Jumlah Beli</th>
		                  <th>Ongkir</th>
		                  <th>Total Bayar</th>
		                  <th>Status</th>
		                  <th>Aksi</th>
		                </tr>
		                @foreach ($checkout as $data)
		                <tr>
		                	<td>{{$loop->iteration}}</td>
		                  <td>{{$data->nama_barang}}</td>
		                  <td>{{$data->harga}}</td>
		                  <td>{{$data->jumlah}}</td>
		                  <td>Rp. {{ number_format($data->ongkir)}}</td>
		                  <td>Rp. {{ number_format($data->total)}}</td>
		                  <td>
		                  	<button type="button" class="btn btn-success btn-sm">{{$data->status}}</button>
		                  </td>
		                  <td>
		                  	<a href="{{url('/history/edit/'.$data->id)}}" class="btn transmitv-cart ptransmitv-cart add-to-cart btn-block">Detail</a>
		                  </td>
		                 <!--  @if(empty($data->bukti_pembayaran))
		                  <td>
		                  	<input type="file" name="bukti_pembayaran" id="bukti_pembayaran">
		                  </td>
		                  @else
		                  <td>
		                  	<img src="{{$data->bukti_pembayaran}}" height="30%" width="30%">
		                  </td>
		                  @endif -->
		                </tr>
		                @endforeach
		               </table>
			            @else
			               	<div class="alert alert-info" role="alert">
					    		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart3 mr-1" viewBox="0 0 16 16">
  									<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
								</svg>
								History Kosong
							</div>
						@endif
	              </div>
	            <!-- /.box-body -->
	          </div>
		</div>
	</div>

</body>
</html>