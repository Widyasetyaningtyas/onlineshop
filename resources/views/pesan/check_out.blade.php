<!DOCTYPE html>
<html>
<head>
	
	<title>ARBRE DESIGN CO | PESAN</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

	
</head>
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
		<div class="row">
			<div class="col-md-12">
				<div class="head">
					<p style="text-align: center; padding: 30px; font-size: 2em; font-family: sans-serif; font-weight: 600; "><b>CHECK <span style=" color: #ff7315">OUT</span></b></p>
					<div id="read"></div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card w3l-ecommerce-main">
					<div class="card-body product-grid2">
						@if(count($query)>0)
						<table class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Product</th>
									<th>Gambar</th>
									<th>Jumlah</th>
									<th>Harga</th>
									<th>Total Harga</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									
									@foreach($query as $data)
							     	<td>{{$loop->iteration}}</td>
							     	<td>{{$data->nama_barang}}</td>
							     	<td><img src="{{ asset($data->gambar1)}}" width="20%" style="width: 80px;"></td>
							     	
							     	<td>
							     		<input type="number" min="1" readonly="" onclick="show({{ $data->id }})"  class="form-control" name="jumlah" id="jumlah{{ $loop->iteration }}" value="{{$data->jumlah}}" style="width: 60px;" onchange="jml_beli({{ $loop->iteration }})">
							     	</td>
							     	<td align="left">
							     		<input type="text" class="form-control" name="harga" id="harga{{ $loop->iteration }}" readonly value="{{($data->harga)}}">
							     	</td>
							     	<td align="left">
							     		<input type="text" class="form-control" id="jumlah_harga{{ $loop->iteration }}" name="jumlah_harga" readonly value="{{($data->jumlah_harga)}}">
							     		
							     	</td>
							     	<td>
							     		<a href="{{ url('check_out/destroy/'.$data->id) }}">
							     			<button class="btn btn-sm transmitv-cart ptransmitv-cart add-to-cart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
											<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
											</svg></button>
							     		</a>
							     		<a href="{{ url('konfirmasi-check-out') }}" class="btn btn-sm transmitv-cart ptransmitv-cart add-to-cart">Check Out</a>
							     	</td>

							    </tr>
							    @endforeach
							    
							    <tr>
							    	<td colspan="5" align="right"><strong>Total Harga : </strong></td>
							    	<td><strong><span id="total_harga">{{ $query->sum('jumlah_harga')}}</span></strong></td>
							    	<td>
							    		<a href="{{ url('konfirmasi-check-out') }}" class="btn btn-sm transmitv-cart ptransmitv-cart add-to-cart">Check Out</a>
							    	</td>
							    </tr>
							</tbody>
						</table>
						@else
					    	<div class="alert alert-info" role="alert">
					    		<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart3 mr-1" viewBox="0 0 16 16">
  									<path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
								</svg>
								Keranjang Kosong
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Ubah Quantity</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	        <div class="col-md-12">
	        	<table>
	        		<thead>
	        			<tr>
	        				<th>Jumlah</th>
	        			</tr>
	        		</thead>
	        		<tbody>
	        			<tr>
	        				<td>
	        					<input type="number" min="1" class="form-control" name="jumlah" id="jumlah{{ $loop->iteration }}" value="{{ $data->jumlah }}" style="width: 60px;" onchange="jml_beli({{ $loop->iteration }})">
	        				</td>
	        			</tr>
	        		</tbody>
	        	</table>
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" onclick="show({{ $data->id }})">Update</button>
	      </div>
	    </div>
	  </div>
	</div>

</body>
</html>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/javascript">
	function read()
	{
		$.get("{{ url('read') }}", {}, function(data, status) {
			$("#read").html(data);
		})
	}

	function show(id)
	{
		$.get("{{ url('show') }}/" + id, {}, function(data, status) {
			$("#exampleModalLabel").html('edit jumlah')
			$("#page").html(data);
			$("#exampleModal").modal('show');
		});
				var jumlah = $("#jumlah").val();
				$.ajax({
					type: "get",
					url: "{{ url('show') }}/" + id,
					data: "jumlah=" + jumlah,
					success: function(data) {
						$(".btn-close").click();
						read()
					}
				});
			
	}


	


</script>

<script type="text/javascript">
	function jml_beli(id){
		hrg=document.getElementById('harga'+id).value;
		jml=document.getElementById('jumlah'+id).value;
		total= hrg*jml;
		document.getElementById('jumlah_harga'+id).value=total;
		console.log(hrg);
		console.log(jml);
		//console.log(total);
	}
</script>