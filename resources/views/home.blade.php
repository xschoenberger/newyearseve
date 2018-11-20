@extends("layouts.master")
@section("content")
{{-- <div id="gui"></div> --}}
<div id="canvas-container">
   @include("partials.svgeez")
	@auth
	{{-- <form class="logout-form" action="{{ route("logout") }}" method="POST">
		@csrf
		<button type="submit">logout</button>
	</form> --}}
	@endauth
	<h2 class="tap"><span>Hi</span><br><span>{{ Auth::user()->name }} @if(Auth::user()->name == "valentina")<i>:)</i> @endif</span></h2>
	<a class="show-invite" href="">show details</a>
	<div class="invitation">
		<div class="bg"></div>
		<div class="invitation--head">
			<h2>New Year's Eve</h2>
			{{-- <h3>at schoenberger's</h3> --}}
		</div>
		<div class="invitation--body">
			<h3>Time: <time class="sm" datetime="2018-12-31 19:00">31.12.2018 - 19:00</time></h3>
			<h3>Place: <span class="sm"><a target="_blank" href="https://goo.gl/maps/Edokw975bjz">Leopold-Ernst-Gasse 40 / 4th Floor, Top 27</a></span></h3>
			<p class="sm">
				Ea freegan excepteur, hashtag typewriter vexillologist wolf leggings celiac venmo occupy adaptogen swag in nostrud. Organic shaman poutine, street art chia knausgaard four dollar toast. Synth bitters blue bottle raclette you probably haven't heard of them occupy. Eiusmod whatever tousled jianbing, narwhal cray edison bulb cupidatat hell of thundercats. Taiyaki dreamcatcher raclette forage. Man bun cardigan normcore vexillologist mustache offal. Tumblr selfies keytar tempor dolore eu in trust fund iPhone ethical salvia snackwave pok pok.
			</p>
		</div>
	</div>
	{{-- <h2 class="tap tap--1">tap</h2> --}}
	{{-- <h2 class="tap tap--2">tap</h2> --}}
</div>
@endsection