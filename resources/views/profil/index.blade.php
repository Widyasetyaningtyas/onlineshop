<!DOCTYPE html>
<html lang="en">
<head>
	<title>ARBRE DESIGN CO | PROFIL</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <!-- Template CSS -->
  
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<div class="card">
					<div class="body-card m-4">
						<h4><i class="fa fa-user"></i> My Profile</h4>
						<table class="table table-striped table-hover mt-4">
							<tbody>
								<tr>
									<td>Name</td>
									<td>:</td>
									<td>{{ $user->name }}</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>{{ $user->email }}</td>
								</tr>
								<tr>
									<td>Phone</td>
									<td>:</td>
									<td>{{ $user->no_hp }}</td>
								</tr>
								<tr>
									<td>Address</td>
									<td>:</td>
									<td>{{ $user->alamat }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-12 mt-2">
				<div class="card">
					<div class="card-body">
						<h4><i class="fa fa-pencil"></i> Edit Profile</h4>
						<form action="{{url('/profil/update/'.$user->id)}}" method="POST">
		                @csrf
		                <div class="card-body">
		                    @if(session('errors'))
		                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
		                            Something it's wrong:
		                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                                <span aria-hidden="true">×</span>
		                            </button>
		                            <ul>
		                            @foreach ($errors->all() as $error)
		                            <li>{{ $error }}</li>
		                            @endforeach
		                            </ul>
		                        </div>
		                    @endif
		                    <div class="form-group">
		                        <label for=""><strong>Full Name</strong></label>
		                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
		                    </div>
		                    <div class="form-group">
		                        <label for=""><strong>Email</strong></label>
		                        <input type="text" name="email" class="form-control" value="{{ $user->email }}">
		                    </div>
		                    <div class="form-group">
		                        <label for=""><strong>Phone</strong></label>
		                        <input type="text" name="no_hp" class="form-control" value="{{ $user->no_hp }}">
		                    </div>
		                    <div class="form-group">
		                        <label for=""><strong>Address</strong></label>
		                        <textarea name="alamat" class="form-control">{{ $user->alamat }}</textarea>
		                    </div>
		                    <div class="form-group">
		                        <label for=""><strong>Password</strong></label>
		                        <input type="password" name="password" class="form-control">
		                    </div>
		                    <div class="form-group">
		                        <label for=""><strong>Confirm Password</strong></label>
		                        <input type="password" name="password_confirmation" class="form-control">
		                    </div>
		                </div>
		                <div class="card-footer">
		                    <button type="submit" class="btn btn-primary">Save</button>
		                </div>
		                </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>