@extends("layouts.master")

@section("content")
    <div class="enter">
        {{-- <img class="intro-hxyds" width="100px" src="/imgs/me_hxyd.png" alt=""> --}}
        {{-- <img class="intro-hxyds"" width="100px" src="/imgs/face.png" alt=""> --}}
        <h2>
            <img width="200px" src="{{ asset("imgs/schoenbergersx.png") }}" alt="schoenbergers' logo">
        </h2>
        <div class="cnt">
            @guest
            <form action="{{ route('login') }}" method="POST" class="form">
                {{ csrf_field() }}
                @method("POST")
                <div class="form--group">
                    <input placeholder="name" type="text" id="name" name="name" value="{{ old("name") }}">
                    <label for="name">Name</label>
                </div>
                <div class="form--group">
                    <input type="password" placeholder="password" name="password" id="password">
                    <label for="password">Password</label>
                </div>
                <div class="form--group">
                    <button type="submit" class="btn">Submit</button>
                </div>
            </form>
            @endguest
        </div>
    </div>
@endsection