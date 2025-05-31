@extends('frontend.layout.app')

@section('title')
success page  
@endsection

@section('content')

    <h1>Registration Successful!</h1>
    <p>You are now registered and logged in.</p>
    <a href="{{ route('auth.profile') }}">Go to Profile</a>

@endsection