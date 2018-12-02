@extends("layouts.master")
@section("content")
<section class="rsvp-fin cp">
	{{-- @include("partials.svgeez") --}}
	<div class="cp--guest_list">
		<h2>Guest list</h2>
		<h3>View all <em>RSVP's</em> and their status.</h3>
		<div class="rsvps">
			<div class="rsvps--cnt rsvps--head">
				<h3>Name</h3>
				<h3>Coming / Not Coming</h3>
				<h3>plus one?</h3>
			</div>
			@foreach($guests as $guest)
			<div class="rsvps--cnt">
				<h4>{{ $guest->user->name }}</h4>
				<p class="@if($guest->rsvp == "coming")yes @else no @endif"><em>{{ $guest->rsvp }}<span class="icon"></span></em></p>
				<p class="@if($guest->plus_one == "yes")yes @else no @endif"><em>{{ $guest->plus_one }}<span class="icon"></span></em></p>
			</div>
			@endforeach
		</div>
	</div>
	<div class="cp--stats">
		<h2>Statistics overview</h2>
		<p>There are currently <em>{{ count($guest_list["rsvp"]) + count($guest_list["plus_one"]) }}</em> guests planned!</p>
		<p><em>{{ count($guest_list["plus_one"]) }}</em> @if(count($guest_list["plus_one"]) == 1) guest is @else guests are @endif bringing someone.</p>
	</div>
</section>
@endsection