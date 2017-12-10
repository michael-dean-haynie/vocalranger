@extends('layouts.app')

@section('content')
<h1>Register</h1>
<form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

    @include('shared/error-state')

    <div>
        <label for="name" class="">Name</label>
        <input id="name" type="text" class="" name="name" value="{{ old('name') }}" required autofocus>
    </div>

    <div>
        <label for="email" class="">E-Mail Address</label>
        <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password" class="">Password</label>
        <input id="password" type="password" class="" name="password" required>
    </div>

    <div>
        <label for="password-confirm" class="">Confirm Password</label>
        <input id="password-confirm" type="password" class="" name="password_confirmation" required>
    </div>

    <div>
        <button type="submit" class="button">Register</button>
    </div>
</form>
@endsection
