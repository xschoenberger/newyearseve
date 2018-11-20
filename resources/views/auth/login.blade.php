@extends("layouts.master")

@section("content")
    <div class="enter">
        <div class="cnt">
            @guest
            <form action="{{ route('login') }}" method="POST" class="form">
                {{ csrf_field() }}
                @method("POST")
                <div class="form--group">
                    <input placeholder="name" type="text" id="name" name="name">
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