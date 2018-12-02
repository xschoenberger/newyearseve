@extends("layouts.master")
@section("content")
<section class="rsvp-fin">
	<a class="show-invite" href="">show details</a>
	<div class="invitation">
		<div class="invitation--body">
			<h3><span class="h">When:</span> <time class="sm" datetime="2018-12-31 19:00">31.12.2018; <br>19:00 - <i>open end</i></time></h3>
			<h3><span class="h">Where:</span> <span class="sm"><a target="_blank" href="https://goo.gl/maps/Edokw975bjz">Leopold-Ernst-Gasse 40 / Apt. 27, 4th Floor</a></span></h3>
			{{-- <h3>Google Cal. Event: <span class="sm"><a target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=Mmx0NWY0ZzVqM2plbWJqa2M1bzEzczVidG0gbmlrLnNjaG9lQG0&amp;tmsrc=nik.schoe%40gmail.com"><img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_en.gif">Event</a></h3> --}}
			<p class="sm">
				Ea freegan excepteur, hashtag typewriter vexillologist wolf leggings celiac venmo occupy adaptogen swag in nostrud. Organic shaman poutine, street art chia knausgaard four dollar toast. Synth bitters blue bottle raclette you probably haven't heard of them occupy. Eiusmod whatever tousled jianbing, narwhal cray edison bulb cupidatat hell of thundercats.
			</p>
		</div>
	</div>
	@include("partials.svgeez")
	<h2>Hi {{ Auth::user()->name }}!</h2>
	<h3>Your <em>RSVP</em> details:</h3>
	<form action="{{ route("rsvp.update") }}" method="POST" class="form rsvp-update">
		@csrf
		<div class="submit"><button type="submit">Update <em>RSVP</em>!</button></div>
		<div class="info rsvp">
			@if($info->rsvp == "coming")
			<input class="switch_input" type="radio" name="rsvp" id="yes" value="coming" checked>
			<input class="switch_input" type="radio" name="rsvp" id="no" value="not coming">
			<div class="info--value">
				<p>Coming/Not Coming?</p>
				<strong>{{ $info->rsvp }}!</strong>
				<strong>not coming!</strong>
			</div>
			<label class="switch" for="no" id="switch_no">switch</label>
			<label class="switch" for="yes" id="switch_yes">switch</label>
			@else
			<input class="switch_input" type="radio" name="rsvp" id="no" value="not coming" checked>
			<input class="switch_input" type="radio" name="rsvp" id="yes" value="coming">
			<div class="info--value">
				<p>Coming/Not Coming?</p>
				<strong>{{ $info->rsvp }}!</strong>
				<strong>coming!</strong>
			</div>
			<label class="switch" for="yes" id="switch_yes">switch</label>
			<label class="switch" for="no" id="switch_no">switch</label>
			@endif
			
		</div class="info">
		@if($info->rsvp == "coming")
		<div class="info plus_one">
			@if($info->plus_one == "yes")
			<input class="switch_input" type="radio" name="plus_one" id="yes_plus" value="yes" checked>
			<input class="switch_input" type="radio" name="plus_one" id="no_plus" value="no">
			<div class="info--value">
				<p>Bringing Someone?</p>
				<strong>{{ $info->plus_one }}!</strong>
				<strong>no!</strong>
			</div>
			<label class="switch" for="no_plus" id="switch_no_plus">switch</label>
			<label class="switch" for="yes_plus" id="switch_yes_plus">switch</label>
			@else
			<input class="switch_input" type="radio" name="plus_one" id="no_plus" value="no" checked>
			<input class="switch_input" type="radio" name="plus_one" id="yes_plus" value="yes">
			<div class="info--value">
				<p>Bringing Someone?</p>
				<strong>{{ $info->plus_one }}!</strong>
				<strong>yes!</strong>
			</div>
			<label class="switch" for="yes_plus" id="switch_yes_plus">switch</label>
			<label class="switch" for="no_plus" id="switch_no_plus">switch</label>
			@endif
		</div>
		<div class="cal">
			<p>
				<a target="_blank" href="https://calendar.google.com/calendar?cid=M3Q1NGkwM2tjbW0wbWQxdGljNWNlYzd2ZGtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ">
				<img src="{{ asset("imgs/icons/cal.png") }}" alt="calendar icon"><em>Add event to your calender</em></a>
			</p>
		</div>
		@endif
	</form>
</section>
@endsection