@extends('frontend.layout.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
<h1>{{ $post->title }}</h1>
@if($post->image_path)
    <img src="{{ $post->GetImagePath() }}" class="img-fluid my-3" alt="{{ $post->title }}">
@endif
<p>{{ $post->content }}</p>
<a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">← Back</a>
@endsection
