@extends('frontend.layout.app')

@section('title')
Home page
@endsection

@section('content')

@foreach($posts as $row)

<div class="card bg-white dark:bg-gray-900 dark:text-white shadow rounded p-4">
    <h2 class="text-xl font-semibold">{{ $row->title }}</h2>
    @if($row->image_path)
        <img src="{{ $row->GetImagePath() }}" class="img-fluid my-3" alt="{{ $row->title }}">
    @endif
    <p class="text-sm">{{ Str::limit($row->description, 100) }}</p>
    <a href="{{ route('posts.show', $row->id) }}" class="text-blue-600 dark:text-blue-400 underline mt-2 inline-block">Read More</a>
</div>

@endforeach

@endsection