@extends('frontend.layout.app')

@section('title')
login 
@endsection

@section('content')

    <h1>Login</h1>

    @if ($errors->any())
        <div>
            <strong>Login failed:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('auth.authenticate') }}">
        @csrf
        <label>Email:</label><br>
        <input type="email" name="email"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <button type="submit">Login</button>
    </form>

@endsection