@extends('layouts.auth')

@section('content')
<h1>Reset Password</h1>
<form method="POST" action="{{ route('password.request') }}">
    {{ csrf_field() }}

   <input type="hidden" name="token" value="{{ $token }}">

    <div>
        <label for="email" class="">E-Mail Address</label>
        <input id="email" type="email" class="" name="email" value="{{ $email or old('email') }}" required autofocus>
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
        <button type="submit" class="button">Reset Password</button>
    </div>
</form>
@endsection
