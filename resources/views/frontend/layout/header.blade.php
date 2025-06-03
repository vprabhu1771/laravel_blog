<a href="{{route ('home')}}">Home</a>
@guest
<a href="{{route ('auth.login')}}">Login</a>
<a href="{{route ('auth.register')}}">Register</a>
@endguest

@if(Auth::check())
<a href="{{route ('auth.logout')}}">Logout</a>
@endif

<button onclick="toggleDarkMode()" class="px-4 py-2 rounded bg-gray-200 dark:bg-gray-800 dark:text-white">
    Toggle Dark Mode
</button>