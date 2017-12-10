@extends('layouts.app')

@section('content')
<h1>Reset Password</h1>
<form method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}

    @include('shared/error-state')

    <div>
        <label for="email" class="">E-Mail Address</label>
        <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <button type="submit" class="button">Send Password Reset Link</button>
    </div>
</form>
@endsection
