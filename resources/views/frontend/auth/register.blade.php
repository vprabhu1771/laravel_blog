@extends('frontend.layout.app')

@section('title')
register 
@endsection

@section('content')

    <h1>Register</h1>

    @if ($errors->any())
        <div>
            <strong>Whoops! Something went wrong:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('auth.store') }}">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name"><br>

        <label>Email</label><br>
        <input type="email" name="email"><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <label>Confirm Password:</label><br>
        <input type="password" name="password_confirmation"><br><br>

        <button type="submit">Register</button>

    </form>

@endsection