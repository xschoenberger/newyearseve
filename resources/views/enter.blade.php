@extends("layouts.master")

@section("content")

	@guest
	<form action="{{ route('login') }}" method="POST" class="form">
		{{ csrf_field() }}
		@method("POST")
		<div class="form--group">
			<label for="name">Your Name</label>
			<input type="text" id="name" name="name">
		</div>
		<div class="form--group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
		</div>
		<div class="form--group form--group--submit">
			<button type="submit" class="btn">Submit</button>
		</div>
	</form>
	@endguest
@endsection