@extends("layouts.master")
@section("content")
<section class="rsvp-fin">
	<a class="show-invite" href="">show details</a>
	<div class="invitation">
		<div class="invitation--body">
			<h3><span class="h">When:</span> <time class="sm" datetime="2018-12-31 19:00">31.12.2018; <br>19:00 - <i>open end</i></time></h3>
			<h3><span class="h">Where:</span> <span class="sm"><a target="_blank" href="https://goo.gl/maps/Edokw975bjz">Leopold-Ernst-Gasse 40 <i class="s-break-opposite">/</i> <br class="s-break">4th Floor, Apt. 27</a></span></h3>
			{{-- <h3>Google Cal. Event: <span class="sm"><a target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=Mmx0NWY0ZzVqM2plbWJqa2M1bzEzczVidG0gbmlrLnNjaG9lQG0&amp;tmsrc=nik.schoe%40gmail.com"><img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_en.gif">Event</a></h3> --}}
			<p class="sm invite">
				<strong>We hereby cordially invite you</strong> 
				..to the <em>schoenberger’s</em> New Year’s Eve/housewarming party.
				In mid December we will have finished moving in. On the 31st of December we want to celebrate this with you.
				<br>Come as you are - in your fanciest outfit, sweatpants & hoodie or half naked. As long as you are FEELIN YO’SELF we don’t care what you wear.<br><br>
				See you soon,<br>
				Niklas <em>&</em> Stefanie <br>
				<em class="underline">schoenberger</em>
			</p>
		</div>
	</div>
	@include("partials.svgeez")
	<h2>Hi {{ Auth::user()->name }}! <a href="{{ route("admin.cp") }}">go to admin view.</a></h2>
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