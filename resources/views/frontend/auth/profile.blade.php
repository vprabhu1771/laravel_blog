@extends('frontend.layout.app')

@section('title')
profile 
@endsection

@section('content')

<h1>Welcome, {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>

    <form method="POST" action="{{ route('auth.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
    
@endsection