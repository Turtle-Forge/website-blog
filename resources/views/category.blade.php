@extends('layouts.main')

@section('title', 'Category')

@section('container')
    <h1>Blog | {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mt-5" style="border: 1px solid black; padding: 20px; border-radius: 8px">
            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
            <h6>By: {{ $post->author->name }}</h5>
                {!! $post->excerpt !!}
        </article>
    @endforeach

@endsection
