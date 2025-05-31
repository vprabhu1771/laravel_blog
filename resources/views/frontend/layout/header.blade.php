<a href="{{route ('home')}}">Home</a>
@guest
<a href="{{route ('auth.login')}}">Login</a>
<a href="{{route ('auth.register')}}">Register</a>
@endguest

@if(Auth::check())
<a href="{{route ('auth.logout')}}">Logout</a>
@endif