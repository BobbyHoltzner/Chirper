@extends('layout')

@section('content')
	<div class="row">
	<h1>Welcome to the MOS Test Project</h1>
	<h2>Login or register to continue.</h2>
		<div class="col-md-6">
			<h2>Login</h2>
			<form action="/auth/login">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="">Email Address</label>
					<input type="email" name="email" class="form-control" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" name="password" class="form-control" placeholder="Password">
				</div>
				<button class="btn btn-primary" type="submit">Login</button>
			</form>
		</div>
		<div class="col-md-6">
			<h2>Register</h2>
			<form action="/auth/register" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="">Your Name</label>
					<input type="text" name="name" class="form-control" placeholder="Your Name">
				</div>
				<div class="form-group">
					<label for="">Your Email Address</label>
					<input type="email" name="email" class="form-control" placeholder="Your Email">
				</div>
				<div class="form-group">
					<label for="">Your Password</label>
					<input type="password" name="password" class="form-control" placeholder="Your Password">
				</div>
				<div class="form-group">
					<label for="">Confirm Password</label>
					<input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
				</div>
				<button class="btn btn-primary" type="submit">Register</button>

			</form>
		</div>
	</div>
@endsection