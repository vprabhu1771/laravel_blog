@extends('frontend.layout.app')

@section('title')
Home page
@endsection

@section('content')

@foreach($posts as $row)
<p>{{ $row->title }}</p>
@if($row->image_path)
    <img src="{{ $row->GetImagePath() }}" class="img-fluid my-3" alt="{{ $row->title }}">
@endif
<p>{{ Str::limit($row->content, 100) }}</p>
<a href="{{ route('posts.show', $row->id) }}">Read More</a>
@endforeach

@endsection