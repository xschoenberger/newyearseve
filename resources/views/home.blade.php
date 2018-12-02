@extends("layouts.master")
@section("content")
{{-- <div id="gui"></div> --}}
@auth
{{-- <form class="logout-form" action="{{ route("logout") }}" method="POST">
	@csrf
	<button type="submit">logout</button>
</form> --}}
@endauth
<div id="canvas-container">
   @include("partials.svgeez")
	<h2 class="tap"><span>Hi</span><br><span>{{ Auth::user()->name }} @if(Auth::user()->name == "valentina")<i>:)</i> @endif</span></h2>
	<a class="show-invite" href="">show details</a>
	<div class="invitation--head">
		<h2>New Year's Eve</h2>
		<h3><span>at schoenberger's</span></h3>
	</div>
	<div class="invitation">
		<div class="bg"></div>
		<div class="invitation--body">
			<h3><span class="h">When:</span> <time class="sm" style="z-index:-1;" datetime="2018-12-31 19:00">31.12.2018; <br>19:00 - <em>open end</em></time></h3>
			<h3><span class="h">Where:</span> <span class="sm"><a target="_blank" href="https://goo.gl/maps/Edokw975bjz">Leopold-Ernst-Gasse 40 <i class="s-break-opposite">/</i> <br class="s-break">4th Floor, Apt. 27</a></span></h3>
			{{-- <h3>Google Cal. Event: <span class="sm"><a target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=Mmx0NWY0ZzVqM2plbWJqa2M1bzEzczVidG0gbmlrLnNjaG9lQG0&amp;tmsrc=nik.schoe%40gmail.com"><img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_en.gif">Event</a></h3> --}}
			<p class="sm">
				Ea freegan excepteur, hashtag typewriter vexillologist wolf leggings celiac venmo occupy adaptogen swag in nostrud. Organic shaman poutine, street art chia knausgaard four dollar toast. Synth bitters blue bottle raclette you probably haven't.
			</p>
			<form action="{{ route("rsvp.post") }}" method="POST" class="form rsvp">
				@csrf
				<h3><em class="h">RSVP</em> <span>/ˌɑː.res.viːˈpiː/</span></h3>
				<h5>abbreviation for "répondez s’il vous plaît", French for "<strong>please reply</strong>";</h5>
				<div class="form--group">
					<div class="form--group--cnt">
						<input type="radio" name="rsvp" id="yes" value="coming">
						<label for="yes">Down to clown!</label>
						<span class="input-icon"></span>

						<input type="checkbox" name="plus_one" id="plus_one">
						<label class="plus_one" for="plus_one">Bringing someone?</label>
						<span class="pal pal--yuh">- Yup.</span>
						<span class="pal pal--nah">- Nope.</span>
					</div>
					<div class="form--group--cnt">
						<input type="radio" name="rsvp" id="no" value="not coming">
						<label for="no">No clownin'</label>
						<span class="input-icon"></span>
					</div>
				</div>
				<div class="form--submit">
					<button class="btn" type="submit">Submit RSVP</button>
					<span class="rsvp-msg"></span>
					<span class="info">Please tell us if you're coming or not :)<br>(YES = down to clown; NO = not clownin')</span>
				</div>
			</form>
		</div>
	</div>
	{{-- <h2 class="tap tap--1">tap</h2> --}}
	{{-- <h2 class="tap tap--2">tap</h2> --}}
</div>
@endsection