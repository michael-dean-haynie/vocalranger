@extends('layouts.app')

@section('content')
<h1>Login</h1>
<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    @include('shared/error-state')

    <div>
        <label for="email" class="">E-Mail Address</label>
        <input id="email" type="email" name="email" class="" value="{{ old('email') }}" required autofocus>
    </div>

    <div>
        <label for="password" class="">Password</label>
        <input id="password" type="password" class="" name="password" required>
    </div>

    <div>
        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
        </label>
    </div>

    <div>
        <button type="submit" class="button">Login</button>
        <a class="" href="{{ route('password.request') }}">Forgot Your Password?</a>
    </div>
</form>
@endsection
