<!DOCTYPE html>
<html>
<head>
	
	<title>ARBRE DESIGN CO | PESAN</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="head">
					<p style="text-align: center; padding: 30px; font-size: 2em; font-family: sans-serif; font-weight: 600; "><b>CHECK <span style=" color: #ff7315">OUT</span></b></p>
				</div>
			</div>
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<table class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Product</th>
									<th>Jumlah</th>
									<th>Harga</th>
									<th>Total Harga</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									@if(!empty($query))
									@foreach($query as $data)
							     	<td>{{$loop->iteration}}</td>
							     	<td>{{$data->nama_barang}}</td>
							     	<td>{{$data->jumlah}}</td>
							     	<td align="left">Rp. {{ number_format($data->harga)}}</td>
							     	<td align="left">Rp. {{ number_format($data->jumlah_harga)}}</td>
							     	<td>
							     		<form action="{{ url('check_out') }}" method="post">
							     			<button type="submit" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
											<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
											</svg></button>
							     		</form>
							     	</td>

							    </tr>
							    @endforeach
							    @endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>