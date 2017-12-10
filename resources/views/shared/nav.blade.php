{{-- {{ var_dump($navData) }} --}}
{{-- {{ var_dump($navDataFC) }} --}}
<div class="top-bar">
    <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">{{ config('app.name', 'Laravel') }}</li>
            @if($navData->isAuthed && $navData->user->super_admin)
                <li><a href="#">Admins</a></li>
                <li><a href="#">Programs</a></li>
            @endif
            <li><a class="{{ Helpers::checkAct($activeMenu, 'about') }}" href="{{ route('about') }}">About</a></li>
        </ul>
    </div>
    <div class="top-bar-right">
        <ul class="dropdown menu">
            @if($navData->isAuthed)
                <li><span><a class="{{ Helpers::checkAct($activeMenu, 'auth') }}" href="{{ route('logout') }}">{{ $navData->user->given_name }}</a></span></li>
            @else
                <li><span><a class="{{ Helpers::checkAct($activeMenu, 'auth') }}" href="{{ route('login') }}">Login</a></span></li>
            @endif
        </ul>
    </div>
</div>