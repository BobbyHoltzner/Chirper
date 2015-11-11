@extends('layout')

@section('content')
	<div class="pull-left">
		<h1>Chirper App</h1>
	</div>
	<div style="padding-top:20px;" class="pull-right">
		<a class="btn btn-primary" href="/auth/logout">Logout</a>
	</div>
	<div style="clear:both"></div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2>New Chirp</h2>
			<hr>
			<form action="/chirps" method="POST">
				<input type="hidden" name="_token" id="token" value="{{ Session::token() }}">
				<input type="hidden" name="user_id" id="user_id" value="{{$user->id}}">
				<input type="hidden" name="user_name" id="user_name" value="{{ $user->name }}">
				<input type="hidden" name="user_email" id="user_email" value="{{$user->email}}">
				<div class="form-group">
					<textarea type="text" id="chirp" name="chirp" class="form-control" placeholder="Type your chirp!"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit" id="submitChirp">Submit Chirp</button>
				</div>
			</form>
			<h2>All Chirps</h2>
			<hr>
			<div class="row">
				<ul id="chirps">
					
				</ul>
			</div>
		</div>
	</div>
@endsection